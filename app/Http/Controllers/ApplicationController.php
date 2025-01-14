<?php

namespace App\Http\Controllers;

use App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    public function handleSubmission(Request $request)
    {
        try {
            $input = $request->input();
            $validator = Validator::make($input, [
                'full_course_name' => 'required',
                'name' => 'required|min:3',
                'contact_number' => 'required',
                'email' => 'required|email',
                'postcode' => '',
                'preferred_communication_method' => '',
                'recaptcha_token' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => 'Invalid Request! Please fill the form correctly.' . $validator->errors()]);
            }
            $reCaptcha = $input['recaptcha_token'];
            $reCaptcha = Helpers::verifyReCaptcha($reCaptcha);
            if (!$reCaptcha) {
                return response()->json(['error' => 'Invalid google recaptcha response! Please verify again.']);
            }
            $response = [
                'course_name' => $request->full_course_name,
                'name' => $request->name,
                'contact_number' => $request->contact_number,
                'email' => $request->email,
                'postcode' => $request->postcode,
                'preferred_communication_method' => $request->preferred_communication_method,
                'created_at' => date('Y-m-d H:i:s')
            ];
            $emails = Config::get("mail.to.dev");
            if (Config::get('app.env') === 'prod') {
                if (preg_match('/^access-to-he/', $response['course_name']))
                    $emails = Config::get("mail.to.access_courses.prod");
                else
                    $emails = Config::get("mail.to.other_courses.prod");
            }
            Mail::send('emails.interest-application', ['input' => $response], function ($m) use ($response, $emails) {
                $m->subject("Course interest application received for [" . $response['course_name'] . "]");
                $m->from(Config::get('constants.CONTACT_FROM_EMAIL'), Config::get('constants.CONTACT_FROM_NAME'));
                foreach ($emails as $email) {
                    $m->to($email);
                }
            });
            return response()->json(['success' => true, 'msg' => 'Request has been submitted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}

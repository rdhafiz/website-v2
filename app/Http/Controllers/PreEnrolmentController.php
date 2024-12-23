<?php

namespace App\Http\Controllers;

use App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PreEnrolmentController extends Controller
{
    public function apply(Request $request)
    {
        $input = $request->input();
        $validator = Validator::make($input, [
            'course_name' => 'required',
            'time_slot' => 'required',
            'name' => 'required|min:5',
            'email' => 'required|email',
            'contact_number' => 'required',
            'recaptcha_token' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'Invalid Request! Please fill the form correctly.']);
        }

        $reCaptcha = $input['recaptcha_token'];
        $reCaptcha = Helpers::verifyReCaptcha($reCaptcha);
        if (!$reCaptcha) {
            return redirect()->back()->withInput($input)->withErrors([
                'error' => ['Invalid google recaptcha response! Please verify again.']
            ]);
        }


        if(!file_exists(resource_path('pre-apply'))){
            mkdir(resource_path('pre-apply'), 777);
        }

        $applyResponse = array(
            'course_name' => $request->course_name,
            'time_slot' => $request->time_slot,
            'name' => $request->name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'created_at' => date('Y-m-d H:i:s')
        );
        file_put_contents(resource_path('pre-apply/'.time().uniqid().'.json'), json_encode($applyResponse));

        $emails = Config::get("mail.to.dev");
        if (Config::get('app.env') === 'prod'){
            if ($applyResponse['course_name'] == 'access-to-he-nursing-midwifery')
                $emails = Config::get("mail.to.pre_enrolment_hnm.prod");
            else
                $emails = Config::get("mail.to.pre_enrolment.prod");
        }

        Mail::send('emails.pre-enrolment', ['input' => $applyResponse], function ($m) use ($applyResponse, $emails) {
            $m->subject("Submission for Information Requests for [".$applyResponse['course_name']."]");
            $m->from(Config::get('constants.CONTACT_FROM_EMAIL'), Config::get('constants.CONTACT_FROM_NAME'));
            foreach ($emails as $email) {
                $m->to($email);
            }
        });

        return response()->json(['success' => true, 'msg' => 'Request has been submitted successfully']);
    }
}

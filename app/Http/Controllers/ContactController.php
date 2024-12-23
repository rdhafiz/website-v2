<?php

namespace App\Http\Controllers;

use App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact(Request $request)
    {


        try {
            $input = $request->input();
            $validator = Validator::make($input, [
                'name' => 'required|min:5',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
                'city' => 'required',
                'contact_number' => 'required',
                'know_us' => 'required',
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
            if (!file_exists(resource_path('contact-us'))) {
                mkdir(resource_path('contact-us'), 777);
            }
            $contactResponse = array(
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'city' => $request->city,
                'contact_number' => $request->contact_number,
                'know_us' => $request->know_us,
                'created_at' => date('Y-m-d H:i:s')
            );
            file_put_contents(resource_path('contact-us/' . time() . uniqid() . '.json'), json_encode($contactResponse));
            $emails = Config::get('mail.to.dev');
            if (Config::get('app.env') === 'prod') {
                $emails = Config::get('mail.to.contact.prod');
            }
            Mail::send('emails.contact-enquiry', ['input' => $contactResponse], function ($m) use ($emails) {
                $m->subject('Contact from "Mediprospects"');
                $m->from(Config::get('constants.CONTACT_FROM_EMAIL'), Config::get('constants.CONTACT_FROM_NAME'));
                $m->to($emails);
            });
            return response()->json(['success' => true, 'msg' => 'Enquiry has been submitted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}

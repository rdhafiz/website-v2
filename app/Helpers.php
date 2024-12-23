<?php

namespace App;

use Illuminate\Support\Facades\Config;

class Helpers
{
    public static function verifyReCaptcha($reCaptcha)
    {
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('secret' => env('GOOGLE_RECAPTCHA'), 'response' => $reCaptcha),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response, true);
            if (isset($response['success'])) {
                return $response['success'];
            } else {
                return false;
            }
        } catch (\Exception $e) {
            return false;
        }
    }
}

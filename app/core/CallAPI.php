<?php

class CallAPI
{

    //private $url;
    public function __construct()
    {
    }

    public function CallAPI($method, $api, $actions, $data)
    {
        $url = "http://localhost/rest-api-dishub-bandung/api/" . $api . "/" . $actions;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        switch ($method) {
                // case "GET":
                //     curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                //     curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
                //     break;
            case "POST":
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                break;
            case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query(json_encode($data)));
        }
        $response = curl_exec($curl);
        $data = json_decode($response);

        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        /* Check for 404 (file not found). */
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        // Check the HTTP Status code
        switch ($httpCode) {
            case 200:
                $error_status = "200: Success";
                return ($data);
                break;
            case 404:
                $error_status = "404: API Not found";
                break;
            case 500:
                $error_status = "500: servers replied with an error.";
                break;
            case 502:
                $error_status = "502: servers may be down or being upgraded. Hopefully they'll be OK soon!";
                break;
            case 503:
                $error_status = "503: service unavailable. Hopefully they'll be OK soon!";
                break;
            default:
                $error_status = "Undocumented error: " . $httpCode . " : " . curl_error($curl);
                break;
        }
        curl_close($curl);
        echo $error_status;
        die;
    }
}

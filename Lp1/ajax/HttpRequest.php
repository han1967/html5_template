<?php

class HttpRequest{
    public $authentication;
    public $url;
    public $request;

    public function __construct()
    {
        $this->authentication = base64_encode("Bcure:d1aaf01cc5425ce23fd19baea8472d1267147483");

    }

    public function sendRequest($url,$request){
        if(is_null($request)){
            $request = [];
        }
        $this->url = $url;
        $this->request = $request;
        $ch = curl_init($this->url);
        $options = array(
            CURLOPT_RETURNTRANSFER => true,         // return web page
            CURLOPT_HEADER         => false,        // don't return headers
            CURLOPT_FOLLOWLOCATION => true,         // follow redirects
            CURLOPT_SSL_VERIFYHOST => 0,           // handle all encodings
            CURLOPT_AUTOREFERER    => true,         // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 500,          // timeout on connect
            CURLOPT_TIMEOUT        => 500,          // timeout on response
            CURLOPT_POST            => 1,            // i am sending post data
            CURLOPT_POSTFIELDS     => json_encode($this->request),    // this are my post vars
            CURLOPT_SSL_VERIFYPEER => false,        //
            CURLOPT_VERBOSE        => 1,
            CURLOPT_HTTPHEADER     => array(
                "Apikey: Basic ".$this->authentication,
                "Site: Bcure",
                "Content-Type: application/json"
            )

        );
        curl_setopt_array($ch,$options);
        $data = curl_exec($ch);
        $curl_errno = curl_errno($ch);
        $curl_error = curl_error($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//            if ( $httpCode != 200 ){
//                echo "Return code is {$httpCode} \n"
//                    .curl_error($ch);
//                $file =  htmlspecialchars($data);
//            } else {
//                $file =  htmlspecialchars($data);
//            }
        curl_close($ch);
        return $data;
    }

    public function  send_curl($INCHARGE_URL,$requestString,$method = null){
        $ch = curl_init();

        if(is_null($method)){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $requestString);
            curl_setopt($ch, CURLOPT_URL, $INCHARGE_URL);
        }else{
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_URL, $INCHARGE_URL.'?purchase='.$requestString);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json"
        ));

        $result_curl = curl_exec($ch);

        if(!$result_curl){
            echo 'Curl error: ' . curl_error($ch) . "<br />";
        }

        return json_decode($result_curl,true);
    }
}
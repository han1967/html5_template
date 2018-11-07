<?php
$status = 'off';
if (isset($_GET['status']) && $_GET['status']==1)
    $status = 'on';
function CurlSendPostRequest($url,$request)
{
    $authentication = base64_encode("LottoBooking:23d83a5270087435bef1657ed5728eff");

    $ch = curl_init($url);
    $options = array(
        CURLOPT_RETURNTRANSFER => true,         // return web page
        CURLOPT_HEADER         => false,        // don't return headers
        CURLOPT_FOLLOWLOCATION => true,         // follow redirects
        CURLOPT_SSL_VERIFYHOST => 0,           // handle all encodings
        CURLOPT_AUTOREFERER    => true,         // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 500,          // timeout on connect
        CURLOPT_TIMEOUT        => 500,          // timeout on response
        CURLOPT_CUSTOMREQUEST  => "PATCH",            // i am sending post data
        CURLOPT_POSTFIELDS     => $request,    // this are my post vars
//        CURLOPT_HTTPGET        => 1,
//        CURLOPT_URL            => $url.'?'.http_build_query($request),
//        CURLOPT_CUSTOMREQUEST  => "PUT",
//        CURLOPT_POSTFIELDS     =>  http_build_query($request),
        CURLOPT_SSL_VERIFYPEER => false,        //
        CURLOPT_VERBOSE        => 1,
        CURLOPT_HTTPHEADER     => array(
            "X-Auth-Email: martin@lottonetix.io",
            "X-Auth-Key: 7e8944ca583cd7a9ff60e648fa20e47c45229",
            "Content-Type: application/json"
        )

    );
    curl_setopt_array($ch,$options);
    $data = curl_exec($ch);
    $curl_errno = curl_errno($ch);
    $curl_error = curl_error($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    $response= '';
    if ( $httpCode != 200 ){
        $response .= "Return code is {$httpCode} \n".curl_error($ch);
        $response .= "<pre>".htmlspecialchars($data)."</pre>";
    } else {
        $response = "<pre>".htmlspecialchars($data)."</pre>";
    }
    curl_close($ch);
    return $data;
}
echo $res = CurlSendPostRequest('https://api.cloudflare.com/client/v4/zones/6a4ccf154385705f2b864339cc53af10/settings/development_mode',"{\"value\":\"".$status."\"}");
//echo $response = json_decode($res);
?>
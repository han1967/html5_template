<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include_once 'HttpRequest.php';
    $http = new HttpRequest();

    $monthDay = !empty($_POST['monthday']) ? $_POST['monthday'] : date('d');
    $hour = !empty($_POST['hour']) ? $_POST['hour'] : date('H:i');
    $hourArr = explode(":",$hour);
    $date = date('Y-m-d '.$hourArr[0].':'.$hourArr[1].':00', strtotime($monthDay));

    $request['name']         = !empty($_POST['name']) ? $_POST['name']:'';
    $request['surname']      = !empty($_POST['name']) ? $_POST['name']:'';
    $request['email']        = !empty($_POST['email']) ? $_POST['email']:'';
    $request['MobilePhone']  = !empty($_POST['phone']) ? $_POST['phone']:'';
    $request['leadStatusID'] = 24;
    $request['lastCallID']   = 24;
    $request['lastCallStatusName'] = 'Call Request';
    $request['ref']          = !empty($_SESSION['r']) ? $_SESSION['r'] : '';
    $request['a']            = !empty($_SESSION['a']) ? $_SESSION['a'] : '';
    $request['t']            = !empty($_SESSION['t']) ? $_SESSION['t'] : '';

    $createUser = $http->sendRequest("https://connectapi.lottonetix.io/api/v1/user/create",$request);
    $createUser = json_decode($createUser,true);

    if($createUser['status']['type'] == 'success') {
        $_SESSION['user']['id'] = $createUser['data']['user']['id'];
        $_SESSION['user']['email'] = !empty($_POST['email']) ? $_POST['email']:'';

        $requestEvent['userID'] = $_SESSION['user']['id'];
        $requestEvent['eventType'] = 'CalCallEvent';
        $requestEvent['subject'] = 'Call Now Form';
        $requestEvent['textEvent'] = 'No message';
        $requestEvent['dateEvent'] = $date;
        $requestEvent['ownerID'] = 1;
        $createEvent = $http->sendRequest("https://connectapi.lottonetix.io/api/v1/functions/call_event",$requestEvent);
        $createEvent = json_decode($createEvent,true);
        if($createEvent['status']['type'] == 'success'){
            echo json_encode(['success'=>'Created','session'=>'created']);
        }else{
            echo json_encode(['error'=>$createEvent['status']['message']]);
        }
    }else{
        echo json_encode(['error'=>$createUser['status']['message']]);
    }
?>
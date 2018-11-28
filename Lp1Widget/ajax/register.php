<?php
if(!isset($_SESSION)){
    session_start();
}
include_once 'HttpRequest.php';
$http = new HttpRequest();

if(isset($_POST['action'])){
    if($_POST['action'] == 'register'){
        $mobile = $_POST['MobilePhone'];
        $email = $mobile.'@nomail.pn';
        $monthDay = !empty($_POST['monthday']) ? $_POST['monthday'] : date('d');
        $hour = !empty($_POST['hour']) ? $_POST['hour'] : date('H:i');
        $hourArr = explode(":",$hour);
        $date = date('Y-m-d '.$hourArr[0].':'.$hourArr[1].':00', strtotime($monthDay));

        $request['email'] = $email;
        $request['MobilePhone'] = $mobile;
        $request['leadStatusID'] = 24;
        $request['ref']          = !empty($_SESSION['r']) ? $_SESSION['r'] : '';
        $request['a']            = !empty($_SESSION['a']) ? $_SESSION['a'] : '';
        $request['t']            = !empty($_SESSION['t']) ? $_SESSION['t'] : '';

        $createUser = $http->sendRequest("https://connectapi.lottonetix.io/api/v1/user/create",$request);
        $createUser = json_decode($createUser,true);

        if($createUser['status']['type'] == 'success') {
            $_SESSION['user']['id'] = $createUser['data']['user']['id'];
            $_SESSION['user']['email'] = $email;

            $requestEvent['userID'] = $_SESSION['user']['id'];
            $requestEvent['eventType'] = 'CalCallEvent';
            $requestEvent['subject'] = 'Call Now Form';
            $requestEvent['textEvent'] = 'No message';
            $requestEvent['dateEvent'] = $date;
            $requestEvent['ownerID'] = 1;
//            print_r($requestEvent);
            $createEvent = $http->sendRequest("https://connectapi.lottonetix.io/api/v1/functions/call_event",$requestEvent);
            $createEvent = json_decode($createEvent,true);
            if($createEvent['status']['type'] == 'success'){
//                echo json_encode(['success'=>'Your message is sent! Thank you!']);
                echo json_encode(['success'=>'Created','session'=>'created']);
            }else{
                echo json_encode(['error'=>$createEvent['status']['message']]);
            }
        }else{
            echo json_encode(['error'=>$createUser['status']['message']]);
        }
//        echo json_encode(['success'=>'Created']);
    }

    if($_POST['action'] == 'update'){
        $email = $_POST['email'];
        $userID = $_SESSION['user']['id'];
        $name = trim($_POST['name']);
        $message = !empty($_POST['message']) ? $_POST['message'] : 'No message';
        $monthDay = !empty($_POST['monthday']) ? $_POST['monthday'] : date('d');
        $hour = !empty($_POST['hour']) ? $_POST['hour'] : date('H:i');
        $hourArr = explode(":",$hour);
        $date = date('Y-m-d '.$hourArr[0].':'.$hourArr[1].':00', strtotime($monthDay));

        if(strpos($name," ") == true){
            $nameArr = explode(" ",$name);
            $name = $nameArr[0];
            $surname = $nameArr[1];
        }

        $request['email'] = $email;
        $request['userID'] = $userID;
        $request['name'] = $name;
        $request['surname'] = isset($surname) ? $surname : '';
//        print_r($request);
        $editUser = $http->sendRequest("https://connectapi.lottonetix.io/api/v1/functions/update_widget",$request);
        $editUser = json_decode($editUser,true);
//        print_r($editUser);
        if($editUser['status']['type'] == 'success'){
            $requestEvent['userID'] = $_SESSION['user']['id'];
            $requestEvent['eventType'] = 'User';
            $requestEvent['subject'] = 'Call Later Message Form';
            $requestEvent['textEvent'] = $message;
            $requestEvent['dateEvent'] = $date;
            $requestEvent['ownerID'] = 1;
//            print_r($requestEvent);
            $createEvent = $http->sendRequest("https://connectapi.lottonetix.io/api/v1/functions/call_event",$requestEvent);
            $createEvent = json_decode($createEvent,true);
            if($createEvent['status']['type'] == 'success'){
                echo json_encode(['success'=>'Your message is sent! Thank you!']);
            }else{
                echo json_encode(['error'=>$createEvent['status']['message']]);
            }
        }else{
            echo json_encode(['error'=>$editUser['status']['message']]);
        }
//        print_r($editUser);
//
//        print_r($createEvent);
//        print_r($editUser);
    }
}
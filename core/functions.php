<?php

    $logged_user;

    function sendResponse($type, $message, $fields = array()){
        $response['type'] = $type;
        $response['message'] = $message;
        foreach ($fields as $key => $value) $response[$key] = $value;
        die(json_encode($response));
    }

    function connectToDB($host, $login, $password, $db_name){
        $mysql = new mysqli($host, $login, $password, $db_name);

        if(!$mysql->connect_errno){
            return $mysql;
        }

        return null;
    }

    function getPlaces($condition){
        $response = 'SELECT * FROM `places` WHERE type=\'hotel\'';

        global $mysql;
        $result = $mysql->query($response);

        global $smarty;
        $smarty->assign('places', $result->fetch_all(MYSQLI_ASSOC));
    }

    function getObjects($condition){
        $response = 'SELECT * FROM `objects` WHERE '.$condition;

        global $mysql;
        $result = $mysql->query($response);
        
        global $smarty;
        $smarty->assign('objects', $result->fetch_all(MYSQLI_ASSOC));
    }

?>
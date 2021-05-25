<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/init.php');
    require_once('auth.php');
    
    $post = $_POST;

    if($post){
        switch($post['operation']){
            case 'signin': signinUser($post);
            break;

            case 'signup': signupUser($post);
            break;

            case 'logout': logoutUser();
            break;

            default:
            break;
        }
    } else {
        sendResponse('error', 'Ошибка отправки формы');
    }

?>
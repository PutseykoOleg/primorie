<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/init.php');
    
    function signinUser($post){
        /*** Red Bean ***/
        // $user = R::findOne('users', 'code = ?', array($post['code']));

        /*** MySQL ***/

        $user = findUser($post);

        if($user){
            setSession($user);
        } else {
            sendResponse('error', 'Ошибка чтения из базы данных');
        }
    }

    function signupUser($post){
        /*** Red Bean ***/

        // $user = R::dispense('users');
        // $user->name = $post['name'];
        // $user->img = R::findOne('users', 'code = ?', "#qwe")->img;
        // $user->code = $post['code'];
        // $user = R::store($user);
        
        /*** MySQL ***/

        if(addUser($post)){
            $user = findUser($post);
            if($user){
                setSession($user);
            } else {
                sendResponse('error', 'Ошибка чтения из базы данных');
            }
        } else {
            sendResponse('error', 'Ошибка добавления в дазу данных');
        }
    }

    function logoutUser(){
        unsetSession();
    }

    ########################

    function addUser($post){
        $response = 'INSERT INTO `users` SET 
                        name = \''. $post['name'] .'\',
                        code = \''. $post['code'] .'\'';

        global $mysql;
        return $mysql->query($response);
    }

    function findUser($post){
        $response = 'SELECT * FROM `users` WHERE code=\''.$post['code'].'\'';

        global $mysql;
        $result = $mysql->query($response)->fetch_assoc();
        
        return $result;
    }

    function setSession($user){
        $_SESSION['logged'] = true;
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_type'] = $user['type'];
        $_SESSION['user_img'] = $user['img'];
    }

    function unsetSession(){
        unset($_SESSION['logged']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_type']);
        unset($_SESSION['user_img']);
    }

?>
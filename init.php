<?php 

    session_start();

    # consts
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);
    define('CORE_DIR', ROOT . '/core');
    define('LIBS_DIR', ROOT . '/libs');
    define('TEMPLATE_DIR', ROOT . '/template');

    # including libs
    require_once( ROOT . '/config.php' );
    require_once(CORE_DIR . '/functions.php');
    require_once(LIBS_DIR . '/smarty/Smarty.class.php');
    require_once(LIBS_DIR . '/redbean/rb-mysql.php');

    # initialization
    $smarty = new Smarty();

    # rules for smarty
    $smarty->setTemplateDir(ROOT . '/template');
    $smarty->setCompileDir(ROOT . '/template_c');
    $smarty->setConfigDir(ROOT . '/configs');
    $smarty->setCacheDir(ROOT . '/cache');

    # connection to database
    // R::setup('mysql:host=localhost;dbname=familygames', 'root', 'root');
    $mysql = connectToDB('localhost', 'root', 'root', 'primorie');

    # vars
    $smarty->assign('page', $_GET['page']);
    
    getPlaces('');

?>
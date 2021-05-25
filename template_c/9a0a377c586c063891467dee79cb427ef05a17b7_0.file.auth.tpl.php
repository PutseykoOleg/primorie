<?php
/* Smarty version 3.1.38, created on 2021-02-17 22:42:39
  from 'L:\home\fgfgfg.com\template\guest\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602d012f369150_75189750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a0a377c586c063891467dee79cb427ef05a17b7' => 
    array (
      0 => 'L:\\home\\fgfgfg.com\\template\\guest\\auth.tpl',
      1 => 1613562157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602d012f369150_75189750 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" media="all" href="assets/css/auth/auth_all.css">
    <link rel="stylesheet" media="(orientation: landscape)" href="assets/css/auth/auth_landscape.css">
    <link rel="stylesheet" media="(orientation: portrait)" href="assets/css/auth/auth_portrait.css">
</head>
<body>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
    <div class="content">
        <form class="auth-block" action data-operation="authorisation">
            <p class="auth-answer-text">Do u wanna play?</p>
            <p class="auth-request-text">Enter your personal code</p>
            <input class="auth-input" name="login" pattern="#[A-Za-z]*" autofocus required maxlength="10">
            <input type="button" id="bttn" class="button1">
        </form>
        <p class="auth-hello-text">HELLO</p>
    </div>
</body>
</html><?php }
}

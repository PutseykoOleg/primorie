<?php
/* Smarty version 3.1.38, created on 2021-05-23 21:31:58
  from 'C:\OpenServer\domains\ptptpt.com\template\components\auth\signin-block.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60aa9f9e937af4_51238126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3820ca6e61de4bd1483b1c331d1ca19c0bdd617' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ptptpt.com\\template\\components\\auth\\signin-block.htm',
      1 => 1621664137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa9f9e937af4_51238126 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="auth-block content-ha-center unselectable" action data-operation="signin">
    <h1 class="title">HELLO</h1>
    <p class="message" style="overflow: hidden;">Do u wanna play?</p>
    <p class="message">Enter your personal code</p>
    <input id="login-input" class="auth-input" name="code" pattern="#[A-Za-z]*" autofocus autocomplete="off" required maxlength="10">
    <p>or <a id="to_signup_btn">Sign Up</a></p>
</form><?php }
}

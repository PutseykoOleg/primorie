<?php
/* Smarty version 3.1.38, created on 2021-05-22 09:17:42
  from 'C:\OpenServer\domains\fgfgfg.com\template\components\auth\signin-block.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a8a206d70ad5_44211035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8cfc87f12ac7671a6e0decb3682478844eb5de7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\components\\auth\\signin-block.htm',
      1 => 1621664137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a8a206d70ad5_44211035 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="auth-block content-ha-center unselectable" action data-operation="signin">
    <h1 class="title">HELLO</h1>
    <p class="message" style="overflow: hidden;">Do u wanna play?</p>
    <p class="message">Enter your personal code</p>
    <input id="login-input" class="auth-input" name="code" pattern="#[A-Za-z]*" autofocus autocomplete="off" required maxlength="10">
    <p>or <a id="to_signup_btn">Sign Up</a></p>
</form><?php }
}

<?php
/* Smarty version 3.1.38, created on 2021-05-19 23:36:32
  from 'C:\OpenServer\domains\fgfgfg.com\template\components\login-to-room-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a576d0e525d2_52344189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85431caf3ab4eb0fade68ba2ec9266ac75227953' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\components\\login-to-room-block.tpl',
      1 => 1621456591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a576d0e525d2_52344189 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="auth-block content-ha-center unselectable" action data-operation="authorisation">
    <h1 class="title">HELLO</h1>
    <p class="message" style="overflow: hidden;">Do u wanna play?</p>
    <p class="message">Enter your invite code</p>
    <input class="auth-input" name="login" pattern="#[A-Za-z]*" autofocus required maxlength="10">
    <p>or <a id="login_account_btn">Log In</a></p>
</form><?php }
}

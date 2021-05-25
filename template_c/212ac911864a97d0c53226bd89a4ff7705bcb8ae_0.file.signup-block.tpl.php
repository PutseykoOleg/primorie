<?php
/* Smarty version 3.1.38, created on 2021-05-21 13:56:36
  from 'C:\OpenServer\domains\fgfgfg.com\template\components\auth\signup-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a791e48e42b6_00872422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '212ac911864a97d0c53226bd89a4ff7705bcb8ae' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\components\\auth\\signup-block.tpl',
      1 => 1621594314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a791e48e42b6_00872422 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="auth-block content-ha-center unselectable" action data-operation="signup">
    <h1 class="title">HELLO</h1>
    <p class="message" style="overflow: hidden;">Do u wanna play?</p>

    <p id="step-1-text" class="message">Enter your name</p>
    <input id="step-1-input" class="auth-input" name="name" pattern="([A-Za-z]*)|([А-Яа-я]*)" autofocus required maxlength="15">

    <p id="step-2-text" class="message">Enter your Email</p>
    <input id="step-2-input" class="auth-input" name="email" email autofocus required>

    <p id="step-3-text" class="message">Enter the code</p>
    <input id="step-3-input" class="auth-input" name="code" pattern="[A-Za-z]*" autofocus required maxlength="9">

    <p id="step-4-text" class="message">Confirm the code</p>
    <input id="step-4-input" class="auth-input" name="code1" pattern="[A-Za-z]*" autofocus required maxlength="9">

    <p>or <a id="to_login_btn">Log In</a></p>
</form><?php }
}

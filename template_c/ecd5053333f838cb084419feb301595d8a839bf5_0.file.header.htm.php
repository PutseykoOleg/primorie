<?php
/* Smarty version 3.1.38, created on 2021-05-23 07:26:48
  from 'C:\OpenServer\domains\fgfgfg.com\template\components\public\header.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a9d988e23ea8_64053568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecd5053333f838cb084419feb301595d8a839bf5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\components\\public\\header.htm',
      1 => 1621743445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a9d988e23ea8_64053568 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="row">
    <nav class="header-menu display-flex content-ha-center content-va-center">
        <div class="display-flex header-menu-points">
            <a>Games</a>
            <a>Rooms</a>
            <a>qwe</a>
        </div>
    </nav>
    <div class="header-user col display-flex content-va-center content-ha-center">
        <div class="col display-flex content-ha-center" style="width:100%">
            <div class="row user-elements">
                <span class="user-name"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</span>
                <div class="user-img color-4 br-50" src="template/assets/img/users/<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
.png">
                    <img class="header-user_image">
                </div>
            </div>
            <nav class="display-flex col content-va-center">
                <div class="menu-point display-flex col content-va-center"><h3>Profile</h3></div>
                <?php if ($_smarty_tpl->tpl_vars['user_type']->value == 'admin') {?>
                    <div class="menu-point display-flex col content-va-center"><h3>Admin panel</h3></div>
                <?php }?>
                <div class="menu-point display-flex col content-va-center">
                    <form action data-operation="logout">
                        <button id="logout-button">Exit</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</header><?php }
}

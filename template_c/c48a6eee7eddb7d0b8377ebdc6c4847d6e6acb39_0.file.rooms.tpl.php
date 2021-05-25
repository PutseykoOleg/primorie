<?php
/* Smarty version 3.1.38, created on 2021-05-19 21:10:29
  from 'C:\OpenServer\domains\fgfgfg.com\template\user\pages\rooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a55495429540_66601643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c48a6eee7eddb7d0b8377ebdc6c4847d6e6acb39' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\user\\pages\\rooms.tpl',
      1 => 1621447639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a55495429540_66601643 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" media="all" href="../../assets/css/colors.css">
    <link rel="stylesheet" media="all" href="../../assets/css/style.css">
    <!-- <link rel="stylesheet" media="(orientation: portrait)" media="all" href="assets/css/style_portrait.css"> -->
    
    <!-- <link rel="stylesheet" media="(orientation: portrait)" href="assets/css/main/main_portrait.css"> -->
</head>
<body>
    <header class="row">
        <nav class="header-menu display-flex content-ha-center content-va-center">
            <div class="display-flex header-menu-points">
                <a>Games</a>
                <a>Rooms</a>
                <a>qwe</a>
            </div>
        </nav>
        <div class="header-user row content-va-center content-ha-center">
            <span class="user-name">Aigul</span>
            <div class="user-img color-4 br-50">
                <img class="header-user_image">
            </div>
        </div>
    </header>

    <content class="content display-flex content-ha-center content-va-center">
        <table cellpadding="0" cellspacing="50">
            <tr>
                <td class="content-ha-center increasable">
                    <div class="room-block existent-game color-1 portrait-row">
                        <img class="game-logo" src="assets/img/game_logo/quiz-logo.png">
                        <p class="game-title">QUIZ</p>
                    </div>
                </td>
                <td class="content-ha-center increasable">
                    <div class="room-block existent-game color-2">
                        <img class="game-logo" src="assets/img/game_logo/yes_or_no-logo.png">
                        <p class="game-title">YES or NO</p>
                    </div>
                </td>
                <td class="content-ha-center increasable">
                    <div class="room-block non-existent-game color-3 portrait-row">
                        <img class="game-logo" src="assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="content-ha-center increasable">
                    <div class="room-block non-existent-game color-4">
                        <img class="game-logo" src="assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
                <td id="qwe" class="content-ha-center increasable">
                    <div class="room-block non-existent-game color-5 portrait-row">
                        <img class="game-logo" src="assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
                <td class="content-ha-center increasable">
                    <div class="room-block non-existent-game color-6">
                        <img class="game-logo" src="assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
            </tr>
        </table>
    </content>

    <footer class="display-flex content-ha-center content-va-center">
        <!-- <div class="col">
            <p>© 2021 Space.code</p>
            <p>© 2021 Space.dsgn</p>
        </div> -->
    </footer>

    <?php echo '<script'; ?>
>
        
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}

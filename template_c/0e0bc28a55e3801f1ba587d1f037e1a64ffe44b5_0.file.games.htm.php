<?php
/* Smarty version 3.1.38, created on 2021-05-23 21:24:18
  from 'C:\OpenServer\domains\fgfgfg.com\template\user\pages\games.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60aa9dd2241531_04335440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e0bc28a55e3801f1ba587d1f037e1a64ffe44b5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\user\\pages\\games.htm',
      1 => 1621794254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa9dd2241531_04335440 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" media="all" href="template/assets/css/colors.css">
    <link rel="stylesheet" media="all" href="template/assets/css/style.css">
</head>
<body>
    <div class="row">
        <section id="friends">
            <p class="title">FRIE<a>н</a>DS</p>
            <div class="friends-list col display-flex content-ha-center">
                <div class="friend display-flex">
                    <div class="data row display-flex content-va-center">
                        <img src="/template/assets/img/empty-img.png">
                        <p class="name">Aileen</p>
                    </div>
                    <div class="friend-actions row">
                        <div class="text-to-user"></div>
                    </div>
                </div>
                <div class="friend display-flex content-va-center">
                    <div class="data row display-flex content-ha-right content-va-center">
                        <img src="/template/assets/img/empty-img.png">
                        <p class="name">Oleg</p>
                    </div>
                    <div class="friend-actions row">
                        <div class="text-to-user"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="games">
            <div class="content-ha-center">
                <h2 class="title">цяцьки</h2>
                <div class="games-list">
                    <div class="row">
                        <div class="game col"></div>
                        <div class="game col"></div>
                        <div class="game col"></div>
                    </div>
                    <div class="row">
                        <div class="game col"></div>
                        <div class="game col"></div>
                        <div class="game col"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="user">
            <div class="content">
                <form action data-operation="logout">
                    <a id="logout-btn" class="logout-btn">exit</a>
                </form>
                <nav class="menu col">
                    <a id="profile">profile</a>
                    <?php if ($_smarty_tpl->tpl_vars['user_type']->value == 'admin') {?>
                        <a>admin panel</a>
                    <?php }?>
                    <a>settings</a>
                </nav>
            </div>
            <div class="data row">
                <a class="title"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</a>
                <img src="/template/assets/img/empty-img.png">
            </div>
        </section>
    </div>

    <!-- <content class="content display-flex content-ha-center content-va-center">
        <table cellpadding="0" cellspacing="50">
            <tr>
                <td class="content-ha-center increasable">
                    <div class="game-block existent-game color-1 portrait-row">
                        <img class="game-logo" src="template/assets/img/game_logo/quiz-logo.png">
                        <p class="game-title">QUIZ</p>
                    </div>
                </td>
                <td class="content-ha-center increasable">
                    <div class="game-block existent-game color-2">
                        <img class="game-logo" src="template/assets/img/game_logo/yes_or_no-logo.png">
                        <p class="game-title">YES or NO</p>
                    </div>
                </td>
                <td class="content-ha-center increasable">
                    <div class="game-block non-existent-game color-3 portrait-row">
                        <img class="game-logo" src="template/assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="content-ha-center increasable">
                    <div class="game-block non-existent-game color-4">
                        <img class="game-logo" src="template/assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
                <td id="qwe" class="content-ha-center increasable">
                    <div class="game-block non-existent-game color-5 portrait-row">
                        <img class="game-logo" src="template/assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
                <td class="content-ha-center increasable">
                    <div class="game-block non-existent-game color-6">
                        <img class="game-logo" src="template/assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
            </tr>
        </table>
    </content> -->

    <!-- <footer class="display-flex content-ha-center content-va-center">
        <div class="col">
            <p>© 2021 Space.code</p>
            <p>© 2021 Space.dsgn</p>
        </div>
    </footer> -->
    
    <?php echo '<script'; ?>
 src="/libs/jquery/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/template/assets/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/template/assets/js/logout.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        let btn = document.getElementById('profile')

        let user = document.getElementById('user')
        let games = document.getElementById('games')

        btn.onclick = function(){
            user.classList.add('open-to-left')
            games.classList.add('close')
        }
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}

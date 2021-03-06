<?php
/* Smarty version 3.1.30, created on 2017-08-02 23:27:29
  from "D:\wamp\www\BaiJiaHao\application\views\admin\admin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5981ef61563b83_52163626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab78c55b47fc47ea54bee038caba6311fb9c3a66' => 
    array (
      0 => 'D:\\wamp\\www\\BaiJiaHao\\application\\views\\admin\\admin.html',
      1 => 1501655041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5981ef61563b83_52163626 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台首页</title>
    <link rel="stylesheet" href="public/css/admin/admin.css">
    <link rel="shortcut icon" href="public/imgs/logos/favicon.png"/>
</head>
<body>
<div class="container-fluid admin">
    <div class="row top">
        <div class="col-md-2 text-center">
            <img src="public/imgs/logos/baidu.gif" title="400*114" id="logo">
        </div>
        <div class="col-md-1">
            <span class="fa fa-navicon" id="list" style="color: #9d9d9d; font-size: 16px; float: right; margin-top: 21.5px" title="隐藏菜单栏"></span>
        </div>
        <div class="col-md-9 topRight">
            <a href="?c=admin">后台首页</a>
            <a href="?c=index" target="_blank">百家首页</a>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    用户名：<?php echo $_SESSION['admin'][0]['user'];?>

                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="?c=user&action=logout">注销账户</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">登陆次数:<?php echo $_SESSION['admin'][0]['login_num'];?>
</a>
                    </li>
                    <li>
                        <a href="#">上次登陆时间:<?php echo $_SESSION['admin'][0]['last_time'];?>
</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row middle">
        <div class="col-md-2 middleLeft" style=" width: 16.6%;">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <!--导航-->
                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="false" aria-controls="collapseOne">
                                导航管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li><a href="?c=nav&action=show" target="main">管理导航</a></li>
                                <li><a href="?c=nav&action=add" target="main">添加导航</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--文章-->
                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                               aria-expanded="false" aria-controls="collapseThree">
                                文章管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li><a href="?c=article&action=show" target="main">管理文章</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--用户-->
                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingfour">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour"
                               aria-expanded="false" aria-controls="collapsefour">
                                用户管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingfour">
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li><a href="?c=uManage&action=show" target="main">管理用户</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 middleRight">
            <iframe name="main" src="?c=admin&m=welcome" frameborder="0">
            </iframe>
        </div>
    </div>

</div>
</body>
</html><?php }
}

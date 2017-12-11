<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!-- header start -->
    <?php echo view('index.header', $header); ?>
    <!-- header end -->
</head>
<body class="home blog custom-background">
<div id="page" class="hfeed site">

    <!-- 这里是导航模块 -->
    <header id="masthead" class="site-header">
        <div id="header-main" class="header-main">
            <nav id="top-header">
                <div class="top-nav">
                    <div id="user-profile">
                        <div class="user-login">欢迎光临【花好月圆的个人经验】！</div>
                        <div class="nav-set">
                            <div class="nav-login">
                                <a href="javascript:;" id="login-main">登录</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="menu-menutop-container"><ul id="menu-menutop" class="top-menu">
                            <!--<li id="menu-item-3720" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3720"><a title="明月登楼博客收费服务" target="_blank" href="https://blog.ymanz.com/charge.html"><i class="be be-weibiaoti-"></i><span class="font-text">敬请期待</span></a></li>-->
                        </ul></div> </div>
            </nav>
            <div id="menu-box">
                <div id="top-menu">
                    <span class="nav-search"></span>
                    <div class="logo-site">
                        <h1 class="site-title">
                            <a href="javascript:;"><img src="<?php echo config('local')['website']; ?>/static/image/logo.png" title="花好月圆的个人经验" alt="花好月圆的个人经验" rel="home" /><span class="site-name">花好月圆的个人经验</span></a>
                        </h1>
                    </div>
                    <div id="site-nav-wrap">
                        <div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close">×</a></div>
                        <div id="sidr-menu"><div class="toggle-sidr-menu">MENU</a></div></div>
                        <nav id="site-nav" class="main-nav">
                            <a href="#sidr-main" id="navigation-toggle" class="bars"><i class="be be-menu"></i></a>
                            <div class="menu-menu-container"><ul id="menu-menu" class="down-menu nav-menu"><li id="menu-item-481" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-481"><a title="花好月圆的个人经验" href="<?php echo config('local')['website']; ?>/">首页</a></li>
                                    <li id="menu-item-12" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-12"><a title="旅行分享的个人经验！" href="javascript:;">旅行分享</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-4141" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4141"><a href="javascript:;">浪迹天涯</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-3673" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-3673"><a href="javascript:;">关于我</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-958" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-958"><a href="javascript:;">个人简介</a></li>
                                        </ul>
                                    </li>
                                </ul></div> </nav>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </header>
    <div id="search-main">
        <div class="clear"></div>
    </div>
    <!-- 这里是导航模块 -->


    <!-- 这里是公告模块 -->
    <nav class="breadcrumb">
        <div class="bull"><i class="be be-volumedown"></i></div><div id="scrolldiv">
            <div class="scrolltext">
                <ul>
                    <li class="scrolltext-title"><a href="javascript:;" rel="bookmark">关于信息规范化要求的通知</a></li>
                    <li class="scrolltext-title"><a href="javascript:;" rel="bookmark">关于信息规范化要求的通知2</a></li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">$(document).ready(function() {$("#scrolldiv").textSlider({line:1,speed:300,timer:6000});})</script>
    </nav>
    <!-- 这里是公告模块 -->

    <!-- 这里是中间内容模块 -->
    <div id="content" class="site-content">
        <!-- 左内容 start -->
        <div id="primary" class="content-area">
            <?php echo view($myview, $data); ?>
        </div>
        <!-- 左内容 end -->


        <!-- 右导航 start -->
        <div id="sidebar" class="widget-area all-sidebar">
            <?php echo view('index.sidebar', $sidebar); ?>
        </div>
        <!-- 右导航 end -->
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <!-- 这里是中间内容模块 -->

    <!-- 这里是版权说明模块 -->
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
            <strong>Copyright © 2011-2018年 myshared.top 花好月圆  版权所有.<a href="javascript:;">xxxxx</a> </strong> <span class="add-info">
        </div>
    </footer>
    <!-- 这里是版权说明模块 -->

    <!-- 这里是版权说明模块 -->
    <ul id="scroll">
        <li class="log log-no"><a class="log-button" title="文章目录"><i class="be be-menu"></i></a><div class="log-prompt"><div class="log-arrow">文章目录</div></div></li>
        <li><a class="scroll-h" title="返回顶部"><i class="be be-arrowup"></i></a></li>
        <li><a class="scroll-b" title="转到底部"><i class="be be-arrowdown"></i></a></li>
        <script type="text/javascript">$(document).ready(function(){if(!+[1,]){present="table";} else {present="canvas";}$('#output').qrcode({render:present,text:window.location.href,width:"150",height:"150"});});</script>
    </ul>
    <!-- 这里是版权说明模块 -->
</div>



<!-- footer start -->
<?php echo view('index.footer', $footer); ?>
<!-- footer end -->
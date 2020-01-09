<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?php urlSite('/application/views/res/admin/css/font-face.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php urlSite('/application/views/res/admin/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?> " rel="stylesheet" media="all">
    <link href="<?php urlSite('/application/views/res/admin/vendor/font-awesome-5/css/fontawesome-all.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php urlSite('/application/views/res/admin/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php urlSite('/application/views/res/admin/vendor/bootstrap-4.1/bootstrap.min.css'); ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php urlSite('/application/views/res/admin/vendor/animsition/animsition.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php urlSite('/application/views/res/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php urlSite('/application/views/res/admin/vendor/wow/animate.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php urlSite('/application/views/res/admin/vendor/css-hamburgers/hamburgers.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php urlSite('/application/views/res/admin/vendor/slick/slick.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php urlSite('/application/views/res/admin/vendor/select2/select2.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php urlSite('/application/views/res/admin/vendor/perfect-scrollbar/perfect-scrollbar.css'); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php urlSite('/application/views/res/admin/css/theme.css'); ?>" rel="stylesheet" media="all">

    <link rel="stylesheet" href="<?php urlSite('/application/views/res/admin/css/main.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php urlSite('/application/views/res/admin/css/demos.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php urlSite('/application/views/res/admin/css/jquery.Jcrop.css'); ?>" type="text/css" />

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?php urlSite('/admin/'); ?>">
                            <img src="<?php urlSite('/application/views/res/admin/images/icon/logo.png'); ?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="<?php urlSite('/admin/photo'); ?>">
                                <i class="far fa-check-square"></i>Cadastrar Foto</a>
                        </li>
                        <li>
                            <a href="<?php urlSite('/admin/photos'); ?>">
                                <i class="fas fa-table"></i>Fotos da galeria</a>
                        </li>
                        <li>
                            <a href="<?php urlSite('/admin/project'); ?>">
                                <i class="far fa-check-square"></i>Cadastrar Projeto</a>
                        </li>
                        <li>
                            <a href="<?php urlSite('/admin/projects'); ?>">
                                <i class="fas fa-table"></i>Projetos</a>
                        </li>
                        <li>
                            <a href="<?php urlSite('/admin/post'); ?>">
                                <i class="far fa-check-square"></i>Criar Post no Blog</a>
                        </li>
                        <li>
                            <a href="<?php urlSite('/admin/posts'); ?>">
                                <i class="fas fa-table"></i>Blog / Posts</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?php urlSite('/admin/'); ?>">
                    <img src="<?php urlSite('/application/views/res/admin/images/icon/logo.png'); ?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                       <li>
                            <a href="<?php urlSite('/admin/photo'); ?>">
                                <i class="far fa-check-square"></i>Cadastrar Foto</a>
                        </li>
                        <li>
                            <a href="<?php urlSite('/admin/photos'); ?>">
                                <i class="fas fa-table"></i>Fotos da galeria</a>
                        </li>
                        <li>
                            <a href="<?php urlSite('/admin/project'); ?>">
                                <i class="far fa-check-square"></i>Cadastrar Projeto</a>
                        </li>
                        <li>
                            <a href="<?php urlSite('/admin/projects'); ?>">
                                <i class="fas fa-table"></i>Projetos</a>
                        </li>
                        <li>
                            <a href="<?php urlSite('/admin/post'); ?>">
                                <i class="far fa-check-square"></i>Criar Post no Blog</a>
                        </li>
                        <li>
                            <a href="<?php urlSite('/admin/posts'); ?>">
                                <i class="fas fa-table"></i>Blog / Posts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Pesquisar......." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity"><?php echo $number_news_messages; ?></span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p><?php 
                                                    if($number_news_messages > 0)
                                                    {
                                                        echo "Você possui ".$number_news_messages." novas mensagens";
                                                    }
                                                    else
                                                    {
                                                        echo "Você não possui novas mensagens";
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                            <?php
                                            if($number_news_messages > 0)
                                            {
                                            foreach($news_messages as $news_messages_item){
                                            //Formatando a data
                                            $date = $news_messages_item["dt_message"];

                                            $dt = explode(" ", $date);

                                            $date_non_formated = explode("-", $dt[0]);

                                            $date_formated = $date_non_formated[2]."/".$date_non_formated[1]."/".$date_non_formated[0];

                                            $time = $dt[1];

                                            $date_formated = $date_formated." às ".$time;
                                            //Fim da formatação

                                            ?>
                                            <a href="#"><div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php urlSite('/application/views/res/admin/images/icon/perfil-default.png'); ?>" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <a href="message/<?php echo $news_messages_item["id"]; ?>"><h6><?php echo $news_messages_item["name"]; ?></h6>
                                                    <p>Enviou uma mensagem</p>
                                                    <span class="time"><?php echo $date_formated; ?></span></a>
                                                </div>
                                            </div></a>
                                            <?php }} ?>
                                            <div class="mess__footer">
                                                <a href="messages">Ver todas as mensagens</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php urlSite('/'.$photographer['photo']); ?>" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $photographer["name"];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php urlSite('/'.$photographer['photo']); ?>" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $photographer["name"];?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $photographer["email"];?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?php urlSite('/admin/account'); ?>">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="<?php urlSite('/admin/setting'); ?>">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php urlSite('/admin/logout'); ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
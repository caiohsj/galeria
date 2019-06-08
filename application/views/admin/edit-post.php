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
    <link href="../../application/views/res/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../application/views/res/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../application/views/res/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../application/views/res/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../application/views/res/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../application/views/res/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../application/views/res/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../application/views/res/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../application/views/res/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../application/views/res/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../application/views/res/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../application/views/res/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../application/views/res/admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="../../application/views/res/admin/images/icon/logo.png" alt="CoolAdmin" />
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
                        <li class="has-sub">
                            <a class="js-arrow" href="../">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="../photo">
                                <i class="far fa-check-square"></i>Cadastrar Foto</a>
                        </li>
                        <li>
                            <a href="../project">
                                <i class="far fa-check-square"></i>Cadastrar Projeto</a>
                        </li>
                        <li>
                            <a href="../projects">
                                <i class="fas fa-table"></i>Projetos</a>
                        </li>
                        <li>
                            <a href="../post">
                                <i class="far fa-check-square"></i>Criar Post no Blog</a>
                        </li>
                        <li>
                            <a href="../posts">
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
                <a href="#">
                    <img src="../../application/views/res/admin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="../">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="../photo">
                                <i class="far fa-check-square"></i>Cadastrar Foto</a>
                        </li>
                        <li>
                            <a href="../project">
                                <i class="far fa-check-square"></i>Cadastrar Projeto</a>
                        </li>
                        <li>
                            <a href="../projects">
                                <i class="fas fa-table"></i>Projetos</a>
                        </li>
                        <li>
                            <a href="../post">
                                <i class="far fa-check-square"></i>Criar Post no Blog</a>
                        </li>
                        <li>
                            <a href="../posts">
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
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
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
                                                    <img src="../../application/views/res/admin/images/icon/perfil-default.png" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <a href="../message/<?php echo $news_messages_item["id"]; ?>"><h6><?php echo $news_messages_item["name"]; ?></h6>
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
                                            <img src="../../application/views/res/admin/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $photographer["name"];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../../application/views/res/admin/images/icon/avatar-01.jpg" alt="John Doe" />
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
                                                    <a href="../account">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="../setting">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout">
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Editar post</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="../update/post/<?php echo $post_item['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Título</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="title" placeholder="" class="form-control" value="<?php echo $post_item['title']; ?>">
                                                    <small class="form-text text-muted">Informe o título do projeto</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Descrição</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Descrição deste projeto..." class="form-control"><?php echo $post_item["description"]; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../../application/views/res/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../application/views/res/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../application/views/res/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../application/views/res/admin/vendor/slick/slick.min.js">
    </script>
    <script src="../../application/views/res/admin/vendor/wow/wow.min.js"></script>
    <script src="../../application/views/res/admin/vendor/animsition/animsition.min.js"></script>
    <script src="../../application/views/res/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../application/views/res/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../application/views/res/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../application/views/res/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../application/views/res/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../application/views/res/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../application/views/res/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../../application/views/res/admin/js/main.js"></script>

</body>

</html>
<!-- end document-->
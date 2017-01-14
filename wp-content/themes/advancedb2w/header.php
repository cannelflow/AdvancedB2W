<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

<?php wp_head() ; ?>

</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <?php 
                   $defaults = array(
                          'container'      => 'ul',
                          'theme_location' => 'primary',
                          'menu_class'     => 'nav navbar-nav navbar-right',
                       );
                    wp_nav_menu($defaults);   
                ?>
                
                <!--<ul class="nav navbar-nav navbar-right">-->
                <!--    <li>-->
                <!--        <a href="index.html">Home</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--        <a href="about.html">About</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--        <a href="post.html">Sample Post</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--        <a href="contact.html">Contact</a>-->
                <!--    </li>-->
                <!--</ul>-->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
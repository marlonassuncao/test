<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/app/images/favicon.png">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/app/styles/main.min.css">


        <?php wp_head(); ?>

        <!-- Please dont use IE :D -->
        <!--[if lt IE 8]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body id="top">
        <header id="header">
            <div class="btnav">
                <i class="fa fa-bars"></i>
            </div>
            <div class="container">
                <div class="col-md-3">
                    <nav class="nav wow fadeIn" data-wow-delay=".2s">
                        <ul>          
                            <li>
                                <a href="<?php bloginfo('template_directory'); ?>/catalogo.pdf" target="_blank">produtos</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/#contato">contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6">
                    <div class="logo">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_directory'); ?>/app/images/logo.svg" class="img-responsive wow bounceIn" data-wow-delay=".8s" alt="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>">
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="socials wow fadeIn" data-wow-delay=".2s">
                        <li>
                            <a href="https://www.facebook.com/lepotgourmetbh" class="c1" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/lepotgourmetbh" class="c2" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:contato@lepotgourmet.com.br" class="c3" target="_blank">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
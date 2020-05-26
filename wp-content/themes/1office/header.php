<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?php the_title(); ?></title>
        <link rel="stylesheet" href="<?= bloginfo('stylesheet_url'); ?>">
        <link rel="shortcut icon" href="<?= home_url(); ?>/favicon.ico" type="image/x-icon" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <div id="start-page">
            <div class="container">
                <header id="header-page">
                    <div class="logo-header">
                        <a href="<?= home_url('/') ?>" id="logo">
                            <img src="<?php the_field('logo_header', 'options') ?>" alt="<?= bloginfo('name') ?>" alt="<?= bloginfo('description') ?>">
                        </a>
                    </div>
                    <ul class="main-menu">
                        <li class="item-menu">
                            <a href="">Tính năng</a>
                            <i class="fa fa-angle-down"></i>
                        </li>
                        <li class="item-menu">
                            <a href="">Bảng giá</a>
                        </li>
                        <li class="item-menu">
                            <a href="">Khách hàng</a>
                        </li>
                        <li class="item-menu">
                            <a href="">Tuyển dụng</a>
                        </li>
                        <li class="item-menu">
                            <a href="">Blog</a>
                        </li>
                    </ul>
                </header>
            </div>



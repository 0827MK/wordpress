<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <title>コブシプロジェクトポータルサイト</title>
        <?php if ( is_page () ) : ?> <!-- すべての固定ページに適用される(headerとfooter) -->
            <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/css/bace.css" type="text/css">
        <?php endif; ?>
        <?php if ( is_page ('11') ) : ?> <!-- 概要のIDは11 -->
            <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/css/about.css" type="text/css">
        <?php elseif ( is_page ('16') ) : ?> <!-- 団体紹介のIDは16 -->
            <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/css/group_intro.css" type="text/css">
        <?php elseif ( is_page ('18') ) : ?> <!-- お問い合わせのIDは18 -->
            <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/css/contact.css" type="text/css">
        <?php elseif (is_page()) : ?> <!-- 各団体の紹介ページ -->
            <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/css/group-introduction.css" type="text/css">
        <?php endif; ?>
        <?php if ( is_front_page () ) : ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/style.css" type="text/css">
        <?php endif; ?>

        <?php wp_head(); ?>
    </head>
    <?php if(!is_front_page ()): ?>
        <header>
            <div class="head">
                <a href="http://localhost:3001/">コブシプロジェクト</a>
                <a href="<?php bloginfo("url");?>/summary">概要</a>
                <a href="<?php bloginfo("url");?>/group_intro">団体紹介</a>
                <a href="<?php bloginfo("url");?>/contacts">お問い合わせ</a>
            </div>
    
            <div class="menu">
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content">
                    <ul>
                        <li>
                            <a href="http://localhost:3001/">コブシプロジェクト</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo("url");?>/summary">概要</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo("url");?>/group_intro">団体紹介</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo("url");?>/contacts">お問い合わせ</a>
                        </li>
                        <li>
                            <a href="https://www.ichinoseki.ac.jp/%22%3E一関高専HP">一関高専HP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    <?php endif; ?>

    <body class="scroll_lock">
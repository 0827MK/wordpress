<?php get_header(); ?>
    <div id="loading">
            <img src="<?php bloginfo('template_url') ;?>/img/logo.png" alt="" id="logo">
            <p id="load-text">loading...</p>
        </div>
        <main>
            <div class="area-top">
                <ul>
                    <li><a class="list-page_link" href="http://localhost:3001/">コブシプロジェクト</a></li>
                    <li><a class="list-page_link" href="#whats">概要</a></li>
                    <li><a class="list-page_link" href="#group_intro">団体紹介</a></li>
                    <li><a class="list-page_link" href="<?php bloginfo("url");?>/contacts">お問い合わせ</a></li>
                    <li><a class="list-display_size" href="">ipad用</a></li>
                    <li><a class="list-display_size" href="">iphone用</a></li>
                </ul>
                <span>Funding Project</span>
            </div>
            <div class="area-second">
                <div class="whats_kobushi">
                    <div class="wrapper fadeIn fadeInLeft">
                        <span><a name="whats" href="<?php bloginfo("url");?>/summary">WHAT'S コブシプロジェクト</a></span>
                        <div class="text-box">
                            <div>コブシプロジェクト</div>
                            <div>～思考の壁をぶっ壊せ～</div>
                            <p>新しい活動や企画にチャレンジしたいという個人･団体に対し、学生の立場･視線から資金のみならず、プロジェクトごとに担当役員を設置しあらゆる形で全面的に支援し、新規活動の発掘・育成を実施します。</p>
                        </div>
                        <a href="<?php bloginfo("url");?>/summary">Show More ></a>
                    </div>
                    <div class="image fadeIn fadeInRight"></div>
                </div>
            </div>
            <div class="area-third">
                <div class="text-box fadeIn fadeInRight">
                        <div>コブシを突き上げたその先へ</div>
                        <p>いきなりですが皆様のコブシは何のためにあると思いますか?単なるジャンケンの道具?はたまた人を攻撃するための手段?違います。未来に向けて突き上げるものです。今回一関高専学生会によって行われるコブシプロジェクトの一環として行われる当プロジェクト。私たちも未来へ向けて拳を突き上げてみました。皆様もその拳の行く先を見てみませんか?</p>
                        <a href="<?php bloginfo("url");?>/summary">Show More ></a>
                </div>
            </div>
            <div class="area-fourth">
                <div class="news">
                    <span>News</span>
                    <ul>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink() ;?>">
                            <div><?php echo get_the_date("Y.m.d") ;?></div>
                            <div><?php the_title() ;?></div>
                        </a>
                    </li>

                    <?php endwhile; endif; ?>
                    </ul>
                </div>

                <div class="group_intro">
                    <span><a name="group_intro">団体紹介</a></span>
                    <div class="wrapper">
                        <div class="container fadeIn fadeInUp">
                            <a href="<?php bloginfo("url");?>/video">
                                <img src="<?php bloginfo('template_url') ;?>/img/sample.png" alt="">
                                <span>映像研究会</span>
                                <p>PR動画を作成することで地域活性化につなげる。<br>一関高専や一関市のホームページ・Youtubeへの掲載を目指す。</p>
                            </a>
                        </div>
                        <div class="container fadeIn fadeInUp">
                            <a href="<?php bloginfo("url");?>/its">
                                <img src="<?php bloginfo('template_url') ;?>/img/sample.png" alt="">
                                <span>ITs Information Technology</span>
                                <p>web、AI、IoTを中心に｢アイデアを形に。｣をモットーに<br>多様なアイデアを実装する。</p>
                            </a>
                        </div>
                        <div class="container fadeIn fadeInUp">
                            <a href="<?php bloginfo("url");?>/iot">
                                <img src="<?php bloginfo('template_url') ;?>/img/sample.png" alt="">
                                <span>IoT技術を用いたセンシングモジュールの開発と<br>サイネージ生成および体験会実施<br>電子楽器｢Analog2.0｣の作成と演奏体験の実施</span>
                                <p>センシングモジュール等を作成し、学生の技術や知識で学生が｢できること｣を示し、学生の持つ可能性を意識してもらう。</p>
                            </a>
                        </div>
                        <div class="container fadeIn fadeInUp">
                            <a href="<?php bloginfo("url");?>/nitic">
                                <img src="<?php bloginfo('template_url') ;?>/img/sample.png" alt="">
                                <span>一関高専60年つながるプロジェクト</span>
                                <p>高専60周年の記念局開設を最終目標として、<br>無線通信コンテストへの出場や体験局の設置を行う。</p>
                            </a>
                        </div>
                    </div>
                    <a href="<?php bloginfo("url");?>/group_intro">Show More ></a>
                </div>
<?php get_footer(); ?>
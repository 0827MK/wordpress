<?php get_header() ;?>

<div id="content" class="w_inner">
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

<?php get_footer() ;?>
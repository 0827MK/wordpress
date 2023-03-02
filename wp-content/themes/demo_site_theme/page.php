<?php get_header(); ?>

<dic id="content" class="page_wrap w_inner">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page_container">
        <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
    
</div>

<?php get_footer(); ?>
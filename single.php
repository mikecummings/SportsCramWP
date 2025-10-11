<?php get_header(); ?>

<div class="wrap">
    <section class="hero" aria-labelledby="hero-title">
        <div> 
            <span class="badge">🏈 Sports Cram — Washington</span>
            <h1 id="hero-title" class="title"><?php the_title(); ?></h1>
            
            <div class="article">
                <p class="subtitle"><?php echo get_the_date('l m/d/Y'); ?></p>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_template_part('template-parts/signup-form'); ?>

<?php get_footer(); ?>

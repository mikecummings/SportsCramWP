<?php get_header(); ?>

<div class="wrap">
    <section class="hero" aria-labelledby="hero-title">
        <div> 
            <span class="badge">🏈 Sports Cram — Washington</span>
            <h1 id="hero-title" class="title">Washington Commanders news - simplified.</h1>
            
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="article">
                        <p class="subtitle"><?php echo get_the_date('l m/d/Y'); ?></p>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="article">
                    <p class="subtitle">No posts yet</p>
                    <p style="margin: 20px 0; font-size: 18px; line-height: 1.6;">Check back soon for Washington Commanders updates!</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- Hidden until we have content -->
<div class="wrap" style="display: none;">
    <section class="section" aria-labelledby="features">
        <h2 id="features" style="margin:0 0 12px;">Why subscribe?</h2>
        <div class="grid-3">
            <article class="feature">
                <h3>Know the basics fast</h3>
                <p>Skip the rabbit holes. We boil it down so you can keep up effortlessly.</p>
            </article>
            <article class="feature">
                <h3>Always relevant</h3>
                <p>From injuries to starting QB to big wins/losses—only what actually matters.</p>
            </article>
            <article class="feature">
                <h3>Local flavor</h3>
                <p>Washington-specific context, stadium updates, and nuggets you can use.</p>
            </article>
        </div>
    </section>
    <section class="section">
        <div class="highlight">
            <h3 style="margin:0 0 8px;">What you'll get</h3>
            <ul style="margin:0;padding-left:20px">
                <li>This week's vibe in 2 sentences</li>
                <li>4 quick bullets for instant small talk</li>
                <li>What to watch next game</li>
                <li>One fun fact (stadium, history, culture)</li>
            </ul>
        </div>
    </section>
    <section class="section faq" aria-labelledby="faq">
        <h2 id="faq" style="margin:0 0 12px;">FAQ</h2>
        <details>
            <summary>How often do you email?</summary>
            <p>Typically weekly, with quick alerts for major news or big games.</p>
        </details>
        <details>
            <summary>Is it free?</summary>
            <p>Yep. We'll always offer a free version. Paid tiers may come later for extras.</p>
        </details>
    </section>
</div>

<?php get_template_part('template-parts/signup-form'); ?>

<?php get_footer(); ?>

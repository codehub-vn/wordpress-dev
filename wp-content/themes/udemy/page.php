<?php get_header(); ?>
<section id="blog" class="section">
    <div class="container">
        <div class="row">
            <article id="blog-post" class="col-sm-8">
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <article class="card">
                        <!-- content -->
                        <div class="card-content">
                            <h3>
                                <span class="date"><?php the_time('d M'); ?></span>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <?php the_content(); ?>
                            <?php comments_template(); ?>
                            <?php wp_link_pages(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </article>

            <aside id="sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>

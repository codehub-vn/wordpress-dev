<?php get_header(); ?>
<section id="blog" class="section">
    <div class="container">
        <div class="row">
            <section id="blog-posts" class="col-sm-8">
                <div class="card">
                    <div class="card-content">
                        <h3><?php _e('Search', 'udemy'); ?></h3>
                        <?php get_search_form(); ?>
                        <hr>
                        <h4>
                            <?php _e('Search Results for', 'myfirsttheme'); ?>
                            <span class="text-info"><?php the_search_query(); ?></span>
                        </h4>
                    </div>
                </div>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <article class="card">
                        <!-- thumbnail -->
                        <?php if (has_post_thumbnail()): ?>
                            <div class="card-image">
                                <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                            </div>
                        <?php endif; ?>

                        <!-- content -->
                        <div class="card-content">
                            <h3>
                                <div class="date"><?php the_time('d M'); ?></div>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="card-info">
                                <span class="time">Posted at <?php the_time('g:i a'); ?></span>
                                <span class="tag"><?php the_category(','); ?></span>
                                <spanpost-author>by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></spanpost-author>
                            </div>
                            <p class="post-excerpt"><?php the_excerpt(); ?></p>
                        </div>

                        <!-- action -->
                        <div class="card-action">
                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-primary rippler rippler-default" role="button">
                                Read More
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>

                <!--pagination-->
                <nav class="text-center">
                    <ul class="pagination">
                        <li>
                            <?php previous_posts_link('<i class="fa fa-chevron-left"></i>'); ?>
                        </li>
                        <li>
                            <?php next_posts_link('<i class="fa fa-chevron-right"></i>'); ?>
                        </li>
                    </ul>
                </nav>
            </section>

            <aside id="sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>

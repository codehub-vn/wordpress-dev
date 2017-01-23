<?php
/*
 * Template Name: Full Width Page
 */
get_header(); ?>
<section id="blog" class="section">
    <div class="container">
        <div class="row">
            <section id="blog-posts" class="col-sm-12">
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
        </div>
    </div>
</section>

<?php get_footer(); ?>

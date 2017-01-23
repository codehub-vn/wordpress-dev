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
                                <div class="date"><?php the_time('d M'); ?></div>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="card-info">
                                <span class="time">Posted at <?php the_time('g:i a'); ?></span>
                                <span class="tag"><?php the_category(','); ?></span>
                                <spanpost-author>by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></spanpost-author>
                            </div>
                            <?php the_content(); ?>
                            <?php the_tags(); ?>
                        </div>
                    </article>
                    <!--pagination-->

                    <nav class="text-center">
                        <ul class="pagination">
                            <li>
                                <?php previous_post_link('%link', '<i class="fa fa-chevron-left"></i> %title'); ?>
                            </li>
                            <li>
                                <?php next_post_link('%link', '%title<i class="fa fa-chevron-right"></i>'); ?>
                            </li>
                        </ul>
                    </nav>
                    <?php comments_template(); ?>
                <?php endwhile; ?>
            </article>

            <aside id="sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>

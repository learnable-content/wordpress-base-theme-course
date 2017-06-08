<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!-- end header -->
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
    </section>
    <section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <?php if(have_posts()):
                    while(have_posts()) : the_post(); ?>

                        <article>
                            <div class="post-image">
                                <div class="post-heading">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php endif; ?>
                            </div>

                            <?php the_excerpt(); ?>
                            <div class="bottom-article">
                                <ul class="meta-post">
                                    <li><i class="icon-calendar"></i><?php the_date('F j, Y'); ?></li>
                                    <li><i class="icon-comments"></i><?php comments_number('no comments', 'one comment', '% Comments'); ?>
                                    </li>
                                </ul>
                                <a href="<?php the_permalink(); ?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="nav-previous pull-left"><?php next_posts_link( '<< Previous' ); ?></div>
                <div class="nav-next pull-right"><?php previous_posts_link( 'Next >>' ); ?></div>

            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer();

![](headings/5.5.png)

# Pulling it all together

So now that we separated all of the areas that will be making up our site how do we pull it all together. All of the functions we have gone over already come in handy now.

## Starting with the index.php

Remember that the `index.php` file is our end all file for out theme so it seems fit to start there. After the changes there we will copy over all the changes to the other needed files.

```
<?php get_header(); ?>
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

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>

						<article>
							<div class="post-image">
								<div class="post-heading">
									<h3><a href="#"><?php the_title(); ?></a></h3>
								</div>
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail(); ?>
								<?php endif; ?>
							</div>
							<?php the_excerpt(); ?>
							<div class="bottom-article">
								<ul class="meta-post">
									<li><i class="icon-calendar"></i><a href="#"><?php the_date('F j, Y'); ?></a></li>
									<li><i class="icon-comments"></i><a href="#"><?php comments_number( 'no comments', 'one comment', '% Comments' ); ?></a></li>
								</ul>
								<a href="<?php get_permalink(); ?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
							</div>
						</article>

				<?php
					endwhile;
				endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer();
```


# Pulling it all together

When breaking apart a theme there are always decisions that need to be made. When it comes to this there really isn't no right or wrong answer. The best thing to do is figure out what pages will be need what html and if that html is repeatable. If so then maybe it should go up one level and not be repeated on multiple pages.

# The Loop

So in our template we will find multiple article tags for each blog post in our sample app. From this we can gather that we will be looping through this information with the the loop that WordPress gives us something like the following.

```
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
```

We first check to see if we have posts depening on what page template we are loading. After doing so we then do a while loop to go through this posts and setup the information to be used correctly.

                

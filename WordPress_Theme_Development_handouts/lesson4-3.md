![](headings/4.3.png)

# Creating the Footer and get_footer

`get_footer()` is as you guessed it the footer of a template. It works very similar to the `get_header()` and `get_sidebar()` function in where WordPress will look for a file called `footer.php`.

Again if the template needs a separte footer than the main preloaded WordPress one then you would create `footer-blog.php` file. Then inside of your template theme you would have something like this to call that file.

```
<?php get_footer('blog'); ?>
```
That function alone is enought to call the correct file and load it as the sidebar in our template.

## Another example

As in the documentation for [footer](https://codex.wordpress.org/Function_Reference/get_footer) you could have logic around the calls for the footer. This would alter which footer gets loaded depending on the type of page that you are currently on.

```
<?php
if ( is_home() ) :
	get_footer( 'home' );
elseif ( is_404() ) :
	get_footer( '404' );
else :
	get_footer();
endif;
?>
```


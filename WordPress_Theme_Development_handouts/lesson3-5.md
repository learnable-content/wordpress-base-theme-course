![](headings/3.5.png)

# get\_template\_part()

get_template_part() is WordPress' way of including/requiring a file. It has a way that it loads the file as way using a slug (partial name) of the file. The cool thing is it will fail silently if the file does not exist.

To include a file in your templates you could use:

```
<?php get_template_part( 'loop', 'index' ); ?>
```

The above would look through the theme root directory for a file with the name `loop-index.php`.

## Some organization

I normally create a folder called `partials` in our theme directory. Inside of this folder I create all the files I want to include for my theme. For example if we want to section off our navigation we would create a file in this directory like such `partials > main-nav.php`. We would then include this file like so:

```
get_template_part('partials/main', 'nav');
```
## When to use

When to use `get_template_part()` is entirely up to you and your theme. Normally if something is repeated in code then that is a good indicator to break it into it's own file and reuse it whenever you need. Think of navigation, heading images, some information on the sidebar that you need on separate files.


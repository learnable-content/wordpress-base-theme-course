![](headings/4.2.png)

# Creating the Sidebar and get_sidebar

`get_sidebar()` is as you guessed it the sidebar of a template. It works very similar to the `get_header()` function in where WordPress will look for a file called `sidebar.php`.

Again if the template needs a separte sidebar than the main preloaded WordPress one then you would create `sidebar-blog.php` file. Then inside of your template theme you would have something like this to call that file.

```
<?php get_sidebar('blog'); ?>
```
That function alone is enought to call the correct file and load it as the sidebar in our template.


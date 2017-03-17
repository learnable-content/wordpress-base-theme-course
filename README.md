# Creating the Header and get_header

`get_header()` is a function WordPress gives us to include the `header.php` file. The `header.php` file is usually where the top portion of our template is located. This file has the doctype, head and top portion of the theme elements.

So each template file has the ability to pull in the header image. Every once in a while the header would need to be different from another page. you can easily create another header file by creating a php file with the scheme `header-somename.php`. So if we needed a header file just for blog we would create a file called `header-blog.php`. Then in our theme directory we would have something like this:

```
<?php get_header('blog'); ?>
```
That function alone is enought to call the correct file and load it as the header.
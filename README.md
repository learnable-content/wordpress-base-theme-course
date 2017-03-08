# Blog Templates

So you always have to remember that WordPress started as a blogging software. Through the years it has fully developed into a full cms packaged used by many sites today. So keeping this in mind remember that templating/theming a site is blog first focussed. So by default the blog part of WordPress shows on first install.

## index.php

Remembering the WordPress' theme template hierarchy this file is the end all file for WordPress. It is also the file that runs the blog home page. So normally we could just leave this file as the blog posts page.

## home.php

If for some reason did not want the `index.php` file to be the blog posts page we could use this file and alter it's style or structure that would then be the blogs "home page". For the most part just having the `index.php` will suffice for site projects.

## single.php

When you click on a blog post you then will get that blog post on it's own. This blog post on it's own will default to use the `index.php` file unless we create a `single.php` file to use for all "single" block posts.

## Additional files

Be sure to reference the template hierarchy diagram in the previous lesson. There are some additional files that you can use that interact with the blog side of WordPress. Some examples are below:

- archive.php (We will discuss later)
- tag.php - for tags inside WordPress
- category.php - for categories inside the blog
- author.php - for authors of blog posts
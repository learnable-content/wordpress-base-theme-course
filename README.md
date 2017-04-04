# Theme File Structure

It is very important to understand the template folder structure of WordPress so you know which files you need to interact with.

The following link gives us a list reference of the available template files that we can use. This is not by all means the only files we can use but they are the core to what the template directory gives us.

See:

- [Theme Development](https://codex.wordpress.org/Theme_Development)
- [Template Files](https://developer.wordpress.org/themes/basics/template-files)

## List of main files

- style.css
- rtl.css
- index.php
- comments.php
- front-page.php
- home.php
- single.php
- single-{post-type}.php
- page.php
- category.php
- tag.php
- taxonomy.php
- author.php
- date.php
- archive.php
- search.php
- attachment.php
- image.php
- 404.php

## Additional files

The additional files that you see in the included twentyseventeen are extra folders to help with the structure and organization. This part of theming is left up to you how you would like to organize.

## What do I actually need?

So a great question to ask is wich of all these files do I actually need? Every file has it's own functionality that interacts with the backend of WordPress. Usually when I am developing a theme I start with the bare minimum files and then add on from there. In all essence you only need 2 files for the theme to work.

- index.php
- style.css

## Nice starting point

With these 2 files you can load a theme and start your way to theme development. In all actuality it would be nice to start with the following list.

- index.php
- style.css
- header.php
- footer.php
- functions.php
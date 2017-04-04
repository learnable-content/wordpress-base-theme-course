# Archive Template

The archive portion of WordPress can be anywhere from tags, categories and older posts. Anything that provides an archived list for WordPress will work off this template.

## index.php

If there is no `archive.php` file then WordPress will use the `index.php` for all archive needs.

## archive.php

All you would need to do is create an `archive.php` file and alter it to suite your theme needs.

## Additional archive templates

As mentioned before you can have additional control if for the different types of archive files. Those files are listed below:

### author.php
If we needed a list of all the authors that are on the system we could default to the `index.php` file. We could also create a `author.php` file and then implment code our code on it.

### category.php
If we needed a list of categories we could default to the `index.php` file or interject with a new `category.php` file and put the code we would need for categories.

### date.php
This is equivalent to the `archive.php` except it is grouped together by dates instead. So it will group together posts by dates and show them on this page with the correct code in place.

### tag.php
If we wanted to list all blog posts grouped by tags you could do so with this file and correct code.
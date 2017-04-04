# Custom Post Type Templates

Post types are the life line of WordPress. Everythign in the database that exists is a post type. A blog is a "post" post type. A page is a "page" post type. Images are considered "attachment" post types. The cool thing about WordPress is that we can create our own custom post types that are associated with any section we would need to separate in our websites. When you create a custom post each custom post type will have it's own set of theme files that are available to us. We we also be adding a separate area in the admin area to manage this post type.

## archive-custom_post_type_name.php

So if we wanted to show a list of posts from this type we could easily create a file with the name `achive-custom_post_type_name.php`. Inside of this file we would create a WordPress loop that would pull from the custom post type. There is no additional need to send paramaters or query the database separately. The name of the file itself will query the database for us on the type and posts to pull from. Example code for the loop would look somethign like this:

```
<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
        //
        // Post Content here
        //
    } // end while
} // end if
?>
```

## single-custom_post_type_name.php

The same goes for the for the single record of a post type. Think just like the blogs area you have a list of blogs `(index.php)` and then you have a single blog `(single.php)`. For post types you have a lists of post types `(archive-custom_post_type_name.php)` and then you have a single post type `(single-custom_post_type_name.php)`.

The same loop above can be used in the single template file and it would pull from the database the correct record by either passing the id and/or slug in the url.

For this tutorial we will not be using any custom post type but it is important to know about it.
# Create your own custom post type

There is sometimes where you want to create your own post type meaning something to have it's own menu section in the dashboard aside from posts and pages. 

## Everything is a post type

So everything in WordPress is a post type. Meaning pages are a post type, posts are post types, images and media are attachment post types.

## Testimonies

Lets say you want you own post type that deals with client testimonies. Below is starter code that you could use to start your own post type. You would place this code in your functions.php file but it can be separated into it's own plugin as well.

```
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'sitepoint_testimonies',
    array(
      'labels' => array(
        'name' => __( 'Testimonies' ),
        'singular_name' => __( 'Testimony' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
```
This is the simplest form of a custom post type and will give you the bare minimum of title and content support out of the box without doing anything else inside of WordPress. We can also alter more behavior for this custom post type like even down to the icon being used in our admin area.

Adding this to the second array will give us a talk bubble icon.

```
'menu_icon' => 'dashicons-format-chat'
```

## Calling our post type

We can create a file called `archive-sitepoint_testimonies.php` where that last part of the file is the custom post type name. Inside of this file you can have the same code form `index.php` file and it will lost testimonies from the custom post type admin area.
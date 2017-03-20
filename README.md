# Create your menu areas

For the most part we have our main navigation that we want to take over. But sometimes there is navigation in the footer or maybe a sub navigation that we want to have control over in the admin area.

## Register navigation

Registering a navigation area is easy inside of our `functions.php` file. In our current `functions.php` file you will see the following.

```
register_nav_menus( array(
	'top'    => __( 'Top Menu', 'sitepoint' ),
	'social' => __( 'Social Links Menu', 'sitepoint' ),
) );
```
For our current theme this should be enough for what we need. As you can see we have a main top navigation area and a bottom social media navigation. So we wil leave this as is and remove our test navigation from earlier.

Remove the following:

```
function register_my_menu() {
  	register_nav_menu(
  		array(
  			'header-menu',__( 'Header Menu' ),
  			'side-menu',__( 'Side Menu' ),
  			'footer-menu',__( 'Footer Menu' )
  		)
	);
}
add_action( 'init', 'register_my_menu' );
```
## Calling our navigation in code

Our code to call that navigation that will be tied will look like this wherever we are wanting to place that navigation.

```
<?php wp_nav_menu( array(
	'theme_location' => 'top',
	'menu_id'        => 'top-menu',
) ); ?>
```

Now all we have to do is load navigation items in our WordPress admin area and they will show here.
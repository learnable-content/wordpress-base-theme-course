# wp\_enqueue_style()

Just like `wp_enqueue_script()` the `wp_enqueue_style()` works the same however it is only for loading css style sheets. The function for the most part looks the same with some key differences.

## The function

The function looks like this the code below:

```
wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )
```

According to the documentation you can see a list of what each param should be. Though we may not use them all there are there in case we need to. [wp_enqueue_style() documenation parameters](https://developer.wordpress.org/reference/functions/wp_enqueue_style/#parameters).

### $handle

This is the name or label we want to call this css file that loads. It is very important to make sure that this handle name is unique and no other handles have the same name.

### $src

The actual source url for the css file we are trying to load. Can be a local file or maybe it is a file that exists on a cdn somewhere.

### $deps

Where this script file depends on another file like `jquery` or something else. Also note we do not need to load `jquery` at all because it is already prepackaged with WordPress.

### $ver

This is a way that we can version our files and appends a ?ver=1.2.3 at the end of the file. This helps in case you are caching your script files and need the server to reload a new file if you are editing the script file.

### $media

Whether this file needs to be loaded for all media types. All, print or screen.

## Code to trigger the queue

```
function load_scripts() {
		wp_enqueue_script( 'myLabel', '/url/to/scriptFile.js', array('jquery'), '1.0.0', true );
		wp_enqueue_style( 'myCssLabel', '/url/to/cssFile.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );
```

We could load several script and style sheets in this function alone.
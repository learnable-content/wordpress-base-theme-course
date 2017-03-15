# wp\_enqueue\_script()

Normally we are use to just adding our script files (javscript) wherever we need to either in the top or bottom of our html files. WordPress gives us a way to add them to our templates right inside of the `functions.php` file and then uses either the `wp_head()` or `wp_footer()` to add them to the template.

## The function

The function looks like this the code below:

```
wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
```

According to the documentation you can see a list of what each param should be. Though we may not use them all there are there in case we need to. [wp_enqueue_script() documenation parameters](https://developer.wordpress.org/reference/functions/wp_enqueue_script/#parameters).

### $handle

This is the name or label we want to call this script that loads. It is very important to make sure that this handle name is unique and no other handles have the same name.

### $src

The actual source url for the script file we are trying to load. Can be a local file or maybe it is a file that exists on a cdn somewhere.

### $deps

Where this script file depends on another file like `jquery` or something else. Also note we do not need to load `jquery` at all because it is already prepackaged with WordPress.

### $ver

This is a way that we can version our files and appends a ?ver=1.2.3 at the end of the file. This helps in case you are caching your script files and need the server to reload a new file if you are editing the script file.

### $in_footer

A boolean that we pass to tell WordPress to put it in the footer (if true) or place this script in the header.

## Code to trigger the queue

```
function load_scripts() {
		wp_enqueue_script( 'myLable', '/url/to/scriptFile.js' ), array('jquery'), '1.0.0', true );

}
```

Having this function alone won't do what what need. We need to use another hook so that our file gets loaded where we need it to. That function looks like `add_action( 'wp_enqueue_scripts', 'my_function_name' );`. So the finished code would be:

```
function load_scripts() {
		wp_enqueue_script( 'myLable', '/url/to/scriptFile.js' ), array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );
```

When WordPress loads this will make sure that the script file gets loaded into the array we suggested. This case it would load it in the footer area because of the last boolean we passed to the function.
![](headings/3.1.png)

# Functions.php and use cases

The functions file for a theme is very important to the development and content usage of your site. In the `functions.php` file you will have some WordPress related functions that are provided by the WordPress base. However you could also create your own functions that help with just about anything you would like to do.

## Loading

The cool thing is that this file is automatically loaded and available in all of your theme files. So add any function in this file and you will be able to acces that function in your theme files.

## Example

Let's add a simple function that echos 'Hello World'.

```
function helloWorld() {
    echo 'Hello World';
}
```
Go to any of your template files I will go to the `index.php` and add it anywhere there to call.

```
<?php helloWord(); ?>
```

When we visit the page you can see that the function was called and indeed puts our string to the screen.

## Real life example

A real life example and use case could be if the excerpts from WordPress are not working for you then you can easily create a function that does a `substr()` and some other magic that will give you an excerpt you are proud of.


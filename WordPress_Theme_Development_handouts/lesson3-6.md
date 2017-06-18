![](headings/3.6.png)

# get\_theme\_file_uri()

Another helpful function to use is `get_theme_file_uri()`. This function gives us the theme directory path. This is a very useful for many reasons when it comes to including assets, images or even urls.

## Asset examples

### Image

```
<img src="<?php echo get_theme_file_uri(); ?>/img/someImage.jpg">
```

### Script file

```
<script src="<?php echo get_theme_file_uri(); ?>/js/scriptFile.js">
```

### CSS file

```
<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/style.css">
```

### Url example

```
<a href="<?php echo get_theme_file_uri(); ?>/url/path">Test</a>
```

## Differences of template directory functions

There are some differences with the template directory calls below.

### [get\_template\_file_uri()](https://developer.wordpress.org/reference/functions/get_theme_file_uri/)

### [get\_parent\_theme\_file_uri()](https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/)

### [get\_theme\_file_path()](https://developer.wordpress.org/reference/functions/get_theme_file_path/)

### [get\_parent\_theme\_file_path](https://developer.wordpress.org/reference/functions/get_parent_theme_file_path/)
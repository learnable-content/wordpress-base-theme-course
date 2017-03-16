# get\_template\_directory\_uri()

Another helpful function to use is `get_template_directory_uri()`. This function gives us the theme directory path. This is a very useful for many reasons when it comes to including assets, images or even urls.

## Asset examples

### Image

```
<img src="<?php echo get_template_directory_uri(); ?>/img/someImage.jpg">
```

### Script file

```
<script src="<?php echo get_template_directory_uri(); ?>/js/scriptFile.js">
```

### CSS file

```
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
```

### Url example

```
<a href="<?php echo get_template_directory_uri(); ?>/url/path">Test</a>
```
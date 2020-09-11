# Giga

> Lightweight, fast and easy to use theme made with HTML5 and PHP. No Frameworks used.

## Requirements

- PHP

## Installation

Copy the folder `src/semmelsamu/giga` to a static location on your webserver.

## Usage

Specify your content and settings in the `$content` variable (See [The content variable](#the-content-variable)). Then, include the `index.php` file:

```php
$content = [
    "content" => true,
    "content__main" => "Hello World!",
]

include("giga/index.php");
```

With this theme, it is also very simple to work with templates. Learn more [here](#working-with-templates)

## The content variable

In this variable, you specify the settings and config for the theme. You have the following options:

### show
- Type: `bool`
- Default: `false`
- Specifies is the theme should be shown or not.

### path
- Type: `string`
- Default: `giga/`
- Relative path from the uri to where the giga document root is. Needed for correctly linking the css and js files.

### lang
- Type: `string`
- Default: `null`
- HTML lang tag value.

### head
- Type: `html`
- Default: `null`
- Additional content which belongs in the head.

### title
- Type: `string`
- Default: `null`
- The title of the page.

### main_title
- Type: `string`
- Default: `null`
- The title of the website.

### page_size
- Type: `int`
- Default: `0`
- Specifies the width of the website:
    - `0`: Whole screen
    - `1`: Part of the screen but still with aside content
    - `2`: Part of the screen without aside content

### animate
- Type: `bool`
- Default: `false`
- Specifies if the nav and header content should fade in.

### nav
- Type: `bool`
- Default: `false`
- Specifies if the nav should be displayed or not.

### nav__left
- Type: `string`
- Default: `null`
- The content in the left corner of the nav.

### nav__right
- Type: `string`
- Default: `null`
- The content in the right corner of the nav.

### nav__shallow
- Type: `bool`
- Default: `false`
- Specifies if the height of the nav is 64px or 96px.

### nav__small
- Type: `bool`
- Default: `false`
- Specifies if the nav widens when there is a header and the scroll position is on the top.

### nav__dark
- Type: `bool`
- Default: `false`
- Specifies if the nav always is black.

### header
- Type: `bool`
- Default: `false`
- Specifies if the header should be displayed or not.

### header__size
- Type: `int`
- Default: `0`
- Specifies the height of the header:
    - 0: Whole screen
    - 1: Half the screen
    - 2: Only as much as the content needs

### header__background
- Type: `css`
- Default: `url('../img/default.png')`
- The `background-image` value of the header.

### header__main
- Type: `html`
- Default: `null`
- The content of the header.

### header__scroll_button
- Type: `bool`
- Default: `false`
- Specifies if the scroll-down-button on the bottom of the header should be displayed or not.

### content
- Type: `bool`
- Default: `false`
- Specifies if the content should be displayed or not.

### content__main
- Type: `html`
- Default: `null`
- The main content of the page.

### content__show_heading
- Type: `bool`
- Default: `false`
- Specifies if the title of the page should be shown in the content heading.

### aside
- Type: `bool`
- Default: `false`
- Specifies if the aside content should be displayed or not.

### aside__main
- Type: `html`
- Default: `null`
- The aside content.

### aside__break
- Type: `bool`
- Default: `false`
- Specifies if the aside content should stay next to the main content or not.

### footer
- Type: `bool`
- Default: `false`
- Specifies if the footer should be displayed or not.

### footer__main
- Type: `html`
- Default: `null`
- The content of the footer.

## Examples

### Small example

The following example shows a possible implementation of the theme:

```php
<?php

    // Using output buffering to get the HTML code:
    ob_start(); 
    
?>

<h1>Hello World!</h1>
<p>This is a possible implementation of the theme.</p>

<?php 

    // The theme should be displayed:
    $content["show"] = true;
    // Writing the buffer to the content:
    $content["content__main"] = ob_get_clean();
    // We want to show the content:
    $content["content"] = true;
    // In my case, the theme lies in the giga folder,
    // so we specify it here:
    $content["path"] = "giga/"; 

    // Including the theme:
    include("giga/index.php");
    
?>
```

### Working with templates

If you e.g. want to always have the same navigation and footer bar in every page, templates will do the job. One possible solution would be to work with a default file which you always include, and then to overwrite the content in the respective page:

default_content.php:
```php
<?php

    $content["path"] = "giga/"; 
    $content["show"] = true;

    $content["nav"] = true;
    $content["nav__left"] = "<p>Website Title</p>";

    $content["content"] = true;

    $content["footer"] = true;
    $content["footer__main"] = "<p>Copyright MMXX...</p>";

?>
```

site.php:
```php
<?php

    // Including the default content:
    include("default_content.php");

    ob_start(); 
    
?>

<h1>Hello World!</h1>
<p>This is a possible implementation of templates.</p>

<?php 

    $content["content__main"] = ob_get_clean();

    include("giga/index.php");
    
?>
```

### A bigger example

As the theme provides more features than shown so far, other examples can be found in the `src/semmelsamu/giga/examples` folder.
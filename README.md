# Giga

> Lightweight, fast and easy to use theme made with HTML5 and PHP. No Frameworks used.

## Requirements

- PHP

## Installation

Copy the folder `src/semmelsamu/giga` to a static location on your webserver.

## Usage

Include the `index.php` file and create an instance of the `Giga` class.

```php
include("giga/index.php");

$giga = new Giga();
```

With this theme, it is also very simple to work with templates. Learn more [here](#working-with-templates)

## Editing the content

To set what the theme should display, use `$giga->your_setting = your_value`. Available settings are:

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

### header__center
- Type: `html`
- Default: `null`
- The content of the header.

### header__scroll_button
- Type: `bool`
- Default: `false`
- Specifies if the scroll-down-button on the bottom of the header should be displayed or not.

### content
- Type: `bool` or `html`
- Default: `false`
- If not false, the content will be displayed.

### content__show_heading
- Type: `bool`
- Default: `false`
- Specifies if the title of the page should be shown in the content heading.

### aside
- Type: `bool` or `html`
- Default: `false`
- If not false, the aside content will be displayed.

### aside__break
- Type: `bool`
- Default: `false`
- Specifies if the aside content should stay next to the main content or not.

### footer
- Type: `bool` or `html`
- Default: `false`
- If not false, the footer content will be displayed.

## Examples

### Small example

The following example shows a possible implementation of the theme:

```php
<?php

    include("../src/semmelsamu/giga/index.php");

    $theme = new Giga();

    // Using output buffering to get the HTML code:
    ob_start(); 
    
?>

<h1>Hello World!</h1>
<p>This is a possible implementation of the theme.</p>

<?php 

    // The theme should be displayed:
    $theme->show = true;
    // Writing the buffer to the content:
    $theme->content = ob_get_clean();

    // Rendering the theme:
    $theme->render();
    
?>
```

### Working with templates

If you e.g. want to always have the same navigation and footer bar in every page, templates will do the job. One possible solution would be to work with a default file which you always include, and then to overwrite the content in the respective page:

default_content.php:
```php
<?php

    $theme->show = true;
    $theme->main_title = "Giga Theme";
    $theme->nav__left = "<li>Website Title</li>";
    $theme->footer = "<p>Copyright MMXX...</p>";

?>
```

site.php:
```php
<?php

    include("../src/semmelsamu/giga/index.php");

    $theme = new Giga();

    include("default_content.php");

    ob_start(); 
    
?>

<h1>Hello World!</h1>
<p>This is a possible implementation of templates.</p>

<?php 

    $theme->content = ob_get_clean();

    $theme->render();
    
?>
```

### A bigger example

As the theme provides more features than shown so far, other examples can be found in the `examples` folder.
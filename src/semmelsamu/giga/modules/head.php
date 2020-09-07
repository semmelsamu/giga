<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

    if(isset($content["title"]) || isset($content["main_title"])) {
        echo "<title>";
        if(isset($content["title"])) echo $content["title"];
        if(isset($content["title"]) && isset($content["main_title"])) echo " - ";
        if(isset($content["main_title"])) echo $content["main_title"];
        echo "</title>";
    }

?>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="<?= $content["path"] ?>css/main.css">
<?php if(isset($content["nav"]) && $content["nav"]) echo '<link rel="stylesheet" href="'.$content["path"].'css/nav.css">'; ?>
<?php if(isset($content["header"]) && $content["header"]) echo '<link rel="stylesheet" href="'.$content["path"].'css/header.css">'; ?>
<?php if(isset($content["content"]) && $content["content"]) echo '<link rel="stylesheet" href="'.$content["path"].'css/content.css">'; ?>
<?php if(isset($content["aside"]) && $content["aside"]) echo '<link rel="stylesheet" href="'.$content["path"].'css/aside.css">'; ?>
<?php if(isset($content["footer"]) && $content["footer"]) echo '<link rel="stylesheet" href="'.$content["path"].'css/footer.css">'; ?>

<script src="<?= $content["path"] ?>js/jquery-3.5.1.slim.min.js"></script>
<script defer src="<?= $content["path"] ?>js/main.js"></script>

<?php if(isset($content["head"])) echo $content["head"]; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

    if(isset($this->title) || isset($this->main_title)) {
        echo "<title>";
        if(isset($this->title)) echo $this->title;
        if(isset($this->title) && isset($this->main_title)) echo " - ";
        if(isset($this->main_title)) echo $this->main_title;
        echo "</title>";
    }

?>

<?php if($this->icon) echo '<link rel="shortcut icon" href="'.$this->icon.'">'; ?>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="<?= $this->path ?>css/main.css">
<?php if($this->nav__left || $this->nav__right) echo '<link rel="stylesheet" href="'.$this->path.'css/nav.css">'; ?>
<?php if($this->header) echo '<link rel="stylesheet" href="'.$this->path.'css/header.css">'; ?>
<?php if($this->content) echo '<link rel="stylesheet" href="'.$this->path.'css/content.css">'; ?>
<?php if($this->aside) echo '<link rel="stylesheet" href="'.$this->path.'css/aside.css">'; ?>
<?php if($this->footer) echo '<link rel="stylesheet" href="'.$this->path.'css/footer.css">'; ?>

<script src="<?= $this->path ?>js/jquery-3.5.1.slim.min.js"></script>
<script defer src="<?= $this->path ?>js/main.js"></script>

<?php if(isset($this->head)) echo $this->head; ?>
<?php ob_start(); ?>

<h1>Welcome to Giga.</h1>
<p>Giga Theme is designed to be a resource-light, modern-looking and easy to use Design Template. The following text is only a placeholder. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque officiis esse ipsum perspiciatis dolorum deserunt sed porro a quaerat. Corrupti beatae perspiciatis aspernatur? Quam deleniti mollitia unde non saepe necessitatibus.</p>

<?php 

    $content["content__main"] = ob_get_clean();
    $content["path"] = "../"; 
    $content["header__background"] = "url('../examples/img/pexels-eberhard-grossgasteiger-1183021.jpg')";
    $content["header__main"] = "<h1>Giga Theme</h1><p>Lightweight, fast and easy HTML5 Template</p>";

    include("../index.php");
    
?>
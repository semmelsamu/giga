<section id="main_content">
    <?php if($content["content__show_heading"]) echo "<h1>".$content["title"]."</h1>"; ?>
    <?= $content["content__main"] ?>
</section>
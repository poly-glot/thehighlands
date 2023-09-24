<?php
    require_once __DIR__ . '/inc/functions.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require_once __DIR__ . '/inc/head.php'; ?>

<body class="gallery">
    <?php require_once __DIR__ . '/inc/header.php'; ?>

    <!-- start of main body object -->
    <div class="wrapper3">
        <div class="short-body">
            <div class="leftcolumn">
                <img src="/images/heading_gallery.jpg" alt="Gallery"/>
            </div>
            <div class="rightcolumn" style="text-align:right">
                <img src="/images/click_image_to_enlarge.jpg" alt="Click image to Enlarge"/>
            </div>
            <div class="clear"></div>
            <ul class="gallery-big">
                <?php for($i = 1; $i <= 8; $i++) : ?>
                    <li><a href="/images/gallery/full/<?=$i?>.jpg" rel="lightbox"><img src="/images/gallery/thumbs_gallery/<?=$i?>.jpg"/></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>

    <?php require_once __DIR__ . '/inc/footer.php'; ?>
</body>
</html>

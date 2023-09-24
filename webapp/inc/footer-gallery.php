<!-- start of main blue area footer -->
<div class="wrapper-dark">
    <div class="wrapper-dark-inner">
        <div class="short-body">
            <!-- two columns footer -->
            <div class="leftcolumn">
                <div class="my-heading">
                    <a href="#" title="Developement Locations"><img src="/images/heading_developement_locations.png" alt="Developement Locations" class="pngheading"/></a>
                </div>
                <a href="#" title="Developement Locations Map"><img src="/images/developement_location_map.jpg" alt="Developement Locations Map" class="pngheading"/></a>
            </div>
            <div class="rightcolumn">
                <div class="my-heading">
                    <a href="#" title="Gallery"><img src="/images/heading_gallery.png" alt="Gallery" class="pngheading"/></a>
                </div>
                <ul class="gallery">
                    <?php for($i = 1; $i <= 8; $i++) : ?>
                    <li><a href="/images/gallery/full/<?=$i?>.jpg" rel="lightbox"><img src="/images/gallery/thumbs_home/<?=$i?>.jpg"/></a></li>
                    <?php endfor; ?>
                </ul>
            </div>
            <!-- end of two columns footer -->
        </div>
    </div>
</div>
<!-- end of main blue area footer -->

<?php 

$images = get_field('plantas');

if( $images ): ?>

<div class="container-fluid gallery1">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1>Plantas</h1>
                
                <!-- Swiper -->
                <div class="swiper-container gallery-top gallery-top-1 galleria">
                    <div class="swiper-wrapper">
                        <?php foreach( $images as $image ): ?>
                                
                        
                            <div id="slideGallery" class="swiper-slide" style="background-image:url(<?php echo $image['sizes']['gallery']; /*echo $image['sizes']['thumbnail'];*/ ?>)">
                                <p><?php echo $image['caption']; ?></p>
                                <img src="<?php echo $image['sizes']['gallery']; ?>" alt="Slide Gallery" style="visibility:hidden;">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>

                <div class="galeria-paginacao galeria-paginacao-1"></div>
            </div>
            
        </div>
    </div>
</div>

<?php endif; ?>
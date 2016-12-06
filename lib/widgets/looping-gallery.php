<?php 

$images = get_field('galeria');

if( $images ): ?>

    <div class="container-fluid gallery2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Galeria</h1>
                    
                    <div class="grid">
                        <div class="grid-sizer"></div>
                        <?php $count = 0; foreach( $images as $image ): ?>

                            
                            <div class="<?php echo (++$count%30==20 ? "grid-item" : ($count%1==0 ? "grid-item" : "grid-item")); ?>">

                                <a href="<?php  echo $image['sizes']['galeria_moderda']; ?>" data-toggle="lightbox">

                                    <img src="<?php  echo $image['sizes']['thumg_wow']; ?>" alt="<?php  echo $image['alt']; ?>">

                                </a>

                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <script src="<?php echo get_template_directory_uri() . '/lib/js/imagesloaded.pkgd.min.js' ?>"></script>
                    <script src="<?php echo get_template_directory_uri() . '/lib/js/masonry.pkgd.min.js' ?>"></script>
                    <script src="<?php echo get_template_directory_uri() . '/lib/js/jquery.magnific-popup.min.js' ?>"></script>

                    <script>
                        // external js: masonry.pkgd.js, imagesloaded.pkgd.js

                        var grid = document.querySelector('.grid');
                        var msnry;

                        imagesLoaded( grid, function() {
                          // init Isotope after all images have loaded
                          msnry = new Masonry( grid, {
                            itemSelector: '.grid-item',
                            columnWidth: '.grid-sizer',
                            percentPosition: true
                          });
                        });

                        jQuery('.grid-item').magnificPopup({
                            delegate: 'a', // child items selector, by clicking on it popup will open
                            type: 'image',
                            mainClass: 'mfp-with-zoom',
                            gallery:{
                                enabled:true
                            },
                            zoom: {
                                enabled: true,
                                duration: 300, // don't foget to change the duration also in CSS
                                opener: function(element) {
                                  return element.find('img');
                                }
                            }
                          // other options
                        });
                    </script>
                    
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
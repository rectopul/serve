<?php 

$mapa = get_field('mapa_code');
$endereco = get_field('endereco_obra');

if( $mapa || $endereco ): ?>

<div class="container-fluid mapa_single">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h1>Endereço</h1>
                <h3><?php echo $endereco; ?></h3>
            </div>

            <div class="col-md-6 col-xs-12">
                <?php echo $mapa; ?>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>
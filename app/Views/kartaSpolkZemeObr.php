<?=$this->extend("layout/template");?>

<?=$this->section("content");?>

<div class="container-fluid">
    <h1>Mapa a vlajka dané spolkové země - <?= $Info->name ?> </h1>
    <?php 
    $cesta_map = 'pocasi_assets/obrazky/mapy/';
    $cesta_flag = 'pocasi_assets/obrazky/vlajky/';

        $imgMap = [
            'src' => $cesta_map.$Info->mapa,
            'width' => '25%'
        ];

        $imgFlag = [
            'src' => $cesta_flag.$Info->vlajka,
            'width' => '25%'
        ];
    ?>
        <div class ="img-fluid text-center">
            <?= img($imgMap); ?>
            <?= img($imgFlag); ?>
        </div>
</div>

<?=$this->endSection();?>
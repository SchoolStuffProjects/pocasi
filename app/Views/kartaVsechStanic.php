<?=$this->extend("layout/template");?>

<?=$this->section("content");?>

<div class="container-fluid">
    <h1>Přehled všech stanic</h1>
    <div class = "row"> 
    <?php
         $imgFlag = [
            'width' => '25%'
        ];
        foreach ($VsechnyStation as $row){  
    ?>
            <div class = "col-xxl-3 col-sm-12 col-lg-6">
                <div class="card m-5">
                    <h4 class="card-title text-center mt-2"><?= anchor('individualniStanice/'.$row->S_ID, $row->place) ?></h4>
                <div class="card-body">
                    <img class= "card-img-top" src="<?= base_url('pocasi_assets/obrazky/vlajky/'.$row->vlajka) ?>"></img>
                    <p class="card-text text-center"> Zeměpisná šířka: <?= $row->geo_latitude ?></p>
                    <p class="card-text text-center"> Zeměpisná délka: <?= $row->geo_longtitude ?></p>
                    <p class="card-text text-center"> Nadmořská výška: <?= $row->height ?> m n.m</p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?=$this->endSection();?>
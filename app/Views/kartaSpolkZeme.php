<?=$this->extend("layout/template");?>

<?=$this->section("content");?>

<div class="container-fluid">
    <h1>Přehled meteorologických stanic ve spolkové zemi - <?= $name ?> </h1>
    <div class = "row"> 
    <?php 
        foreach ($Station as $row){
    ?>
            <div class = "col-xxl-3 col-sm-12 col-lg-6">
                <div class="card m-5">
                    <h4 class="card-title text-center mt-2"><?= $row->place ?></h4>
                <div class="card-body">
                    <p class="card-text text-center"> Zeměpisná šířka: <?= $row->geo_latitude ?></p>
                    <p class="card-text text-center"> Zeměpisná délka: <?= $row->geo_longtitude ?></p>
                    <p class="card-text text-center"> Nadmořská výška: <?= $row->height ?> m n.m</p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?=$this->endSection();?>
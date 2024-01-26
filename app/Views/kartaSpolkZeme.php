<?=$this->extend("layout/template");?>

<?=$this->section("content");?>

<div class="container-fluid">
    <h1>Přehled meteorologických stanic ve spolkové zemi - <?= $name ?> </h1>
    <div class = "row">
        <?php 
            //sem dám foreach cyklus
        ?>
        <div class = "col-12">
            <div class="card">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection();?>
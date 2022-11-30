<?=$this->extend("Front/layout/main")?>

<?=$this->section("style")?>
<style>
    .formContent {
        text-align: center;
    }

    .formContent div {
        position: relative;
        display: inline-block;
    }
    .btn-Container {
        text-align: center;        
    }

    .FROM div {
        padding: 10px;
    }
</style>
<?=$this->endSection()?>

<?=$this->section("title")?>Lista<?=$this->endSection()?>

<?=$this->section("content")?>


<div class="card text-white bg-secondary">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  



<h1>Agregar Plato</h1>
<div class="FROM">
<form action="<?=base_url('/Provincia-guardar')?>" method="post" enctype="multipart/form-data" class="form">
    <div class="formContent">
        <div>
            <label for="Nombre">Nombre del plato</label>
            <input type="text" name="NAME" id="NAME" class="form-control">
        </div>
        <div>
            <label for="Nombre">Cantidad</label>
            <input type="text" name="CAPITAL" id="CAPITAL" class="form-control">
        </div>
        <div>
            <label for="Nombre">Precio</label>
            <input type="text" name="REGION" id="REGION" class="form-control">
        </div>
        <div>
            <label for="Nombre">Estado</label>
            <input type="text" name="DESCRIPTION" id="DESCRIPTION" class="form-control">
        </div>
        <div>
            <label for="Nombre">Imagen</label>
            <input type="file" name="IMAGE" id="IMAGE" class="form-control">
        </div>
    </div>
    <div class="btn-Container">
        <div>
            <input type="submit" value="Guardar" class="btn btn-success">
        </div>
    </div>
</form>
</div>




<?php if (!empty(session('msg'))) { ?>
    <div class="alert alert-<?=session('msg.type')?>" role="alert">
        <?=session("msg.body")?>
    </div>
<?php } ?>


</div>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
                <div class="carousel-item active">
                   <img src="./imagen1.jpg" height="300px"  class="d-block w-100" alt="cost1">
                </div>
                <div class="carousel-item">
                    <img src="./imagen2.jpg" height="300" class="d-block w-100" alt="cost2">
                 </div>
                <div class="carousel-item">
                <img src="./imagen3.jpg" height="300" class="d-block w-100" alt="cost3">
           </div>
    
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
          </div>


<?=$this->endSection()?>



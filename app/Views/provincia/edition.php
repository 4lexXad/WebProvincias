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
<h1>Editar Menu</h1>
<div class="FROM">
<form action="<?=base_url("/Provincia-guardar?ID={$provincia['ID_PROVINCIA']}")?>" method="post" class="form">
    <div class="formContent">
        <div>
            <label for="Nombre">Nombre del plato</label>
            <input type="text" name="NAME" id="NAME" class="form-control" value=<?=$provincia["NAME"]?>>
        </div>
        <div>
            <label for="Nombre">Cantidad</label>
            <input type="text" name="CAPITAL" id="CAPITAL" class="form-control" value=<?=$provincia["CAPITAL"]?>>
        </div>
        <div>
            <label for="Nombre">Precio</label>
            <input type="text" name="REGION" id="REGION" class="form-control" value=<?=$provincia["REGION"]?>>
        </div>
        <div>
            <label for="Nombre">Estado</label>
            <input type="text" name="DESCRIPTION" id="DESCRIPTION" class="form-control" value=<?=$provincia["DESCRIPTION"]?>>
        </div>
        <div>
            <label for="Nombre">Imagen</label>
            <input type="file" name="IMAGE" id="IMAGE" class="form-control">
            <div>
            
        </div>
        </div>
    </div>
    <div class="btn-Container">
        <div>
            <input type="submit" value="Guardar" class="btn bg-warning">
        </div>
    </div>
</form>
</div>

<div class="alert alert-warning" role="alert">
    ¡Debes llenar todos los campos!
</div>


<?=$this->endSection()?>
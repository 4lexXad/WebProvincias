<?=$this->extend("Front/layout/main")?>

<?=$this->section("style")?>
<?=$this->endSection()?>

<?=$this->section("title")?>Lista<?=$this->endSection()?>

<?=$this->section("content")?>
<img   src="./imagenes/suyayfd.png" width="1590px"
height="138px" >



<table class="table "  class="img-fluid" img background="./imagenes/fdtabla.png"  >
    
    <thead class="table bg-warning" >
        <th>Nombre del plato</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Estado</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        <?php foreach ($provincias as $prov): ?>
            <tr class="text-light">
                <td><?=$prov["NAME"]?></td>
                <td><?=$prov["CAPITAL"]?></td>
                <td><?=$prov["REGION"]?></td>
                <td><?=$prov["DESCRIPTION"]?></td>
                <td><img width="50" heigth="50" src="data:image/jpg;base64,<?=base64_encode($prov["IMAGE"])?>"></td>
                <td>
                    <a href="<?=base_url("Provincia-edicion?ID={$prov['ID_PROVINCIA']}")?>" class="btn btn-outline-warning">Editar</a>
                    <a href="<?=base_url("Provincia-eliminar?ID={$prov['ID_PROVINCIA']}")?>" class="btn btn-outline-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php if (!empty(session('msg'))) { ?>
    <div class="alert alert-<?=session('msg.type')?>" role="alert">
        <?=session("msg.body")?>
    </div>
<?php } ?>

<?=$this->endSection()?>
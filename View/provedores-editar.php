<h1 class="page-header">
    <?php echo $alm->idprovedores != null ? $alm->nombrecomercial : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=provedores">provedores</a></li>
  <li class="active"><?php echo $alm->idprovedores != null ? $alm->nombrecomercial : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=provedores&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idprovedores" value="<?php echo $alm->idprovedores; ?>" />
    
    
    <div class="form-group">
        <label>nombre comercial</label>
        <input type="text" name="nombrecomercial" value="<?php echo $alm->nombrecomercial; ?>" class="form-control" placeholder="Ingrese su nombre comercial" data-validacion-tipo="requerido|min:7" />
    </div>
    

    <div class="form-group">
        <label>RFC</label>
        <input type="text" name="RFC" value="<?php echo $alm->RFC; ?>" class="form-control" placeholder="Ingrese SU RFC" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>nombre SAT</label>
        <input type="text" name="nombreSAT" value="<?php echo $alm->nombreSAT; ?>" class="form-control" placeholder="Ingrese su nombre SAT" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>direccion</label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="Ingrese la direccion" data-validacion-tipo="requerido|email" />
    </div>

    <div class="form-group">
        <label>telefono</label>
        <input type="text" name="telefono" value="<?php echo $alm->telefono; ?>" class="form-control" placeholder="Ingrese su telefono" data-validacion-tipo="requerido|min:8" />
    </div>

    <div class="form-group">
        <label>email</label>
        <input type="text" name="email" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Ingrese su email" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar datos</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>

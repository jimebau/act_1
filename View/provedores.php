<h1 class="page-header">Tabla provedores</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=provedores&a=Crud">Agregar provedor</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >idprovedor</th>
            <th>nombre comercial</th>
            <th>RFC</th>
            <th >nombre SAT</th>
            <th >direccion</th>
            <th >telefono</th>
            <th >email</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idprovedores; ?></td>
            <td><?php echo $r->nombrecomercial; ?></td>
            <td><?php echo $r->RFC; ?></td>
            <td><?php echo $r->nombreSAT; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->email; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=provedores&a=Crud&idprovedores=<?php echo $r->idprovedores; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=provedores&a=Eliminar&idprovedores=<?php echo $r->idprovedores; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

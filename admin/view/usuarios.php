<?php 
namespace admin\view;
require_once '../src/config.inc.php';
require_once constant('PATHSRC').'libraryFendi.php';
use src\controller\permisosController;
use src\controller\usuariosController;

include '../assert/view/main.php';


$pController = new permisosController();



$uController = new usuariosController();
$pController = new permisosController();


$dataRol   = $pController->getAllPermisos();
$data      = $uController->getAllUsuariosRolPermisos();



function isValidMd5($md5 ='')
{
    return preg_match('/^[a-f0-9]{32}$/', $md5);
}

?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <h1 align="center">Administracion de los Usuarios</h1>
</div>
<!-- End of Page Wrapper -->

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">
      <i class="fas fa-plus-square fa-sm text-white-50"></i> Nuevos Usuarios</a>
    </button>
    
    <br/><br/>

            
	<div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Datos de la Tabla</h6>
            </div>
    <div class="card-body">
		<div class="row">
    	<div class="col-lg-12">
        	<div class="table-responsive">        
                <table id="dataTable" class="table table-striped table-bordered table-condensed" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>Id</th>
                        <th>Usuario o Codigo Sicom</th>
                        <th>Password</th>
                        <th>Rol</th> 
                        <th>Estado</th>                                 
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                	<form method="POST">
                        <?php                            
                        foreach($data as $dat)
                        {                                                        
                        ?>
                        <tr>
                            <td><?php echo $dat['id']; ?></td>
                            <td><?php echo $dat['user_codsicom']; ?></td>
                            <td><?php echo $dat['password'];?></td>
                            <td><?php echo $dat['descripcion'];  ?></td>
                            <td><?php if($dat['estado'] == 0){
                                        echo "No Activo";
                                    }else{
                                        if ($dat['estado'] == 1)
                                        {
                                            echo "Activo";
                                        }
                                    }?>
                            </td>  
                            <td>
                            	<div class="text-center">
        							<div class="btn-group">
            							<button class="btn btn-primary" data-toggle="modal" data-target="#actualizarRol" >
            								<i class="fa fa-edit" aria-hidden="true"></i>
            							</button>
            							<button class="btn btn-danger" data-toggle="modal" data-target="#eliminarRol">
            								<i class="fa fa-trash" aria-hidden="true"></i>
            							</button>
        							</div>
        						</div> 
                            </td>
                        </tr>
                        <?php
                         }
                        ?> 
                    </form>                               
                </tbody>        
               </table>                    
        	</div>
		</div>
		</div>  
	</div>
	</div>
</div>
<!-- /.container-fluid --> 

<!--Modal para CRUD-->
    
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUser" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            	<div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="newRolForm" method="POST">    
                    <div class="modal-body">
                        <div class="form-group">
                        	<label class="col-form-label">Usuario o Codigo Sicom:</label>
                        	<input type="text" class="form-control" id="user_codsicom" name="user_codsicom">
                        </div>                
                        <div class="form-group">
                        	<label class="col-form-label">Password:</label>
                        	<input type="text" class="form-control" id="password" name="password" >
                        </div>
                        
                        <div class="form-group">
                        <div class="container">
                        	<div class="row">
                            	<div class="col">
                                	<label for="selectionRol" >Rol:</label>
                                	<select class="form-control" id="selectionRol">
									<?php 
                                		foreach($dataRol as $dRol)
                                    	{
                                	    ?>
                                		<option class="form-control" id="<?php echo $dRol['id']; ?>" name="rol" ><?php echo $dRol['descripcion']; ?></option>
                                       	
                                	<?php 
                                    	} 
                                	?>
                                	</select>
                            	</div>
                            	<div class="col">
                            		<label for="selectionEstado" >Estado:</label>
                                	<select class="form-control" id="selectionEstado">
										<option class="form-control" id="1" name="activo" >Activo</option>
                                       	<option class="form-control" id="0" name="no_activo" >Desactivado</option>
                                 	</select>
                            	</div>
                        	</div>
                        </div>
                       	</div>              
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" 	data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" name="accionRol" value="btnAddRoles">Agregar</button>
                    </div>
                </form>    
            </div>
        </div>
    </div> 
    
    
    <div class="modal fade" id="editRol" tabindex="-1" role="dialog" aria-labelledby="editRol" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editRolForm">    
                    <div class="modal-body">
                        <div class="form-group">
                        <label class="col-form-label">Usuario o Codigo Sicom:</label>
                        <input type="text" class="form-control" id="user_codsicom" name="user_codsicom">
                        </div>                
                        <div class="form-group">
                        <label class="col-form-label">Password:</label>
                        <input type="text" class="form-control" id="password" name="password" >
                        </div>
                        
                        <div class="form-group">
                        <div class="container">
                        	<div class="row">
                            	<div class="col">
                                	<label class="col-form-label">Rol:</label>
                                	<input type="text" class="form-control" id="rol" name="rol" >
                            	</div>
                            	<div class="col">
                            		<label class="col-form-label">Permiso:</label>
                            		<input type="text" class="form-control" id="password" name="password" >
                            	</div>
                        	</div>
                        </div>
                       	</div>              
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" 	data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" name="accionRol"	value="btnUpdateRoles">Actualizar</button>
                    </div>
                </form>    
            </div>
        </div>
    </div> 
    
    <div class="modal fade" id="deleteRol" tabindex="-1" role="dialog" aria-labelledby="deleteRol" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="deleteRolForm">    
                    <div class="modal-body">
                        <h4>¿ Esta seguro de Eliminar este campo ?</h4>
                        <input type="text" class="d-none" id="id" disabled value="id" ></input>            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" 	data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" name="accionRol"	value="btnDeleteRoles">Eliminar</button>
                    </div>
                </form>    
            </div>
        </div>
    </div> 



<?php require_once "../assert/view/footer.php"; ?>
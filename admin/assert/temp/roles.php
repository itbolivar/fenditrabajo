<?php 
/*require_once "view/main.php"; 
require_once CONTROLLER."rolesController.php";

$rController = new rolesController();

//if($_POST['descripcion'] != "" || $_POST['estado'] != "" ){
$rController->postRoles();
//}
$data = $rController->getAllRoles();

?>

<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <h1 align="center">Administracion de los Roles</h1>
    
 <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevoRol">
                      <i class="fas fa-plus-square fa-sm text-white-50"></i> Nuevo Rol</a>
                    </button>
                    
                    <br/><br/>

                
    			<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Datos la Lista</h6>
                        </div>
                        <div class="card-body">
            				<div class="row">
                        	<div class="col-lg-12">
                            	<div class="table-responsive">        
                                    <table id="dataTable" class="table table-striped table-bordered table-condensed" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>ID</th>
                                            <th>Descripcion</th>
                                            <th>Estado</th>                                
                                            <th>Acciones</th>
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
                                                    <td><?php echo $dat['descripcion']; ?></td>
                                                    <td><?php 
                                                        if($dat['estado'] == 0){
                                                            echo "No Activo";
                                                        }else{
                                                            if ($dat['estado'] == 1)
                                                            {
                                                                echo "Activo";
                                                            }
                                                        }
                                                      ?></td>    
                                                    <td>
                                                    	<div class="text-center">
                                							<div class="btn-group">
                                    							<button class="btn btn-primary" data-toggle="modal" data-target="#actualizarRol<?php echo $dat['id']; ?>" >
                                    								<i class="fa fa-edit" aria-hidden="true"></i>
                                    							</button>
                                    							<button class="btn btn-danger" data-toggle="modal" data-target="#eliminarRol">
                                    								<i class="fa fa-trash" aria-hidden="true"></i>
                                    							</button>
                                							</div>
                                						</div> 
                                                    </td>
                                                </tr>
                                                
                                                
                                               <div class="modal fade" id="actualizarRol<?php echo $dat['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="nuevoRol" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Actualizar el Rol</label></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form id="editRolForm"  method="POST">    
                                                            <div class="modal-body">
                                                            	<div class="form-group">
                                                                <label for="id" class="col-form-label" >id:</label>
                                                                <input type="text" class="form-control" id="id" disabled value="<?php echo $dat['id']; ?>"></input>
                                                                </div> 
                                                            
                                                                <div class="form-group">
                                                                <label for="descripcion" class="col-form-label">Descripcion:</label>
                                                                <input type="text" class="form-control" id="descripcion" value="<?php echo $dat['descripcion']; ?>"></input>
                                                                </div>                
                                                                <div class="form-group">
                                                                    <label for="estado">Estado:</label>
                                                                    <select class="form-control" id="estado" value="" required>
                                                                      <option value="<?php $dat['estado'] ?>" > 
                                                                      					<?php if($dat['estado'] == 0){
                                                                                            echo "No Activo";
                                                                                        }else{
                                                                                            if ($dat['estado'] == 1)
                                                                                            {
                                                                                                echo "Activo";
                                                                                            }
                                                                                        }
                                                                                      ?></option>
                                                                      
                                                                      <option value"1" >Activo</option>
                                                                      <option value"0" >No Activo</option>
                                                                    </select>
                                                                </div>            
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-primary" name="accionRol"	value="btnUpdateRoles">Actualizar</button>
                                                            </div>
                                                        </form>    
                                                    </div>
                                                </div>
                                            </div>  
                                                
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
    
</div>
<!-- End of Page Wrapper -->

    <!--Modal para CRUD-->
    
    <div class="modal fade" id="modalRolCRUD" tabindex="-1" role="dialog" aria-labelledby="nuevoRol" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            	
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Rol</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formRoles" method="POST">    
                    <div class="modal-body">
                        <div class="form-group">
                        <label for="pais" class="col-form-label">Descripcion:</label>
                        <input type="text" class="form-control" value="descripcion" id="descripcion" >
                        </div>                
                        <div class="form-group">
                            <label for="estado">Estado:</label>
                            <select class="form-control" value="" id="estado" >
                              <option>Activo</option>
                              <option>No Activo</option>
                            </select>
                        </div>           
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" 	data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" 	name="btnAddRoles" value="btnAddRoles">Agregar</button>
                    </div>
                </form>    
            </div>
        </div>
    </div> 
    
    
    
    
    
    
    <div class="modal fade" id="eliminarRol" tabindex="-1" role="dialog" aria-labelledby="nuevoRol" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar el Rol</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="deleteRolForm"  method="POST">    
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




    

<?php require_once "view/footer.php"; ?>*/
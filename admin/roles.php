<?php 
include 'view/_main.php';
//require_once CONTROLLER."rolesController.php";

//$rController = new rolesController();

//if($_POST['descripcion'] != "" || $_POST['estado'] != "" ){
//$rController->postRoles();
//}
//$data = $rController->getAllRoles();

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
                                        <table id="dt_Roles" class="table table-striped table-bordered table-condensed"  width="100%" cellspacing="0">
                                            <thead class="text-center">
                                                <tr>
                                                   <th>ID</th>  
                                                   <th>Descripcion</th>  
                                                   <th>Estado</th> 
                                                   <th>Aciones</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
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




    

<?php require_once "view/_footer.php"; ?>
<script src="../js/roles.js"></script> 
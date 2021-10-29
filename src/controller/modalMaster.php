<?php 
class modalMaster
{
    private $headerTitle     =   "";
    private $body            =   "";
    
    public function setModal($tipo, $headerTitle, $body)
    {
        switch ($tipo){
            
            case "acces":
                echo "<form action='modalMaster.php' method='post' >
                        <div id='logoutModal' class='modal fade' role='dialog'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        <h4 class='modal-title'>
                                        <img src='https://fenditrabajo.com/src/view/assets/img/icon/aceptar.png' width='5%' height='5%'></img> $headerTitle</h4>
                                    </div>
                                    <div class='modal-body'>
                                    	<div class='container-fluid'> 
                                			<ul class='jobslist row'>
                                              <li class='col-md-2 col-sm-2'>
                                                  <div class='row'>
                                                  </div>
                                              </li>
                                              <li class='col-md-8 col-sm-8'>
                                                  <div class='row'>
                                                    <p>$body</p>
                                              	  </div>
                                              </li>
                                              <li class='col-md-2 col-sm-2'>
                                                  <div class='row'>
                                              </div>
                                              </li>
                                          </div>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Cancelar</button>
                                        <button type='submit' class='btn btn-primary' id='logout_f' name='logout_f' >Cerrar Sesion</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>";
            break;
            
            case "ok":
                echo "<div id='logoutModal' class='modal fade' role='dialog'>
                       <div class='modal-dialog'>
                          <div class='modal-content'>
                                <div class='modal-body'>
                                    <div class='col-md-2 col-md-offset-5'>
                                        <img ></img>
                                        <p>$body</p>
                                    </div>
                                        
                                    <div class='col-md-2 col-md-offset-5'>
                                        <button type='button' class='btn btn-success' data-dismiss='modal'>Aceptar</button>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                            </div>
                          </div>
                        </div>";
                
                break;
                
            case "info":
                echo "<div id='logoutModal' class='modal fade' role='dialog'>
                       <div class='modal-dialog'>
                          <div class='modal-content'>
                                <div class='modal-body'>
                                    <p>$body</p>
                                    <div class='col-md-2 col-md-offset-5'>
                                        <button type='button' class='btn btn-info' data-dismiss='modal'>Aceptar</button>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                            </div>
                          </div>
                        </div>";
                
                break;
                
            case "warning":
                echo "<div id='logoutModal' class='modal fade' role='dialog'>
                       <div class='modal-dialog'>
                          <div class='modal-content'>
                                <div class='modal-body'>
                                    <p>$body</p>
                                    <div class='col-md-2 col-md-offset-5'>
                                        <button type='button' class='btn btn-warning' data-dismiss='modal'>Aceptar</button>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                            </div>
                          </div>
                        </div>";
                
                break;
            case "error":
                echo "<div id='logoutModal' class='modal fade' role='dialog'>
                       <div class='modal-dialog'>
                          <div class='modal-content'>
                                <div class='modal-body'>
                                    <p>$body</p>
                                    <div class='col-md-2 col-md-offset-5'>
                                        <button type='button' class='btn btn-danger' data-dismiss='modal'>Aceptar</button>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                            </div>
                          </div>
                        </div>";
                
                break;
        }
        
        
        
    }
}



?>
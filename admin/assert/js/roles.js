$(document).ready(function(){
let opcion;
opcion = 4;
	$('#dt_Roles').DataTable(
	{
		"ajax": 
		{
			"url"			:	'../controller/rolesController.php',
			"method"		:	'POST', //usamos el metodo POST
	        "data"			:	{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
	        "dataSrc"		:	''
		},
		
	    "columns":
		[
			{     "data"     :     "id_roles"     	},  
	        {     "data"     :     "descripcion"	},  
	        {     "data"     :     "estado"			} ,  
	        {	"defaultContent": "<div class='text-center'>" +
			                		"<div class='btn-group'>" +
			                		"<button class='btn btn-primary btn-sm btnEditar'>" +
			                		"<i class='fa fa-edit' aria-hidden='true'></i>" +
			                		"</button>" +
			                		"<button class='btn btn-danger btn-sm btnBorrar'>" +
			                		"<i class='fa fa-trash' aria-hidden='true'></i>" +
			                		"</button>" +
			                		"</div>" +
			                		"</div>"
			}
	    ]
	});
});
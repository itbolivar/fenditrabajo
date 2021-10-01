document.addEventListener('keyup',function(){
    var datoBusqueda = document.querySelector('#user_codsicom2').value;
    if(datoBusqueda != ""){
        buscar_datos(datoBusqueda);
    }
})

function buscar_datos(id_cod) {

    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = '../admin/controller/codsicomController.php';
        var data = 'id_cod='+id_cod;
        request.open('POST',ajaxUrl,true);
        request.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
        request.send(data);
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                   document.querySelector('#nombre_eds').innerHTML = request.responseText;
            }
        }
}

/*
 * Registro EDS
 * */
$(document).ready(function () {
	  $('input#user_codsicom2')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
});

/*
 * VALIDACION DE EMPRESA REGISTRO INPUTS
 * CAMPOS SOLO NUMERICOS
 *
 */

$(document).ready(function () {
	  $('input#emp_nit_empresa')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });

	  $('input#tel_empresa')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
	  $('input#cel_empresa')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
	  $('input#rep_numid')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
	  $('input#rep_cargo')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });

	  $('input#rep_tel')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
	  $('input#rep_cel')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
	  $('input#admin_num')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
	  $('input#admin_cel')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
	  $('input#admin_tel')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
	  $('input#admin_numtabajador')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
	  $('input#admin_riesgo')
	    .keypress(function (event) {
	      if (event.which < 48 || event.which > 57 || this.value.length === 12) {
	        return false;
	      }
	    });
});

/*
 * VALIDACION NOMBRE DE EDS
 *
 */

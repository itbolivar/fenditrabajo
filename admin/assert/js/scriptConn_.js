$('#formLogin').submit(
 function(e){
   e.preventDefault();
   let usuario = $.trim($("#usuario").val());    
   let password =$.trim($("#password").val());    
    
   if(usuario.length == "" || password.length == "")
   {
     Swal.fire({
    	  icon:'warning',
          title:'Debe Ingresar un Usuario y/o Password',
      });
	  
	    
      return false; 
    }else{
    	$.ajax({
    	   type			:"POST", 
           url			:"controller/login.php",
           data			:{usuario:usuario, password:password}, 
           datatype		:"json",
           success:function(data)
           {         
        	   if(data == "null"){
                   Swal.fire({
                	   icon:'error',
                       title:'Usuario y/o password incorrecta',
                   });
               }else{
            	   let timerInterval
            	   Swal.fire({
            		 icon:'success',
            	     title: '¡ Conexion Exitosa !',
            	     html: 'Redirecionando en Segundos.',
            	     timer: 2000,
            	     timerProgressBar: true,
            	     showConfirmButton: false,
            	     didOpen: () => {
            	       Swal.showLoading()
            	       timerInterval = setInterval(() => {
            	         const content = Swal.getHtmlContainer()
            	         if (content) {
            	           const b = content.querySelector('b')
            	           if (b) {
            	             b.textContent = Swal.getTimerLeft()
            	           }
            	         }
            	       }, 50)
            	     },
            	     willClose: () => {
            	       clearInterval(timerInterval)
            	     }
            	   }).then((result) => {
            	     /* Read more about handling dismissals below  */
            	     if (result.dismiss === Swal.DismissReason.timer) {
            	       console.log(usuario)
            	       window.location.href = "test.php";
            	     }
            	   })
            	 
            	   
            	   
            	   //window.location.href = "vistas/pag_inicio.php";
                           //window.location.href = "test.php";
            	   
            	   
               }
           }   
        });
    }     
});
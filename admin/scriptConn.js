$('#formLogin').submit(
 function(e){
   e.preventDefault();
   let email 			= 	$.trim($("#email").val());    
   let password 		=	$.trim($("#password").val());    
    
   if(email.length == "" || password.length == "")
   {
     Swal.fire({
    	 	icon:'warning',
      		title:'Debe Ingresar un Usuario y/o Password',
      });
	  return false; 
    }else{
    	$.ajax({
    	   type			:"POST", 
    	   datatype		:"json",
           url			:"controller/login.php",
           data			:{ email:email, password:password }, 
           success:function(data)
		   {
			   if(data != 'null')
			   {
				
				let timerInterval
            	   Swal.fire({
            		 icon				: 'success',
            	     title				: '¡ Conexion Exitosa !',
            	     html				: 'Redirecionando en Segundos.',
            	     timer				: 2000,
            	     timerProgressBar	: true,
            	     showConfirmButton	: false,
            	     didOpen: () => 
            	   	 {
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
            	     if (result.dismiss === Swal.DismissReason.timer) 
            	     {
            	       window.location.href = "assert/index.php";
            	     }
            	   })
			   
				}else
				{
					Swal.fire({	icon:'error',
                	   			title:'Usuario y/o password incorrecta', });            	
   					return false; 
            	}
           	}   
        });
    }     
});
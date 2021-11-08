function validar(){

    var copia = document.getElementById("txtcopia").value;
    var captcha = document.getElementById("captcha").value;
            
    if(copia == captcha){
        window.open("http://www.google.com.pe");
    }else{
        alert("El codigo Ingresado no coincide");
    }
}
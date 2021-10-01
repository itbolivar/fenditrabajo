$(function()
{
  	$("#noautorizacion").modal('show');
  	$("#noautorizacion").on('hidden.bs.modal', 
    	  	function ()
    	  	{
  				window.location.href = "";
			});
});

var btn = document.getElementById('btnRegresar');
        	
btn.onclick = function() {
	window.location.href = "";
}

var btn2 = document.getElementById('btnRegresar2');

btn2.onclick = function() {
	window.location.href = ""; 
}

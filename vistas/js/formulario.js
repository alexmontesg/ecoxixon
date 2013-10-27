if (window.attachEvent)
	window.attachEvent('load', iniciar);
else
	window.addEventListener('load', iniciar, false);

function iniciar() {
	colocar();
	
	window.onresize = colocar;
}

function colocar() {
	var fondo = document.getElementById("fondo");
	var contenido = document.getElementById("contenido");

	if (!fondo || fondo.offsetWidth <= 0 || fondo.offsetHeight <= 0) {
		contenido.style.borderRadius = "0";
		contenido.style.marginTop = "0";
		return;
	}
	
	var dim = dimensiones_pantalla();

	contenido.style.marginTop = (dim.alto - contenido.offsetHeight) / 2 + "px";
	contenido.style.borderRadius = "0.5em";
}

function dimensiones_pantalla()
{
	var ancho = 630, alto = 460;
	
	if (window.innerWidth && window.innerHeight) 
	{
		 ancho = window.innerWidth;
		 alto = window.innerHeight;
	}
	else if (document.compatMode=='CSS1Compat' && document.documentElement && document.documentElement.offsetWidth) 
	{
		 ancho = document.documentElement.offsetWidth;
		 alto = document.documentElement.offsetHeight;
	}
	else if (document.body && document.body.offsetWidth) 
	{
		 ancho = document.body.offsetWidth;
		 alto = document.body.offsetHeight;
	}
	
	return { ancho : ancho, alto : alto };
}
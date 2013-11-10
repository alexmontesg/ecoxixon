if (window.attachEvent)
	window.attachEvent('load', iniciar);
else
	window.addEventListener('load', iniciar, false);
	
var fondo = null;
var contexto = null;

var nubes = null;
var num_nubes = 10;

var dimensiones_fondo = null;
var dimensiones_nube = { ancho : 230, alto : 54 };
	
var imagenes = 	[
					'img/nube_2.png'
				];
				
var graficos = {};
	
function iniciar()
{
	fondo = document.getElementById('fondo');
	contexto = fondo.getContext('2d');
	
	ajustar_fondo();
	
	cargar_imagenes(imagenes);
	
	if (window.attachEvent)
		window.attachEvent('resize', redimensionar);
	else
		window.addEventListener('resize', redimensionar, false);
}

function cargar_imagenes(imagenes)
{
	var numero = imagenes.length;
	
	for (var i = 0; i < imagenes.length; i++)
	{
		var imagen = new Image();
		
		imagen.onload = function() {
			numero--;
			
			if (numero == 0)
			{
				nubes = generar_nubes();
				
				setInterval(mostrar_fondo, 30);
			}
		}
		
		imagen.src = imagenes[i];
		
		graficos[imagenes[i]] = imagen;
	}
}

function redimensionar()
{
	ajustar_fondo();
	
	nubes = generar_nubes();
}

function ajustar_fondo()
{
	dimensiones_fondo = dimensiones_pantalla();
	
	fondo.width = dimensiones_fondo.ancho;
	fondo.height = dimensiones_fondo.alto;
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

function generar_nubes()
{
	var nubes = [];
	var nube = graficos['img/nube_2.png'];
	
	for (var i = 0; i < num_nubes; i++)
	{
		var y_aleatorio = Math.floor(Math.random() * 300 + 30);
		nubes[i] = new Nube(i * dimensiones_nube.ancho, y_aleatorio, dimensiones_nube.ancho, dimensiones_nube.alto, nube);
	}
	
	return nubes;
}

function Nube(x, y, ancho, alto, img)
{
	this.avanzar = function()
	{
		if (x + ancho < 0)
			x = dimensiones_pantalla().ancho;
	
		x--;
		
		return this;
	}
	
	this.dibujar = function()
	{
		contexto.drawImage(img, x, y, ancho, alto);
		return this;
	}
}

function mostrar_fondo()
{
	// Limpiar canvas
	contexto.clearRect (0, 0, dimensiones_fondo.ancho, dimensiones_fondo.alto);

	for (var i = 0; i < nubes.length; i++)
	{
		nubes[i].avanzar().dibujar();
	}
}
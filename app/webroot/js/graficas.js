dibujarGraficos();

window.onresize = dibujarGraficos;

function dibujarGraficos() {
	var opciones = Grafico.opcionesDefecto();
	
	opciones.series = [
		{
	        name: "Primero",
	        values: [99.80, 68]
	    },
	    {  
	    	name: "Segundo",
	     	values: [99, 89]
	    }
	];
	
	Grafico.dibujar("grafica1", "bar", opciones);
}
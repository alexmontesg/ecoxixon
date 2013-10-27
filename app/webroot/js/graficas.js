dibujarGraficos();

window.onresize = dibujarGraficos;

function dibujarGraficos() {
	var opciones = Grafico.opcionesDefecto();
	
	opciones.series = [
		{
	        name: "Pelayín",
	        values: [99.80, 68]
	    },
	    {  
	    	name: "María",
	     	values: [99, 89]
	    }
	];
	
	Grafico.dibujar("grafica1", "bar", opciones);
}
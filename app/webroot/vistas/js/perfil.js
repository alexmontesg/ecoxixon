dibujarGraficos();

window.onresize = dibujarGraficos;

function dibujarGraficos() {
	var opciones = Grafico.opcionesDefecto();
	
	opciones.series = [
		{
	        name: "Primero",
	        values: [10, 58, 30]
	    },
	];
	
	opciones.legend.show = false;
	opciones.margins = [10, 5, 10];
	opciones.xAxis.values = ["Dic 2012", "Sep 2013"];
	opciones.yAxis.title = "Pelayinos";
	opciones.serieColours = ["#01A9DB"];
	
	Grafico.dibujar("historico", "line", opciones);
}
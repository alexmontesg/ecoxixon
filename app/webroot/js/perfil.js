dibujarGraficos();

window.onresize = dibujarGraficos;

function dibujarGraficos() {
	var opciones = Grafico.opcionesDefecto();
	
	opciones.series = [
		{
	        name: "Usuario",
	        values: [10, 58]
	    },
	];
	
	opciones.legend.show = false;
	opciones.margins = [10, 5, 10, 5];
	opciones.xAxis.values = ["Dic 2012", "Sep 2013"];
	opciones.yAxis.title = "Pelayinos";
	opciones.serieColours = ["#01A9DB"];
	
	Grafico.dibujar("historico", "line", opciones);
}
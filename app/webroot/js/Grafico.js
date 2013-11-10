var Grafico = {
	opcionesDefecto : function() {
		return {
			style: "border: 1px solid red",
			margins: [10, 30, 10, 5],
			valueOnItem: {
				show: false
			},
			xAxis: {
				"font-family": "'Josefin Sans', sans-serif",
				"font-size": "0.8em",
				values: ["Ene", "Feb"],
				title: "",
			},
			yAxis: {
				"font-family": "'Josefin Sans', sans-serif",
				"font-size": "0.8em",
				title: "Valores"
			},
			legend: {
				"font-family": "'Josefin Sans', sans-serif",
				"font-size": "0.8em"
			},
			serieColours: ["#FCD271", "#FE2E64", "#2BBBD8", "#102E37"]
		}
	},

	dibujar : function (div, tipo, titulo, opciones) {
		var div = document.getElementById(div);
		//div.innerHTML = "";
		
		var h4 = document.createElement("h4");
		div.appendChild(h4);
		h4.innerHTML = titulo;
		
		opciones.width = div.offsetWidth;
		//opciones.height = div.offsetHeight;
				
		switch(tipo) {
			case "bar":
				var chart = jGraf.barChart(opciones);
				break;
			case "pie":
				var chart = jGraf.pieChart(opciones);
				break;
			case "line":
				var chart = jGraf.lineChart(opciones);
				break;
			default:
				var chart = jGraf.barChart(opciones);
		}
		
		div.appendChild(chart.render());
	}
}
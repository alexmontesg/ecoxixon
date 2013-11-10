dibujarGraficos();

window.onresize = dibujarGraficos;

function Indicador() {
	var nombresEstaciones = [];
	var estaciones = {};
	
	this.insertar = function(estacion, fecha, indicador) {		
		if (nombresEstaciones.indexOf(estacion) == -1) {
			estaciones[estacion] = new DatosEstacion(estacion);
			nombresEstaciones.push(estacion);
		}
		
		estaciones[estacion].insertar(fecha, indicador);
	}
	
	this.datos = function() {
		var est = [];
		
		for (var i = 0; i < nombresEstaciones.length; i++) {
			var nombreEstacion = nombresEstaciones[i];
			var estacion = estaciones[nombreEstacion];
			
			est.push(estacion);
		}
	
		est.sort(function(a, b) {
			return a.estacion - b.estacion;
		});
		
		return est;
	}
}

function DatosEstacion(estacion) {
	var dias = {};
	var arrayDias = [];
	
	this.estacion = estacion;
	
	this.insertar = function(dia, dato) {
		var dD = dias[dia];
	
		if (!dD) {
			dD = dias[dia] = new DatosDia(dia);
			arrayDias.push(dia);
		}
			
		dD.insertar(dato);
	}
	
	this.datos = function() {
		var d = [];
		
		for (var i = 0; i < arrayDias.length; i++) {
			var dia = arrayDias[i];
			
			d.push(dias[dia]);
		}
		
		d.sort(function(a, b) {
			return a.dia - b.dia;
		});
		
		for (var i = 0; i < d.length; i++)
			d[i] = d[i].media();
		
		return d;
	}
	
	this.dias = function() {
		arrayDias.sort(function(a, b) {
			return a - b;
		});
	
		var d = [];
		
		for (var i = 0; i < arrayDias.length; i++) {
			var fecha = new Date(arrayDias[i]);
			
			d.push(fecha.getDate() + " / " + (fecha.getMonth() + 1));
		}
		
		return d;
	}
}

function DatosDia(dia) {
	var array = [];
	
	this.dia = dia;
	
	this.insertar = function(dato) {
		array.push(dato);
	}
	
	this.media = function() {
		if (array.length == 0)
			return 0;
	
		var m = 0;
		
		for (var i = 0; i < array.length; i++)
			m += parseFloat(array[i]);
			
		return m / array.length;
	}
}

function dibujarGraficos() {
	var opciones = Grafico.opcionesDefecto();
	
	var datos = aire.calidadairemediatemporales.calidadairemediatemporal;
	var length = datos.length;
	
	var CO = new Indicador();
	var NO = new Indicador();
	var O3 = new Indicador();
	var SO2 = new Indicador();
	
	for (var i = 0; i < datos.length; i++) {
		var estacion = datos[i].titulo;
		var fechasolar_utc_ = datos[i].fechasolar_utc_;
		var co = datos[i].co;
		var no = datos[i].no;
		var o3 = datos[i].o3;
		var so2 = datos[i].so2;
	
		var fecha = new Date(fechasolar_utc_);
		fecha.setHours(0,0,0,0);
		
		CO.insertar(estacion, fecha, co);
		NO.insertar(estacion, fecha, no);
		O3.insertar(estacion, fecha, o3);
		SO2.insertar(estacion, fecha, so2);
	}
	
	var datos = CO.datos();
	var dias = datos[0].dias();
	
	opciones.xAxis.values = dias;
	opciones.xAxis.title = "Fecha";
	var graf = document.getElementById("grafica1");
	var altura = graf.offsetHeight;
	opciones.height = altura;
	graf.style.height = "auto";
	
	for (var i = 0; i < datos.length; i++) {
		opciones.series = [];
		
		var CODatos = CO.datos()[i];
		var titulo = CODatos.estacion;
	
		opciones.series.push({
			name: "CO",
			values: CODatos.datos()
		});
	
		opciones.series.push({
			name: "NO",
			values: NO.datos()[i].datos()
		});
	
		opciones.series.push({
			name: "O3",
			values: O3.datos()[i].datos()
		});
	
		opciones.series.push({
			name: "SO2",
			values: SO2.datos()[i ].datos()
		});
	
		Grafico.dibujar("grafica1", "line", titulo, opciones);
	}
}
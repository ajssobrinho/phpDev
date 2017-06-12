   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

   <script type="text/javascript" src="https://www.google.com/jsapi"></script>

<!-- CP GRAPHS -->
	<!-- GERAL CP -->
      
 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["9:00", 60, "#ECF0F1"],
        ["10:00", 85, "ECF0F1"],
        ["11:00", 114, "ECF0F1"],
        ["12:00", 250, "ECF0F1"],
        ["13:00", 230, "ECF0F1"],
        ["14:00", 350, "#ECF0F1"],
        ["15:00", 378, "ECF0F1"],
        ["16:00", 311, "ECF0F1"],
        ["17:00", 210, "ECF0F1"],
        ["18:00", 20, "ECF0F1"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 700,
        height: 300,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
				tooltip: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("cp_barras_1"));
      chart.draw(view, options);
  }
  </script>

	<!-- SEMANA CP -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("cp_dados_transferidos"));
      chart.draw(view, options);
  }
  </script>
  
  
	<!-- PESSOAS SEMANA CP -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("cp_pessoas_ligadas"));
      chart.draw(view, options);
  }
  </script>
  
  
  <!-- ENG1 GRAPHS -->
	<!-- GERAL ENG1 -->
      
 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["9:00", 60, "#ECF0F1"],
        ["10:00", 85, "ECF0F1"],
        ["11:00", 114, "ECF0F1"],
        ["12:00", 250, "ECF0F1"],
        ["13:00", 230, "ECF0F1"],
        ["14:00", 350, "#ECF0F1"],
        ["15:00", 378, "ECF0F1"],
        ["16:00", 311, "ECF0F1"],
        ["17:00", 210, "ECF0F1"],
        ["18:00", 20, "ECF0F1"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 700,
        height: 300,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
				tooltip: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("eng1_barras_1"));
      chart.draw(view, options);
  }
  </script>

	<!-- SEMANA ENG1 -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("eng1_dados_transferidos"));
      chart.draw(view, options);
  }
  </script>
  
  
	<!-- PESSOAS SEMANA ENG1 -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("eng1_pessoas_ligadas"));
      chart.draw(view, options);
  }
  </script>
  
  
    <!-- ENG2 GRAPHS -->
	<!-- GERAL ENG1 -->
      
 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["9:00", 60, "#ECF0F1"],
        ["10:00", 85, "ECF0F1"],
        ["11:00", 114, "ECF0F1"],
        ["12:00", 250, "ECF0F1"],
        ["13:00", 230, "ECF0F1"],
        ["14:00", 350, "#ECF0F1"],
        ["15:00", 378, "ECF0F1"],
        ["16:00", 311, "ECF0F1"],
        ["17:00", 210, "ECF0F1"],
        ["18:00", 20, "ECF0F1"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 700,
        height: 300,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
				tooltip: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("eng2_barras_1"));
      chart.draw(view, options);
  }
  </script>

	<!-- SEMANA ENG2 -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("eng2_dados_transferidos"));
      chart.draw(view, options);
  }
  </script>
  
  
	<!-- PESSOAS SEMANA ENG2 -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("eng2_pessoas_ligadas"));
      chart.draw(view, options);
  }
  </script>
  
  
    <!-- BIBLIOTECA GRAPHS -->
	<!-- GERAL ENG1 -->
      
 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["9:00", 60, "#ECF0F1"],
        ["10:00", 85, "ECF0F1"],
        ["11:00", 114, "ECF0F1"],
        ["12:00", 250, "ECF0F1"],
        ["13:00", 230, "ECF0F1"],
        ["14:00", 350, "#ECF0F1"],
        ["15:00", 378, "ECF0F1"],
        ["16:00", 311, "ECF0F1"],
        ["17:00", 210, "ECF0F1"],
        ["18:00", 20, "ECF0F1"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 700,
        height: 300,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
				tooltip: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("bb_barras_1"));
      chart.draw(view, options);
  }
  </script>

	<!-- SEMANA BIBLIOTECA -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("bb_dados_transferidos"));
      chart.draw(view, options);
  }
  </script>
  
  
	<!-- PESSOAS SEMANA BIBLIOTECA -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("bb_pessoas_ligadas"));
      chart.draw(view, options);
  }
  </script>
  
  
    <!-- GEO GRAPHS -->
	<!-- GERAL GEO -->
      
 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["9:00", 60, "#ECF0F1"],
        ["10:00", 85, "ECF0F1"],
        ["11:00", 114, "ECF0F1"],
        ["12:00", 250, "ECF0F1"],
        ["13:00", 230, "ECF0F1"],
        ["14:00", 350, "#ECF0F1"],
        ["15:00", 378, "ECF0F1"],
        ["16:00", 311, "ECF0F1"],
        ["17:00", 210, "ECF0F1"],
        ["18:00", 20, "ECF0F1"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 700,
        height: 300,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
				tooltip: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("geo_barras_1"));
      chart.draw(view, options);
  }
  </script>

	<!-- SEMANA GEO -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("geo_dados_transferidos"));
      chart.draw(view, options);
  }
  </script>
  
  
	<!-- PESSOAS SEMANA GEO -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("geo_pessoas_ligadas"));
      chart.draw(view, options);
  }
  </script>
  
  
  
    <!-- ENG1 DESPORTO -->
	<!-- GERAL DESPORTO -->
      
 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["9:00", 60, "#ECF0F1"],
        ["10:00", 85, "ECF0F1"],
        ["11:00", 114, "ECF0F1"],
        ["12:00", 250, "ECF0F1"],
        ["13:00", 230, "ECF0F1"],
        ["14:00", 350, "#ECF0F1"],
        ["15:00", 378, "ECF0F1"],
        ["16:00", 311, "ECF0F1"],
        ["17:00", 210, "ECF0F1"],
        ["18:00", 20, "ECF0F1"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 700,
        height: 300,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
				tooltip: {
    		textStyle:{ color: '#FFF',
             fontSize: '12',
			}
		},
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("desp_barras_1"));
      chart.draw(view, options);
  }
  </script>

	<!-- SEMANA NAVE DESPORTO -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("desp_dados_transferidos"));
      chart.draw(view, options);
  }
  </script>
  
  
	<!-- PESSOAS SEMANA NAVE DESPORTO -->

 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Segunda", 60, "#2C3E50"],
        ["Terça", 85, "2C3E50"],
        ["Quarta", 114, "2C3E50"],
        ["Quinta", 250, "2C3E50"],
        ["Sexta", 230, "2C3E50"],
        ["Sábado", 350, "#2C3E50"],
        ["Domingo", 378, "2C3E50"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 600,
        height: 250,
		backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
		hAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			 }
		},
		vAxis: {
    		textStyle:{ color: '#000',
             fontSize: '12',
			}
		},
		
		
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("desp_pessoas_ligadas"));
      chart.draw(view, options);
  }
  </script>
		
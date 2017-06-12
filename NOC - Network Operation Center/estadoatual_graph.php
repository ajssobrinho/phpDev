   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

   <script type="text/javascript" src="https://www.google.com/jsapi"></script>

<!-- PESSOAS LIGADAS ATUALMENTE -->
	<!-- PESSOAS LIGADAS ATUALMENTE -->
      
 <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Biblioteca", 21, "#ECF0F1"],
        ["Complexo pedagógico", 66, "ECF0F1"],
        ["Engenharias I", 210, "ECF0F1"],
        ["Engenharias II", 57, "ECF0F1"],
        ["Geociências", 22, "ECF0F1"],
        ["Nave de desportos", 36, "#ECF0F1"]
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
        height: 270,
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
      var chart = new google.visualization.ColumnChart(document.getElementById("pessoas_ligadas_agora"));
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
 
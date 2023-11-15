<head>
  <h1>Employees chart</h1>
<h1>Chart.js</h1>
<div>
  <canvas id="myChart"></canvas>
</div>

<div><canvas class="zdog-canvas" width="240" height="240"></canvas></div>

</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/zdog@1/dist/zdog.dist.min.js"></script>
<script src="zdog-demo.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($employee = $employees->fetch_assoc()) {
  echo $employee['num_divisions'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$employees = selectEmployees();
while ($employee = $employees->fetch_assoc()) {
echo "'" . $employee['employee_name'] . "', ";
}
?>
    ]
},
  });

swal({
  text: 'Search for a movie. e.g. "La La Land".',
  content: "input",
  button: {
    text: "Search!",
    closeModal: false,
  },
})
.then(name => {
  if (!name) throw null;
 
  return fetch(`https://itunes.apple.com/search?term=${name}&entity=movie`);
})
.then(results => {
  return results.json();
})
.then(json => {
  const movie = json.results[0];
 
  if (!movie) {
    return swal("No movie was found!");
  }
 
  const name = movie.trackName;
  const imageURL = movie.artworkUrl100;
 
  swal({
    title: "Top result:",
    text: name,
    icon: imageURL,
  });
})
.catch(err => {
  if (err) {
    swal("Oh noes!", "The AJAX request failed!", "error");
  } else {
    swal.stopLoading();
    swal.close();
  }
});

let illo = new Zdog.Illustration({
  // set canvas with selector
  element: '.zdog-canvas',
});

function animate() {
  // rotate illo each frame
  illo.rotate.y += 0.03;
  illo.updateRenderGraph();
  // animate next frame
  requestAnimationFrame( animate );
}
// start animation
animate();

// add circle
new Zdog.Ellipse({
  addTo: illo,
  diameter: 80,
  stroke: 20,
  color: '#636',
});

// update & render
illo.updateRenderGraph();
  
new Zdog.Ellipse({
  addTo: illo,
  diameter: 80,
  // position closer
  translate: { z: 40 },
  stroke: 20,
  color: '#636',
});


new Zdog.Rect({
  addTo: illo,
  width: 80,
  height: 80,
  // position further back
  translate: { z: -40 },
  stroke: 12,
  color: '#E62',
  fill: true,
});

  Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Corn vs wheat estimated production for 2020',
        align: 'left'
    },
    subtitle: {
        text:
            'Source: <a target="_blank" ' +
            'href="https://www.indexmundi.com/agriculture/?commodity=corn">indexmundi</a>',
        align: 'left'
    },
    xAxis: {
        categories: ['USA', 'China', 'Brazil', 'EU', 'India', 'Russia'],
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '1000 metric tons (MT)'
        }
    },
    tooltip: {
        valueSuffix: ' (1000 MT)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Corn',
            data: [406292, 260000, 107000, 68300, 27500, 14500]
        },
        {
            name: 'Wheat',
            data: [51086, 136000, 5500, 141000, 107180, 77000]
        }
    ]
});

</script>

  
</body>
    
    

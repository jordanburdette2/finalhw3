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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D3.js Bar Chart</title>
  <script src="https://d3js.org/d3.v5.min.js"></script>
  <style>
    /* Add any necessary styles here */
    /* For example, you can style the bars with different colors */
    rect {
      fill: steelblue;
    }
  </style>
</head>
<body>

  <script>
    // Your data (replace this with your own data)
    var data = [10, 25, 15, 30, 20];

    // Set up the SVG canvas
    var svg = d3.select("body")
      .append("svg")
      .attr("width", 400)
      .attr("height", 200);

    // Create bars
    svg.selectAll("rect")
      .data(data)
      .enter()
      .append("rect")
      .attr("x", function(d, i) {
        return i * 80; // Bar width + gap
      })
      .attr("y", function(d) {
        return 200 - d; // Invert the y-axis
      })
      .attr("width", 75) // Bar width
      .attr("height", function(d) {
        return d;
      })
      .attr("fill", "steelblue"); // Bar color
  </script>

</body>
</html>

</script>

  
</body>
    
    

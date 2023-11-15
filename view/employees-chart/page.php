<h1>Employees chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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
$employee = selectEmployees();
while ($employee = $employees->fetch_assoc()) {
echo "'" . $employee['employee_name'] . "', ";
}
?>
    ]
},
  });
</script>
    
    

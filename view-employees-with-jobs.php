<h1>Employees with Jobs</h1>

<div class="card-group">
  <?php
  while ($employee = $employees->fetch_assoc()) {
    ?>
    <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $employee['employee_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
        
  <?php
    $jobs = selectJobsOfEmployees($employee['employee_id']);
    
  while ($employee = $employees->fetch_assoc()) {
    ?>
      <li class="list-group-item"><?php echo $job['job_number']; ?> - <?php echo $job['start-date']; ?> - <?php echo $division['building']; ?></li>
  <?php
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Office: <?php echo $employee['office_number']; ?></small></p>
    </div>
  </div>
  <?php
  }
  ?>
</div>

<h1>Jobs Of Employees</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Job Title</th>
        <th>Job Start Date</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($job = $jobs->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $job['job_id']; ?></td>
    <td><?php echo $job['job_number']; ?></td>
    <td><?php echo $job['job_title']; ?></td>
    <td><?php echo $job['start_date']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

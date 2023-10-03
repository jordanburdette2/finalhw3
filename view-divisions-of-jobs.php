<h1>Divisions of Jobs</h1>
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
while ($division = $divisions->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $division['job_id']; ?></td>
    <td><?php echo $division['job_number']; ?></td>
    <td><?php echo $division['job_title']; ?></td>
    <td><?php echo $division['start_date']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

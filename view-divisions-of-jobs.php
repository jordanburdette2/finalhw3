<h1>Divisions of Jobs</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Division ID</th>
      <th>Job ID</th>
        <th>Building</th>
        <th>Manager</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($division = $divisions->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $division['division_id']; ?></td>
    <td><?php echo $division['job_id']; ?></td>
    <td><?php echo $division['building']; ?></td>
    <td><?php echo $division['manager']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

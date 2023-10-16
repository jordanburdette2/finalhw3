<h1>Jobs</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Job Number</th>
      <th>Job Title</th>
      <th>Job Start Date</th>
      <th></th>
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
    <td>
      
    </td>
    <td>
      <form method="post" action="divisions-for-jobs.php">
        <input type="hidden" name="jid" value="<?php echo $job['job_id']; ?>">
      <button type="submit" class="btn btn-primary">Division</button>
    </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

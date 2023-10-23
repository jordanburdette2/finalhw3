<div class="row">
  <div class="col>
    <h1>Jobs</h1>
    </div>
    <div class="col=auto">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg>
    </div>
  
</div>

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
      <form method="post" action="divisions-of-jobs.php">
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

<h1>Employees</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>ID</th>
      <th>Name</th>
      <th>Office</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
  <?php
  while ($employee = $employees->fetch_assoc()) {
    ?>
      <tr>
        <td><?php echo $employee['employee_id']; ?></td>
        <td><?php echo $employee['employee_name']; ?></td>
        <td><?php echo $employee['office_number']; ?></td>
      </tr>
    <?php
  }
  ?>
    </tbody>
  </table>
</div>

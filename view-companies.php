<h1>Companies</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>ID</th>
      <th>Name</th>
      <th>Type</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
  <?php
  while ($company = $companies->fetch_assoc()) {
    ?>
      <tr>
        <td><?php echo $company['company_id']; ?></td>
        <td><?php echo $company['company_name']; ?></td>
        <td><?php echo $company['company_type']; ?></td>
      </tr>
    <?php
  }
  ?>
    </tbody>
  </table>
</div>

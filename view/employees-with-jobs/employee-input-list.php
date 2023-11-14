<select class="form-select" id="iid" name="iid">
<?php
while ($employeeItem = $employeeList-> fetch_assoc()) {
  $selText = "";
  if ($selectedEmployee == $employeeItem['employee_id']) {
    $selText = " selected"; 
  }
?>
  <option value="<?php echo $employeeItem['employee_id']; ?> "<?=$selText?>><?php echo $employeeItem['employee_name']; ?></option>
<?php
}
?>

</select>


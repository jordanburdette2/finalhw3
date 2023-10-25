<select class="form-select" id="iid" name="iid">
<?php
while ($employeeItem = $employeeList-> fetch_assoc()) {
?>
  <option value="<?php echo $employeeItem['employee_id']; ?> "><?php echo $employeeItem['employee_name']; ?></option>
<?php
}
?>

</select>


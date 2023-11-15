<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editDivisionModal<?php echo $division['job_id']; ?>">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editDivisionModal<?php echo $division['job_id']; ?>" tabindex="-1" aria-labelledby="editDivisionModalLabel<?php echo $division['job_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editDivisionModalLabel<?php echo $division['division_id']; ?>">Edit Division</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="$did<?php echo $division['job_id']; ?>" class="form-label">Employee</label>
     <?php
   $employeeList = selectEmployeesForInput();
   $selectedEmployee = $job['job_id'];
   include "employee-input-list.php";
   ?>
            </div>
             
            <div class="mb-3">
              <label for="jTitle<?php echo $job['job_id']; ?>" class="form-label">Job Title</label>
              <input type="text" class="form-control" id="jTitle<?php echo $job['job_id']; ?>" name="jTitle" value="<?php echo $job['job_title']; ?>">
            </div>
            <div class="mb-3">
              <label for="jStart<?php echo $job['job_id']; ?>" class="form-label">Start Date</label>
              <input type="text" class="form-control" id="jStart<?php echo $job['job_id']; ?>" name="jStart" value="<?php echo $job['start_date']; ?>">
            </div>
             <div class="mb-3">
              <label for="officeNum<?php echo $job['job_id']; ?>" class="form-label">Office Number</label>
              <input type="text" class="form-control" id="officeNum<?php echo $job['job_id']; ?>" name="officeNum" value="<?php echo $job['start_date']; ?>">
            </div>
              <input type="hidden" name="jid" value="<?php echo $job['job_id']; ?>">
              <input type="hidden" name="actionType" value="Edit">
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

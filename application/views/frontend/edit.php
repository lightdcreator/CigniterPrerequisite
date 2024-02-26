<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5>
						Employee Edit Page
						<a href="<?php echo base_url('employee'); ?>" class="btn btn-danger float-right">Back</a>
					</h5>
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-group">
							<label for="">First Name</label>
							<input type="text" name="firstname" value="<?= $employee->firstname ?>" class="form-control">
							<small><?php echo form_error('firstname'); ?></small>
						</div>

						<div class="form-group">
							<label for="">Last Name</label>
							<input type="text" name="lastname" value="<?= $employee->lastname ?>" class="form-control">
							<small><?php echo form_error('lastname'); ?></small>
						</div>


						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="text" name="phone" value="<?= $employee->phone ?>" class="form-control">
							<small><?php echo form_error('phone'); ?></small>
						</div>

						<div class="form-group">
							<label for="">Email ID</label>
							<input type="text" name="emailid" value="<?= $employee->emailid?>" class="form-control">
							<small><?php echo form_error('emailid'); ?></small>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-info">Update</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

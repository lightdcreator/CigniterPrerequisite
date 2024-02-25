<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5>
						How to insert Data into Database
						<a href="<?php echo base_url('employee/store'); ?>" class="btn btn-danger float-right">Back</a>
					</h5>
				</div>
				<div class="card-body">
					<form action="<?php echo base_url('employee/store'); ?>" method="POST">
						<div class="form-group">
							<label for="">First Name</label>
							<input type="text" name="firstname" class="form-control">
							<small><?php echo form_error('firstname'); ?></small>
						</div>

						<div class="form-group">
							<label for="">Last Name</label>
							<input type="text" name="lastname" class="form-control">
							<small><?php echo form_error('lastname'); ?></small>
						</div>


						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="text" name="phone" class="form-control">
							<small><?php echo form_error('phone'); ?></small>
						</div>

						<div class="form-group">
							<label for="">Email ID</label>
							<input type="text" name="emailid" class="form-control">
							<small><?php echo form_error('emailid'); ?></small>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
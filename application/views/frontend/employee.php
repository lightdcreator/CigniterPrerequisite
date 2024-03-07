<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">

				<div class="card-header">
				<?php if($this->session->flashdata('status')) : ?>
					<div class="alert alert-success">
						<?= $this->session->flashdata('status'); ?>
					</div>
					<?php endif; ?>

					<h5>
						How to insert Data into Database
						<a href="<?php echo base_url('employee/add'); ?>" class="btn btn-primary float-right">Add Employee</a>
					</h5>
				</div>

				<div class="card-body">
					<table id="datatable1" class="table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Phone Number</th>
								<th>Email ID</th>
								<th>Edit</th>
								<th>Delete</th>
								<th>Confirm Delete</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<?php foreach ($employee as $row) : ?>

									<td><?php echo $row->id; ?></td>
									<td><?= $row->firstname ?></td>
									<td><?= $row->lastname ?></td>
									<td><?= $row->phone ?></td>
									<td><?= $row->emailid ?></td>


									<!-- <td>Francis Oliver</td>
									<td>Hiloma</td>
									<td>09456789123</td>
									<td>francis@gmail.com</td> -->




									<td>
										<a href="<?php echo base_url('employee/edit/' . $row->id); ?>" class="btn btn-success">Edit</a>
									</td>
									<td>
										<a href="<?php echo base_url('employee/delete/' . $row->id); ?>" class="btn btn-danger">Delete</a>
									</td>
									<td>
									<button type="button" class="btn btn-danger confirm-delete" value="<?= $row->id; ?>">Confirm Delete</button>
									</td>

							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

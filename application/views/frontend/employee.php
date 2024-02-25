<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5>
						How to insert Data into Database
						<a href="<?php echo base_url('employee/add'); ?>" class="btn btn-primary float-right">Add Employee</a>
					</h5>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Phone Number</th>
								<th>Email ID</th>
								<th>Edit</th>
								<th>Delete</th>
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
										<a href="" class="btn btn-success">Edit</a>
									</td>
									<td>
										<a href="" class="btn btn-danger">Delete</a>
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
<?php $this -> setSiteTitle('Contacts');?>


<?php $this -> start('body');?>

<div class="col-md-12">
	<h1 class="text-center">Contacts</h1>
	
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Full Name</th>
					<th>Email Address</th>
					<th>Phone Number</th>
					<th>Address</th>
			</thead>
			<tbody>
				<?php foreach ($data['contacts'] as $contact) :?>
				<tr>
					<td><?php echo $contact -> id;?></td>
					<td><?php echo $contact -> fname.' '.$contact -> mname.'. '.$contact -> lname;?></td>
					<td><?php echo $contact -> email;?></td>
					<td><?php echo $contact -> phone;?></td>
					<td><?php echo $contact -> address;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>

</div>

<?php $this -> end();?>


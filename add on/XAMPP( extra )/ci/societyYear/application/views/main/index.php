<!DOCTYPE html>
<html>
    <head></head>
<body>
    <a href="<?php echo base_url() . "Main/add/"; ?>">Add</a>
    <br>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
		<?php foreach($year_list as $row_year){ ?>
			<form method="POST" action="<?php echo base_url() . "year_delete"; ?>" id="year_delete">
				<tr>
					<td><?php echo $row_year->name; ?></td>
					<td>
						<a href="<?php echo base_url() . "Main/edit/" . $row_year->id; ?>">
							Edit
						</a>&nbsp;&nbsp;
						<!-- <a href="<?php echo base_url() . "Main/delete/" . $row_year->id; ?>">
							<input type="submit" value="Delete" />
							delete
						</a> -->
							<a onclick="alert('Delete Successfully !');" href="<?php echo site_url('Main/delete_row/' . $row_year->id);?>">
								Delete
							</a>
						</div>		
				</tr>
			</form>
        <?php } ?>
	
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	<script>
		$('#year_delete').submit(function(e) {
			e.preventDefault();
	
			$.ajax({
				url: '<?php echo base_url() . "year_delete"; ?>',
				type: 'POST',
				data: new FormData(this),
				processData: false,
				contentType: false,
				success: function(data) {
					alert('Delete Successfully !');
					// window.location.href = '<?php echo base_url() . "Main"; ?>';
				},
				error: function(data) {
					alert('Something Error !');
				},
			});
		});
	</script>
</body>
</html>

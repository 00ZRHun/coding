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
				<tr id="<?= $row_year->id ?>">
					<td><?php echo $row_year->name; ?></td>
					<td>
						<a href="<?php echo base_url() . "Main/edit/" . $row_year->id; ?>">
							Edit
						</a>&nbsp;&nbsp;
						<!-- <a href="<?php echo base_url() . "Main/delete_row/" . $row_year->id; ?>">
							<input type="submit" value="Delete" />
							delete
						</a> -->
						<td>
							<a href="<?php echo site_url('Main/delete_row/' . $row_year->id );?>">
								Delete
							</a>
						</td>
				</tr>
			</form>
        <?php } ?>
	
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(".remove").click(function(){
			var id = $(this).parents("tr").attr("id");


			if(confirm('Are you sure to remove this record ?'))
			{
				$.ajax({
				url: '/year_delete/'+id,
				type: 'DELETE',
				error: function() {
					alert('Something is wrong');
				},
				success: function(data) {
						$("#"+id).remove();
						alert("Record removed successfully");  
				}
				});
			}
		});
		// $(".remove").click(function(){
		// 	var id = $(this).parents("tr").attr("id");


		// 	if(confirm('Are you sure to remove this record ?'))
		// 	{
		// 		$.ajax({
		// 			url: '/year_delete/',
		// 			type: 'POST',
					
		// 			success: function(data) {
		// 					$("#"+id).remove();
		// 					alert("Record removed successfully");  
		// 			},
		// 			// error: function(data) {
		// 			// 	alert('Something is wrong');
		// 			// }
		// 		});
		// 	}
		// });

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

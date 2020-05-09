<!DOCTYPE html>
<html>
    <head></head>
<body>
    <a href="<?php echo base_url() . "Main/add/"; ?>">Add</a>
    <table style="margin-top: 10px;">
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php foreach($member_list as $row_member){ ?>
        <tr>
            <td><?php echo $row_member->name; ?></td>
            <td>
				<a href="<?php echo base_url() . "Main/edit/" . $row_member->id; ?>">
					Edit
				</a>
				&nbsp;&nbsp;
				<button id="member_delete" onclick="myDeleteFunction()">
					<!-- <a href="<?php echo base_url() . "Main/delete/" . $row_member->id; ?>"></a> -->
						Delete
				</button>
			</td>
        </tr>
        <?php } ?>
	</table>
	
	<!-- <form method="POST" action="<?php echo base_url() . "member_delete"; ?>" id="member_delete">
	<input type="submit" value="Delete" /> -->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	<script>
		function myDeleteFunction() {
			// e.preventDefault();
			// $.ajax({
				alert('Something happens !');

				url: '<?php echo base_url() . "member_delete"; ?>',
				type: 'POST',
				data: new FormData(this),
				processData: false,
				contentType: false,
				success: function(data) {
					alert('Delete Successfully !');
					window.location.href = '<?php echo base_url() . "Main"; ?>';
				},
				error: function(data) {
					alert('Something Error !');
				},
			// });
		}
		/* $('#member_delete').onclick(function(e) {
			e.preventDefault();
	
			$.ajax({
				// url: '<?php echo base_url() . "member_delete"; ?>',
				type: 'POST',
				data: new FormData(this),
				processData: false,
				contentType: false,
				success: function(data) {
					alert('Delete Successfully !');
					window.location.href = '<?php echo base_url() . "Main"; ?>';
				},
				error: function(data) {
					alert('Something Error !');
				},
			});
		}); */
	</script>
</body>
</html>

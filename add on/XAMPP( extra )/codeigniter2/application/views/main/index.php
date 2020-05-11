<!DOCTYPE html>
<html>
    <head></head>
<body>
	<h3>User</h3>
    <a href="<?php echo base_url() . "Main/add/"; ?>">Add</a>
    <table style="margin-top: 10px;">
        <tr>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <?php foreach($member_list as $row_member){ ?>
			<tr>
				<td><?php echo $row_member->username; ?></td>
				<td><a href="<?php echo base_url() . "Main/edit/" . $row_member->id; ?>">Edit</a>&nbsp;&nbsp;<a href="<?php echo base_url() . "Main/delete/" . $row_member->id; ?>">Delete</a></td>
			</tr>
        <?php } ?>
	</table>
</body>
</html>

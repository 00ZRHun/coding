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
				<a href="<?php echo base_url() . "Main/delete/" . $row_member->id; ?>">
					Delete
				</a>
			</td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html>
    <head></head>
<body>
    <form method="POST" action="<?php echo base_url() . "member_edit"; ?>" id="member_edit">
		<?php foreach($member_data as $row_member_data){ } ?>
		Name : <input type="text" name="name" value="<?php echo $row_member_data->name; ?>" /><br>
		<input type="submit" value="Update" />


		<input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>"> 
	</form>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    $('#member_edit').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '<?php echo base_url() . "member_edit"; ?>',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data) {
                alert('Update Successfully !');
                window.location.href = '<?php echo base_url() . "Main"; ?>';
            },
            error: function(data) {
                alert('Something Error !');
            },
        });
    });
</script>
</body>
</html>

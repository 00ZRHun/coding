<!DOCTYPE html>
<html>
    <head></head>
<body>
    <?php
        if($this->uri->segment(2) == "edit"){
    ?>
    <form method="POST" action="<?php echo base_url() . "year_edit"; ?>" id="year_edit">
	
    <?php foreach($year_data as $row_year_data){ } ?>
    Name : <input type="text" name="name" value="<?php echo $row_year_data->name; ?>" /><br>
	
	<input type="submit" value="Update" />
	
	
	<?php
        }else{
	?>
	<div onload="window.location.href = '<?php echo base_url() . "Main"; ?>';"></div>
    <!-- form method="POST" action="<?php echo base_url() . "year_delete"; ?>" id="year_delete">

    <input type="submit" value="Delete" /> -->
    <?php
        }
    ?>
    <input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>"> 
</form>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    $('#year_edit').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '<?php echo base_url() . "year_edit"; ?>',
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
    /* $('#year_delete').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '<?php echo base_url() . "year_delete"; ?>',
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

<!DOCTYPE html>
<html>
    <head></head>
<body>
    <?php
        if($this->uri->segment(2) == "edit"){
    ?>
    <form method="POST" action="<?php echo base_url() . "member_edit"; ?>" id="member_edit">
    <?php
        }else{
    ?>
    <form method="POST" action="<?php echo base_url() . "member_delete"; ?>" id="member_delete">
    <?php
        }
    ?>
    <?php foreach($member_data as $row_member_data){ } ?>
    Username : <input type="text" name="username" value="<?php echo $row_member_data->username; ?>" /><br>
    <?php
        if($this->uri->segment(2) == "edit"){
    ?>
    <input type="submit" value="Update" />
    <?php
        }else{
    ?>
    <input type="submit" value="Delete" />
    <?php
        }
    ?>
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
    $('#member_delete').submit(function(e) {
        e.preventDefault();

        $.ajax({
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
        });
    });
</script>
</body>
</html>
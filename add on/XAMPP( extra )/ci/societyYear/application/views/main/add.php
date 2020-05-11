<!DOCTYPE html>
<html>
    <head></head>
<body>
<form method="POST" action="<?php echo base_url() . "year_add"; ?>" id="year_add">
    Name : <input type="text" name="name" /><br>
    <input type="submit" value="Add" />
</form>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    $('#year_add').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '<?php echo base_url() . "year_add"; ?>',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data) {
                alert('Add Successfully !');
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

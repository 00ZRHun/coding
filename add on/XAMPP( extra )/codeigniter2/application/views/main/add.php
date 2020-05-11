<!DOCTYPE html>
<html>
    <head></head>
<body>
<form method="POST" action="<?php echo base_url() . "member_add"; ?>" id="member_add">
    Username : <input type="text" name="username" /><br>
    Password : <input type="password" name="password" /><br>
    <input type="submit" value="Add" />
</form>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    $('#member_add').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '<?php echo base_url() . "member_add"; ?>',
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
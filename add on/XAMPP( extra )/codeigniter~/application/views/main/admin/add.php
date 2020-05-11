<div class="container-fluid">
    <form method="POST" action="<?php echo site_url("admin/insert_admin"); ?>" id="form" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Admin</h5>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Username</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="username" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body" style="text-align: center;">
                            <button type="button" onclick="window.location.href='<?php echo base_url() ?>admin'" class="btn btn-success">Back</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </form>
</div>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    $('#form').submit(function(e) {
        e.preventDefault();
        var url = $(form).attr("action");

        $.ajax({
            url: url,
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data) {
                if(data == 1){
                    alert('Username already exist ! ');
                }else{
                    alert('Add Successfully !');
                    window.location.href = '<?php echo base_url() . "admin"; ?>';
                }
            },
            error: function(data) {
                console.log(data);
                alert('Something Error !');
            },
        });
    });
</script>
        
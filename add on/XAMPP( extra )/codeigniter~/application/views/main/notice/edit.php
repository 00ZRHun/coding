<div class="container-fluid">
    <form method="POST" action="<?php echo site_url("notice/update_notice"); ?>" id="form" enctype="multipart/form-data">
<?php foreach($notice as $row_notice){ ?><?php } ?>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Notice</h5>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title" value="<?php echo $row_notice->title; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Content</label>
                            <div class="col-md-9">
                                <!-- <input type="text" class="form-control" name="content" value="<?php echo $row_notice->content; ?>" required> -->
                                <textarea class="form-control" id="summernote" name="content"><?php echo $row_notice->content; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body" style="text-align: center;">
                            <button type="button" onclick="window.location.href='<?php echo base_url() ?>notice'" class="btn btn-success">Back</button>
                            <button type="submit" class="btn btn-primary" name="edit">Submit</button>
                            <input type="hidden" name="id" value="<?php echo $row_notice->serial; ?>">
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
        var url = $(form).attr("action");

        $.ajax({
            url: url,
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data) {
                alert('Update Successfully !');
                window.location.href = '<?php echo base_url() . "notice"; ?>';
            },
            error: function(data) {
                console.log(data);
                alert('Something Error !');
            },
        });
    });
</script>
        
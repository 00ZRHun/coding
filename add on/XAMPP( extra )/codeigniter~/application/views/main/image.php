
<div class="container-fluid">
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Image</h5>
                        <div class="form-group row">
                            <label class="col-md-3">File Upload</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input type="file" onchange="readURL(this);" class="custom-file-input" id="validatedCustomFile" required name="file">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                                <br><br>
                                <img width="180" height="130" id="preview" style="border:1px solid #FFFFFF;" src="<?php echo site_url() ?>img/noimage.png">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body" style="text-align: center;">
                            <button type="button" onclick="window.location.href='<?php echo base_url() ?>Main'" class="btn btn-success">Back</button>
                            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                            <input type="hidden" name="serial" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </form>
</div>
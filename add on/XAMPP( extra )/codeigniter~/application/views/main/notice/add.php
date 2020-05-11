<div class="container-fluid">
    <form method="POST" id="notice_form" action="<?php echo base_url() . 'add_notice'; ?>">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Notice</h5>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title" id="title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Content</label>
                            <div class="col-md-9">
                                <!-- <input type="text" class="form-control" id="content" name="content"> -->
                                <textarea class="form-control" id="summernote" name="content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body" style="text-align: center;">
                            <button type="button" onclick="window.location.href='<?php echo base_url() ?>notice'" class="btn btn-success">Back</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </form>
</div>

        
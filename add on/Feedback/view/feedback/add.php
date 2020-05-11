<div class="container-fluid">
    <form method="POST" action="<?php echo site_url("feedback/insert_feedback"); ?>" id="form" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Feedback</h5>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Student Id</label>
                            <div class="col-md-9">
                                <!-- <input type="text" class="form-control" name="student_id" value="" required> -->
								<select name="student_id" id="student_id">
									<?php foreach($student_id as $row_student_id){ ?>
										<option value="<?= $row_student_id->serial; ?>"><?= $row_student_id->serial; ?></option>
									<?php } ?>
								</select>
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-md-3 m-t-15">Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Description</label>
                            <div class="col-md-9">
                                <textarea type="password" class="form-control" name="description" value="" required></textarea>
                                <!-- <textarea class="form-control" id="summernote" name="description" required></textarea> -->
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body" style="text-align: center;">
                            <button type="button" onclick="window.location.href='<?php echo base_url() ?>feedback'" class="btn btn-success">Back</button>
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
                window.location.href = '<?php echo base_url() . "feedback"; ?>';
				alert('Add Successfully !');
            },
            error: function(data) {
                console.log(data);
                alert('Something Error !');
            },
        });
    });
</script>
        
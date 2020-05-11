<div class="container-fluid">
    <form method="POST" id="feedback_form" action="<?php echo base_url() . 'feedback/insert_reply'; ?>">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Reply</h5>
						<input type="hidden" name="feedback_id" value="<?= $this->uri->segment(3); ?>">
                        <div class="form-group row">
							<label class="col-md-3 m-t-15">Student ID</label>
                            <div class="col-md-9">
                        		<!-- <input type="text" class="form-control" name="student_id" required> -->
								<select name="student_id" id="student_id">
									<?php foreach($student_id as $row_student_id){ ?>
										<option value="<?= $row_student_id->serial; ?>"><?= $row_student_id->serial; ?></option>
									<?php } ?>
								</select>
                            </div>
                            <label class="col-md-3 m-t-15">Reply</label>
                            <div class="col-md-9">
                        		<!-- <input type="text" class="form-control" id="content" name="content"> -->
                                <textarea class="form-control" id="summernote" name="answer"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body" style="text-align: center;">
                            <button type="button" onclick="window.location.href='<?php echo base_url() ?>feedback'" class="btn btn-success">Back</button>
                            <button type="submit" class="btn btn-primary" onclick="alert('Add Successfully !');">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </form>
</div>

<!-- <script>
        $(document).ready(function() {
            $('#feedback_form').submit(function(){
                // e.preventDefault();

                var title = $('#title').val();
				var reply = $('#summernote').val();
				$feedback_id =  $this->uri->segment(3);
				

                $.ajax({
                    url: '<?php echo base_url() . "insert_reply" ?>',
                    type: 'POST',
                    data: {
						title: title;
                        reply: reply,
                    },
                    success: function(data) {
                        if(data == 1){
                            alert('Data already exist !');
                        }else{
                            alert('Add Successfully !' + $feedback_id);
                        }
                    },
                    error: function(data) {
                        alert('Something Error !');
                    },
                });
            });
        });
    </script>      -->

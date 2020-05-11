<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reply List</h5>
                    
                    <br><br>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Count</th>
									<th>Reply</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php 
									$counter = 1;
									foreach($reply as $row_feedback){ 
								?>
                                <tr height="20">
                                    <td><?php echo $counter++; ?></td>
									<td><?php echo $row_feedback->answer; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
						
						<button type="button" onclick="window.location.href='<?php echo base_url() ?>feedback'" class="btn btn-success">Back</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

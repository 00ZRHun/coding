<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feedback List</h5>
                    <a href="<?php echo base_url() ?>feedback/add" class="btn btn-app btn-success">
                        <i class="fa fa-edit"></i><br> Add feedback
                    </a>
                    <br><br>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Feedback ID</th>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Title</th>
									<th>Message</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($feedback as $row_feedback){ ?>
                                <tr height="20">
                                    <td><?php echo $row_feedback->serial; ?></td>
                                    <td><?php echo $row_feedback->student_id; ?></td>
                                    <td><?php echo $row_feedback->name; ?></td>
									<td><?php echo $row_feedback->title; ?></td>
                                    <td><?php echo $row_feedback->description; ?></td>
                                    <td>
										<a href="<?php echo base_url() ?>feedback/list_reply/<?php echo $row_feedback->serial; ?>" class="btn btn-sm btn-success">
                                            <i class="halflings-icon white white arrow-down"></i> View</a>
										<a href="<?php echo base_url() ?>feedback/reply/<?php echo $row_feedback->serial; ?>" class="btn btn-sm btn-success">
                                            <i class="halflings-icon white white arrow-down"></i> Reply</a>
                                        <a href="<?php echo base_url() ?>feedback/delete/<?php echo $row_feedback->serial; ?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-sm btn-danger">
                                            <i class="halflings-icon white white arrow-down"></i> Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

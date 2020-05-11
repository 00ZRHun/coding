
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Notice List</h5>
                    <a href="<?php echo base_url() ?>notice/add" class="btn btn-app btn-success">
                        <i class="fa fa-edit"></i><br> Add Notice
                    </a>
                    <br><br>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($notice as $row_notice){ ?>
                                <tr height="20">
                                    <td><?php echo $row_notice->title; ?></td>
                                    <td><?php echo $row_notice->content; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>notice/edit/<?php echo $row_notice->serial; ?>" class="btn btn-sm btn-success">
                                            <i class="halflings-icon white white arrow-down"></i> Edit</a>
                                        <a href="<?php echo base_url() ?>notice/delete/<?php echo $row_notice->serial; ?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-sm btn-danger">
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
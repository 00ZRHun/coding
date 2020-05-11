
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Admin List</h5>
                    <a href="<?php echo base_url() ?>admin/add" class="btn btn-app btn-success">
                        <i class="fa fa-edit"></i><br> Add Admin
                    </a>
                    <br><br>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Create Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($admin as $row_admin){ ?>
                                <tr height="20">
                                    <td><?php echo $row_admin->username; ?></td>
                                    <td><?php echo $row_admin->post_date; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>admin/delete/<?php echo $row_admin->serial; ?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-sm btn-danger">
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
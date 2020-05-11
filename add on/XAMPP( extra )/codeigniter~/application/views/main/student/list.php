
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Student List</h5>
                    <a href="<?php echo base_url() ?>student/add" class="btn btn-app btn-success">
                        <i class="fa fa-edit"></i><br> Add Student
                    </a>
                    <br><br>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:20%;">Image</th>
                                    <th>Name</th>
                                    <th>Student ID</th>
                                    <th>Contact</th>
                                    <th>Point</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr height="20">
                                    <td>
                                        <img width="150" src="" alt="" class="img-responsive" />
                                    </td>
                                    <td>Tan Jung Hao</td>
                                    <td>D170303B</td>
                                    <td>01163304834</td>
                                    <td>20</td>
                                    <td>
                                        <a href="<?php echo base_url() ?>student/edit" class="btn btn-sm btn-success">
                                            <i class="halflings-icon white white arrow-down"></i> Edit</a>
                                        <a href="" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-sm btn-danger">
                                            <i class="halflings-icon white white arrow-down"></i> Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
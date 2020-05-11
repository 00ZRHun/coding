<div class="container-fluid">
    <form method="POST" action="" id="" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Student</h5>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Student ID</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Batch</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Level</label>
                            <div class="col-md-9">
                                <select class="form-control" required>
                                    <option value="1">Diploma</option>
                                    <option value="2">Degree</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Programme</label>
                            <div class="col-md-9">
                                <select class="form-control" required>
                                    <option value="">Programme</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Contact</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 m-t-15">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="" required>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body" style="text-align: center;">
                            <button type="button" onclick="window.location.href='<?php echo base_url() ?>student'" class="btn btn-success">Back</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </form>
</div>
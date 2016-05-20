<form action="../control/control.admin.addStudent.php" method="POST">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">New Student</h4>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>รหัสประจำตัว / Student ID</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input class="form-control" name="idstudent"> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>Title Name</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input class="form-control" type="text" name="titlename"> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>ชื่อ /  Name</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input class="form-control" type="text" name="nametstudent"> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>นามสกุล / Surname</label>
                        </div>
                        <div class="form-group col-lg-6">
                            <input class="form-control" type="text" name="snamestudent">                                
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>ชื่อบัญชีผู้ใช้ / Username</label>
                        </div>
                        <div class="form-group col-lg-6">
                            <input class="form-control"type="text" name="username">                                   
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>รหัส / Password</label>
                        </div>
                        <div class="form-group col-lg-6">
                            <input class="form-control" type="password" name="password">                                   
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (nested) -->
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>





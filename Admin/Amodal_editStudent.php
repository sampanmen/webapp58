<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="gridSystemModalLabel">Edit Student</h4>
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
                        <p>5520502978</p> 
                    </div>
                </div>

                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>ชื่อ /  Name</label>
                    </div>
                    <div class="form-group col-lg-6"> 
                         <p>ธิดารัตน์</p> 
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>นามสกุล / Surname</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <p>ช้างแก้ว</p>                              
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>ชื่อบัญชีผู้ใช้ / Username</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <input class="form-control" name="username">                                   
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
                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>สถานะ / status</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <select class="form-control" name="statusieacher" id="statusTeacher">
                            <option selected value="1">Active</option>
                            <option value="2">No Active</option>
                        </select>    
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




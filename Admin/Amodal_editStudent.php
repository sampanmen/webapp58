<form action="../control/control.admin.editStudent.php" method="POST">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel"><?= $_GET['userid'] ?></h4>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>รหัสประจำตัว</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <p><?= $_GET['userid'] ?></p>
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>ชื่อบัญชีผู้ใช้</label>
                        </div>
                        <div class="form-group col-lg-6">
                            <p id="username"></p>                                  
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>คำนำหน้าชื่อ</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input type="text" class="form-control" name="titlename" id="titlename"> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>ชื่อ</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input type="text" class="form-control" name="name" id="name"> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>นามสกุล</label>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="sname" id="sname">                             
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>ตำแหน่ง</label>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="position" id="position" readonly="true">                                
                        </div>
                    </div>

                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>สถานะ</label>
                        </div>
                        <div class="form-group col-lg-6">
                            <select class="form-control" name="status" id="status">
                                <option selected value="active">Active</option>
                                <option value="deactive">Deactive</option>
                            </select>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (nested) -->
        </div>
    </div>
    <div class="modal-footer">
        <input type="hidden" name="roomid" value="<?= $_GET['roomid'] ?>">
        <input type="hidden" name="userid" value="<?= $_GET['userid'] ?>">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>
<script>
    var url = "../control/control.admin.getTeacher.php?teacherid=<?= $_GET['userid'] ?>";
    $.post(url, function (data) {
        var jsonData = jQuery.parseJSON(data);
        $("#username").html(jsonData['username']);
        $("#titlename").val(jsonData['titleName']);
        $("#name").val(jsonData['name']);
        $("#sname").val(jsonData['surname']);
        $("#position").val(jsonData['position']);
    });
</script>
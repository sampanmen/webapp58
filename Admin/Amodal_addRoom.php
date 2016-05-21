<form action="../control/control.admin.addRoom.php" method="POST">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">เพิ่มห้องเรียน</h4>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
            <div class="panel-body">
                <div class="row">                 
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>ชื่อห้อง /  Name Room</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input class="form-control" name="nameroom"> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>อาจารย์ประจำชั้น</label>
                        </div>
                        <div class="form-group col-lg-6">
                            <select class="form-control" name="nameteacher">
                                <option value="1" selected="">Nutchanart Sattayakawee</option>
                                <option value="2">Kairat Jareanra</option>
                            </select>  

                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>

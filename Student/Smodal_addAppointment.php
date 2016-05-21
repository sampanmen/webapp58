<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="gridSystemModalLabel">เพิ่มการนัดหมาย</h4>
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
                        <label>ชื่อ /  Name</label>
                    </div>
                    <div class="form-group col-lg-6"> 
                        <input class="form-control" name="namestudent"> 
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>นามสกุล / Surname</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <input class="form-control" name="namestudent">                         
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>ชั้น/ปี/ Year/Room</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <input class="form-control" name="yearroomstudent">                         
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>เวลานัดหมาย/ Time Appointment</label>
                    </div>

                </div>
                <div class="col-lg-12">  
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Start-Time</th>
                                    <th>End-Time</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="col-md-5"style="margin-left: 0;padding: 0;" >
                                            <div class='input-group date' >
                                                <input type='date' class="form-control" data-provide="datepicker" id="appdatepicker" name="appdatepicker" onkeydown="return false"/>
                                            </div>                                                                            
                                        </div>
                                    </td>
                                    <td><input type="time" class="form-control" name="startime"> </td>
                                    <td><input type="time" class="form-control" name="endtime"> </td>

                                </tr>                                                     

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-12">  
                    <div class="col-lg-12">                                           
                        <label>หัวข้อ / Title</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <input class="form-control" name="titlestudent">                         
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-12">                                           
                        <label>เนื้อหา / Content</label>
                    </div>
                    <div class="form-group col-lg-12">
                        <textarea class="form-control" name="titlestudent">
                        </textarea>
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





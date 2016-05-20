<form action="../control/control.admin.addSubject.php" method="POST">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="gridSystemModalLabel">New Subject</h4>
</div>
<div class="modal-body">
    <div class="container-fluid">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>รหัสวิชา / ID</label>
                    </div>
                    <div class="form-group col-lg-6"> 
                        <input class="form-control" name="idsubject"> 
                    </div>
                </div>

                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>ชื่อวิชา / Subject Name</label>
                    </div>
                    <div class="form-group col-lg-6"> 
                        <input class="form-control" name="namesubject"> 
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>ชื่อผู้สอน / Teacher Name</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <select multiple class="form-control" name="nameteacher">
                            <option selected value="1">Nutchanart Sattayakawee</option>
                            <option value="2">kayrat Jareanrat</option>
                        </select>                            
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>เวลาสอน / Time</label>
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
                                    <th>Year/Room</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class="form-control" name="date">
                                            <option value="1" selected="">Monday</option>
                                            <option value="2">Tuesday</option>
                                            <option value="3">Wednesday</option>
                                            <option value="4">Thursday</option>
                                            <option value="5">Friday</option>
                                            <option value="6">Saturday</option>
                                            <option value="7">Sunday</option>
                                        </select>  
                                    </td>
                                    <td><input type="time" class="form-control" name="startime"> </td>
                                    <td><input type="time" class="form-control" name="endtime"> </td>
                                    <td>
                                        <select class="form-control" name="room">
                                            <option value="1" selected="">ป.1/1</option>
                                            <option value="2">ป.1/2</option>
                                            <option value="3">ป.2/1</option>
                                            <option value="4">ป.2/2</option>
                                            <option value="5">ป.3/1</option>
                                            <option value="6">ป.3/2</option>
                                            <option value="7">ป.4/1</option>
                                            <option value="8">ป.4/2</option>
                                            <option value="9">ป.5/1</option>
                                            <option value="10">ป.5/2</option>
                                            <option value="11">ป.6/1</option>
                                            <option value="12">ป.6/2</option>
                                        </select>  
                                    </td>
                                    <td><button class="btn btn-circle glyphicon-plus"></button></td>

                            </tr>                                                     

                            </tbody>
                        </table>
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





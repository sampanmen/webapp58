<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ตารางแสดงการสอน เสร็จแล้ว <button class="btn btn-circle glyphicon-plus" href="Smodal_addAppointment.php" data-toggle="modal" data-target="#myModal"></button></h1>
            </div>
            <div>
                <div class="col-lg-12">  
                    <div class="col-lg-2">                                           
                        <label>ชื่อวิชา / Subject Name</label>
                    </div>
                    <div class="form-group col-lg-6"> 
                        <p>Web App</p> 
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-2">                                           
                        <label>ผู้สอน / Teacher</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <p>ผศ.นุชนาฎ   สัตยากวี</p>                              
                    </div>
                </div>
                <table class="calendar table table-bordered">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th colspan="2">08:00-09:00</th>        
                            <th colspan="2">09:00-10:00</th>
                            <th colspan="2">10:00-11:00</th>
                            <th colspan="2">11:00-12:00</th>
                            <th colspan="2">12:00-13:00</th>
                            <th colspan="2">13:00-14:00</th>
                            <th colspan="2">14:00-15:00</th>
                            <th colspan="2">15:00-16:00</th>
                            <th colspan="2">16:00-17:00</th>
                        </tr>
                    </thead>
                    <tbody id='detailSchedule'>

                    </tbody>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<form action="../control/control.student.addAppointment.php" method="POST">
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
                                            <div class="col-md-5" >
                                                <div class='input-group' >
                                                    <input type='date' class="form-control" name="date" required="true"/>
                                                </div>                                                                            
                                            </div>
                                        </td>
<!--                                        <td><input type="time" class="form-control" name="startime" id="startime" required="true"> </td>
                                        <td><input type="time" class="form-control" name="endtime" id="endtime" required="true"> </td>-->

                                        <td>
                                            <select class="form-control" name="startime" id="startime" required="true">
                                                <?php
                                                for ($i = 8; $i <= 16; $i++) {
                                                    ?>
                                                    <option value="<?= $i < 10 ? '0' . $i : $i ?>:00"><?= $i < 10 ? '0' . $i : $i ?>:00น.</option>
                                                    <option value="<?= $i < 10 ? '0' . $i : $i ?>:30"><?= $i < 10 ? '0' . $i : $i ?>:30น.</option>
                                                <?php } ?>
                                                <option value="17:00">17:00น.</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="endtime" id="startime" required="true">
                                                <?php
                                                for ($i = 8; $i <= 16; $i++) {
                                                    ?>
                                                    <option value="<?= $i < 10 ? '0' . $i : $i ?>:00"><?= $i < 10 ? '0' . $i : $i ?>:00น.</option>
                                                    <option value="<?= $i < 10 ? '0' . $i : $i ?>:30"><?= $i < 10 ? '0' . $i : $i ?>:30น.</option>
                                                <?php } ?>
                                                <option value="17:00">17:00น.</option>
                                            </select>
                                        </td>
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
                            <input class="form-control" name="title" required="true">                         
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-12">                                           
                            <label>เนื้อหา / Content</label>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea class="form-control" name="content" required="true"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (nested) -->
        </div>
    </div>
    <div class="modal-footer">
        <?php //session_start(); ?>
        <input type="hidden" name="subjectid" value="<?= $_GET['subjectid'] ?>">
        <input type="hidden" name="userid" value="<?= $_GET['userid'] ?>">
        <input type="hidden" name="stdid" value="<?= $_SESSION['idUser'] ?>">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>


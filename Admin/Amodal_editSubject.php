
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="gridSystemModalLabel"><?= $_GET['subjectid'] ?></h4>
</div>
<div class="modal-body">
    <div class="container-fluid">
        <div class="panel-body">
            <div class="row">
<!--                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>วิชา</label>
                    </div>
                    <div class="form-group col-lg-6"> 
                        <p>Wep App (fix)</p>
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-6">                                           
                        <label>อาจารย์ผู้สอน</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <p>ฝศ.นุชนาฎ สัตยากวี (fix)</p>
                    </div>
                </div> -->
                <div class="col-lg-12" id="itemIN">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>เวลาที่สอน </b>
                        </div>
                        <div class="col-lg-12">  
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables">
                                    <thead>
                                        <tr>
                                            <th>วัน</th>
                                            <th>เวลาเริ่มสอน</th>
                                            <th>เวลาที่สินสุด</th>
                                            <th>ชั้นที่สอน</th>
                                            <th>สถานที่</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbItem">
                                        <!--show item-->
                                    </tbody>
                                    <script>
                                        var url = "../control/control.student.getScheduleDetail.php";
                                        $.post(url, {subjectid: '<?= $_GET['subjectid'] ?>'}, function (data) {
                                            var jsonData = jQuery.parseJSON(data);
                                            var i = 0;
                                            for (var key in jsonData) {
                                                i++;
                                                var t = "<tr>";
                                                t = t + "<td>" + jsonData[key]['daySche'] + "</td>";
                                                t = t + "<td>" + jsonData[key]['startTimeSche'] + "</td>";
                                                t = t + "<td>" + jsonData[key]['endTimeSche'] + "</td>";
                                                t = t + "<td>" + jsonData[key]['groupLearn'] + "</td>";
                                                t = t + "<td>" + jsonData[key]['roomSche'] + "</td>";
                                                t = t + "</tr>";
                                                $("#tbItem").append(t);
                                            }
                                            //console.log($("#tbody").html());
                                            $('#dataTables-student').DataTable({
                                                responsive: true
                                            });
                                        });

                                        url = "";
                                        $.post(url, {}, function (data) {
                                        
                                        });
                                    </script>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <!--<button type="submit" class="btn btn-primary">Save</button>-->
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

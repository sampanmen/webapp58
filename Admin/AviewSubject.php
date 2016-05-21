<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">วิชาที่เปิดในภาคการศึกษานี้<button class="btn btn-circle glyphicon-plus" href="Amodal_addSubject.php" data-toggle="modal" data-target="#myModal1-lg"></button></h1>
            
            
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-AviewSubject">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับ</th>
                                        <th>รหัสวิชา</th>
                                        <th>ชื่อวิชา</th>
                                        <th>ครูผู้สอน</th>
                                        <th>รายละเอียด</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyASubject">

                                </tbody>
                            </table>
                            <script>
                                var url = "../control/control.admin.getTeacher.php";
                                $.post(url, function (data) {
                                    var jsonData = jQuery.parseJSON(data);
                                    var i = 1;
                                    for (var key in jsonData) {
                                        var t = "<tr>";
                                        t = t + "<td class='text-center' >" + i + "</td>";
                                        t = t + "<td >" + jsonData[key]['idUser'] + "</td>";
                                        t = t + "<td >" + jsonData[key]['titleName'] + jsonData[key]['name'] + "</td>";
                                        t = t + "<td >" + jsonData[key]['surname'] + "</td>";
                                        t = t + "<td >" + jsonData[key]['position'] + "</td>";
                                        t = t + "<td class='text-center'><label class='label label-" + (jsonData[key]['status'] == "active" ? 'success' : 'danger') + "'>" + jsonData[key]['status'] + "</label></td>"
                                        t = t + "<td><button class='btn btn-circle glyphicon-pencil' href='Amodal_editTeacher.php?userid='" + jsonData[key]['idUser'] + " data-toggle='modal' data-target='#myModal2'></button></td>";
                                        t = t + "</tr>";
                                        i++;
                                        $("#tbodyASubject").append(t);
                                    }
                                    //console.log($("#tbody").html());
                                    $('#dataTables-AviewSubject').DataTable({
                                        responsive: true
                                    });
                                });
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




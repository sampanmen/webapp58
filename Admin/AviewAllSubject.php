<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">วิชาเรียน <button class="btn btn-circle glyphicon-plus" href="Amodal_addAllSubject.php" data-toggle="modal" data-target="#myModal"></button></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-AviewAllSubject">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับที่</th>
                                        <th>รหัสวิชา</th>
                                        <th>ชื่อวิชา</th>
                                        <th>รายละเอียด</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyAAllSubject">

                                </tbody>
                            </table>

                            <script>
                                var url = "../control/control.admin.getSubject.php";
                                $.post(url, function (data) {
                                    var jsonData = jQuery.parseJSON(data);
                                    var i = 1;
                                    for (var key in jsonData) {
                                        var t = "<tr>";
                                        t = t + "<td class='text-center'>" + i + "</td>";
                                        t = t + "<td >" + jsonData[key]['idSubject'] + "</td>";
                                        t = t + "<td>" + jsonData[key]['nameSubject'] + "</td>";
                                        t = t + "<td><button class='btn btn-default'><a href='../Admin/Amodal_editAllSubject?subjectid=" + jsonData[key]['idSubject'] + "' >รายละเอียด</a></button></td>";
                                        t = t + "</tr>";
                                        i++;
                                        $("#tbodyAAllSubject").append(t);
                                        
                                    }
                                    //console.log($("#tbody").html());
                                    $('#dataTables-AviewAllSubject').DataTable({
                                        responsive: true
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




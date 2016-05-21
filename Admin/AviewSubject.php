<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">วิชาที่เปิด เทอม <?= $_GET['term'] ?> ปี <?= $_GET['year'] ?>  <button class="btn btn-circle glyphicon-plus" href="Amodal_addSubject.php" data-toggle="modal" data-target="#myModal1-lg"></button></h1>
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
                                <tbody id="tbodyAviewSubject">

                                </tbody>
                            </table>
                            <script>
                                var url = "../control/control.admin.getSubject.php?term=<?= $_GET['term'] ?>&year=<?= $_GET['year'] ?>";
                                $.post(url, function (data) {
                                    var jsonData = jQuery.parseJSON(data);
                                    var i = 1;
                                    for (var key in jsonData) {
                                        var t = "<tr>";
                                        t = t + "<td class='text-center' >" + i + "</td>";
                                        t = t + "<td >" + jsonData[key]['idSubject'] + "</td>";
                                        t = t + "<td >" + jsonData[key]['nameSubject'] + "</td>";
                                        t = t + "<td >" + jsonData[key]['titleName'] + jsonData[key]['name'] + jsonData[key]['surname'] + "</td>";
                                        t = t + "<td><button class='btn btn-circle glyphicon-pencil' href='Amodal_editSubject.php?userid='" + jsonData[key]['idSubject'] + " data-toggle='modal' data-target='#myModal2'></button></td>";
                                        t = t + "</tr>";
                                        i++;
                                        $("#tbodyAviewSubject").append(t);
                                    }
                                    //console.log($("#tbody").html());
                                    $('#dataTables-AviewSubject').DataTable({
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




<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">สรุปผลการนัดหมาย </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-SsumAppoint">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับที่</th>
                                        <th>วิชา</th>
                                        <th>หัวข้อ</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>ชั้น/ปี</th>
                                        <th>วันที่</th>
                                        <th>สถานะ</th>
                                        <th>รายละเอียด</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="tbodysumAppoint">

                                </tbody>
                            </table>
                            <script>
                                var url = "../control/control.teacher.getConcludeAppointment.php";
                                $.post(url, {teacherid: '<?= $_SESSION['idUser'] ?>'}, function (data) {
                                    var jsonData = jQuery.parseJSON(data);
                                    //alert(jsonData);
                                    var i = 1;
                                    for (var key in jsonData) {
                                        var t = "<tr>";
                                        t = t + "<td class='text-center'>" + i + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['nameSubject'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['topicApp'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['titleName'] + jsonData[key]['name'] + " " + jsonData[key]['surname'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['startDateTimeApp'] + " - " + jsonData[key]['endDateTimeApp'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['statusApp'] + "</td>";
                                        t = t + "<td>" + jsonData[key]['detailApp'] + "</td>";
                                        t = t + "<td>" + '<button class="btn btn-sm btn-info" href="Tmodal_approve.php?idappointment=' + jsonData[key]['idAppointment'] + '" data-toggle="modal" data-target="#myModal">Edit</button>' + "</td>";
                                        t = t + "</tr>";
                                        i++;
                                        $("#tbodysumAppoint").append(t);

                                    }
                                    //console.log($("#tbody").html());
                                    $('#dataTables-SsumAppoint').DataTable({
                                        responsive: true
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div
</div>


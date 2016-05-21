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
                                        <th class="text-center">ลำดับ<th>
                                        <th>หัวข้อ</th>
                                        <th>วิชา</th>
                                        <th>ครูผู้สอน</th>
                                        <th>วันที่/เวลา</th>
                                        <th>สถานะ</th>
                                        <th>รายละเอียด</th>
                                    </tr>
                                </thead>
<!--                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Project</td>
                                        <td>Webapp</td>
                                        <td>Nutchanart Sattayakawee</td>
                                        <td> 26/04/59 10.30-12.00</td>
                                        <td class="text-center"><label class="label label-warning" href="">Wait</label></td>
                                    </tr>     
                                </tbody>
                            </table>-->
                                <tbody id="tbodysumAppoint">

                                </tbody>
                            </table>

                            <script>
                                var url = "../control/control.admin.getRoom.php";
                                $.post(url, function (data) {
                                    var jsonData = jQuery.parseJSON(data);
                                    var i = 1;
                                    for (var key in jsonData) {
                                        var t = "<tr>";
                                        t = t + "<td class='text-center'>" + i + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
                                        t = t + "<td class='text-center'><label class='label label-" + (jsonData[key]['status'] == "active" ? 'success' : 'danger') + "'>" + jsonData[key]['status'] + "</label></td>"
                                        t = t + "<td><button class='btn btn-default'><a href='../Admin/AviewStudent.php?roomid=" + jsonData[key]['idClass'] + "' >รายละเอียด</a></button></td>";
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


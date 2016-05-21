<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ห้องเรียน <button class="btn btn-circle glyphicon-plus" href="Amodal_addRoom.php" data-toggle="modal" data-target="#myModal"></button></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-ARoom">
                                <thead>
                                    <tr>
                                        <th>ห้องเรียน</th>
                                        <th>ครูประจำชั้น</th>
                                        <th>รายละเอียด</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyRoom">

                                </tbody>
                            </table>

                            <script>
                                var url = "../control/control.admin.getRoom.php";
                                $.post(url, function (data) {
                                    var jsonData = jQuery.parseJSON(data);
                                    for (var key in jsonData) {
                                        var t = "<tr>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
                                        t = t + "<td>" + jsonData[key]['titlename'] + jsonData[key]['name'] + " " + jsonData[key]['surname'] + "</td>";
                                        t = t + "<td><button class='btn btn-default'><a href='../Admin/AviewStudent.php?roomid=" + jsonData[key]['idClass'] + "' >รายละเอียด</a></button></td>";
                                        t = t + "</tr>";

                                        $("#tbodyRoom").append(t);
                                    }
                                    //console.log($("#tbody").html());
                                    $('#dataTables-ARoom').DataTable({
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


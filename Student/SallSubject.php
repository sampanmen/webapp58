<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">รายวิชาที่ลงทะเบียน </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-SallSubject">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับที่</th>
                                        <th>รหัสวิชา</th>
                                        <th>ชื่อวิชา</th>
                                        <th>ครูผู้สอน</th>
                                        <th>สถานะ</th>
                                        <th>การนัดหมาย</th>
                                    </tr>
                                </thead>
<!--                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>02204445</td>
                                        <td>Web App</td>
                                        <td>Nutchanart Sattayakawee</td>
                                        <td class="text-center"><label class="label label-success" href="">Open</label></td>
                                        <td><input class="btn btn-default" type="button" value="Appointment" onclick="window.location.href = '../Student/Steachingschedule.php'"></td>
                                    </tr>     
                                </tbody>
                            </table>-->

                                <tbody id="tbodySubject">

                                </tbody>
                            </table>

                            <script>
                                var url = "../control/control.admin.getRoom.php";
                                $.post(url, function (data) {
                                    var jsonData = jQuery.parseJSON(data);
                                    var i=1;
                                    for (var key in jsonData) {
                                        var t = "<tr>";
                                        t = t + "<td class='text-center'>" + i + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
                                        t = t + "<td>" + jsonData[key]['titlename'] + jsonData[key]['name'] + " " + jsonData[key]['surname'] + "</td>";
                                        t = t + "<td><button class='btn btn-default'><a href='../Student/Steachingschedule.php' >รายละเอียด</a></button></td>";
                                        t = t + "</tr>";
                                        i++;
                                        $("#tbodySubject").append(t);
                                        
                                    }
                                    //console.log($("#tbody").html());
                                    $('#dataTables-SallSubject').DataTable({
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






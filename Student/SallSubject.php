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
                                        <th>การนัดหมาย</th>
                                    </tr>
                                </thead>

                                <tbody id="tbodySubject">

                                </tbody>
                            </table>
                            <script>
                                var url = "../control/control.admin.getSubject.php?studentid=<?= $_SESSION['idUser'] ?>";
                                $.post(url, function (data) {
                                    var jsonData = jQuery.parseJSON(data);
                                    var i = 1;
                                    for (var key in jsonData) {
                                        var t = "<tr>";
                                        t = t + "<td class='text-center'>" + i + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['idSubject'] + "</td>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['nameSubject'] + "</td>";
                                        t = t + "<td>" + jsonData[key]['titleName'] + jsonData[key]['name'] + " " + jsonData[key]['surname'] + "</td>";
                                        t = t + "<td class='text-center'><button class='btn btn-default'><a href='../Student/Steachingschedule.php?subjectid=" + jsonData[key]['idSubject'] + "&userid=" + jsonData[key]['idUser'] + "&teachingid=" + jsonData[key]['idTeaching'] + "' >นัดหมาย</a></button></td>";
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






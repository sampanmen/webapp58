<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ห้อง ป.6/3 <button class="btn btn-circle glyphicon-plus" href="Amodal_addStudent.php?roomid=<?= $_GET['roomid']; ?>" data-toggle="modal" data-target="#myModal"></button></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-student">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>ID Student</th>
                                        <th>Title Name</th>
                                        <th>Student Name</th>
                                        <th>Student Surname</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">

                                </tbody>
                            </table>

                            <script>
                                var url = "../control/control.admin.getStudent.php";
                                $.post(url,{roomid:<?=$_GET['roomid']?>}, function (data) {
                                    var jsonData = jQuery.parseJSON(data);
                                    var i = 0;
                                    for (var key in jsonData) {
                                        i++;
                                        var t = "<tr>";
                                        t = t + "<td class='text-center'>" + i + "</td>";
                                        t = t + "<td>" + jsonData[key]['idUser'] + "</td>";
                                        t = t + "<td>" + jsonData[key]['titleName'] + "</td>";
                                        t = t + "<td>" + jsonData[key]['name'] + "</td>";
                                        t = t + "<td>" + jsonData[key]['surname'] + "</td>";
                                        t = t + "<td>" + jsonData[key]['username'] + "</td>";
                                        t = t + "<td class='text-center'><label class='label label-" + (jsonData[key]['status'] == "active" ? 'success' : 'danger') + "'>" + jsonData[key]['status'] + "</label></td>"
                                        t = t + "<td><button class='btn btn-circle glyphicon-pencil' href='Amodal_editStudent.php?userid=" + jsonData[key]['idUser'] + "&roomid=<?= $_GET['roomid']; ?>' data-toggle='modal' data-target='#myModal2'></button></td>";
                                        t = t + "</tr>";
                                        $("#tbody").append(t);
                                    }
                                    //console.log($("#tbody").html());
                                    $('#dataTables-student').DataTable({
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



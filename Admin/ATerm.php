<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ปีการศึกษา <button class="btn btn-circle glyphicon-plus" href="Amodal_addTerm.php" data-toggle="modal" data-target="#myModal"></button></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-ATerm">
                                <thead>
                                    <tr>
                                        <th>ปีการศึกษา</th>
                                        <th>ภาคการเรียน</th>
                                        <th>รายละเอียด</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyTerm">

                                </tbody>
                            </table>
                            <script>
                                var url = "../control/control.admin.getTerm.php";
                                $.post(url, function (data) {
                                    var jsonData = jQuery.parseJSON(data);
                                    for (var key in jsonData) {
                                        var t = "<tr>";
                                        t = t + "<td class='text-center'>" + jsonData[key]['yearTerm'] + "</td>";
                                        t = t + "<td>" + jsonData[key]['term'] + "</td>";
                                        t = t + "<td><button class='btn btn-default'><a href='../Admin/AviewSubject.php?termid=" + jsonData[key]['idTerm'] +"&term="+ jsonData[key]['term']+"&year="+ jsonData[key]['yearTerm']+ "' >รายละเอียด</a></button></td>";
                                        t = t + "</tr>";
                                        $("#tbodyTerm").append(t);
                                    }
                                    //console.log($("#tbody").html());
                                    $('#dataTables-ATerm').DataTable({
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


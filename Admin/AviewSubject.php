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
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับ</th>
                                        <th>รหัสวิชา</th>
                                        <th>ชื่อวิชา</th>
                                        <th>ครูผู้สอน</th>
                                        <th>รายละเอียด</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>02204445</td>
                                        <td>Web App</td>
                                        <td>Nutchanart Sattayakawee</td>
                                        <td><button class="btn btn-default" href="Amodal_editSubject.php" data-toggle="modal" data-target="#myModal2-lg">รายละเอียด</button></td>
                                    </tr>     
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




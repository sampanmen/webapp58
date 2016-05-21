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
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับที่</th>
                                        <th>วิชา</th>
                                        <th>ชื่อ-นามสกุล</th>\
                                        <th>ชั้น/ปี</th>
                                        <th>วันที่</th>
                                        <th>เวลา</th>
                                        <th>สถานะ</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Webapp</td>
                                        <td>ธิดารัตน์ ช้างแก้ว</td>
                                        <td>6/3</td>
                                        <td> 26/04/59 </td>
                                         <td>10.30-12.00 </td>
                                        <td class="text-center"><button class="btn btn-warning" href="Tmodal_approve.php" data-toggle="modal" data-target="#myModal">Wait</button></td>
                                    </tr>     
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div
</div>


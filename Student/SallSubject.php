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
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับที่</th>
                                        <th>ID Subject</th>
                                        <th>Subject Name</th>
                                        <th>Teacher</th>
                                        <th>Status</th>
                                        <th>Appointment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>02204445</td>
                                        <td>Web App</td>
                                        <td>Nutchanart Sattayakawee</td>
                                        <td class="text-center"><label class="label label-success" href="">Open</label></td>
                                        <td><input class="btn btn-default" type="button" value="Appointment" onclick="window.location.href = '../Student/Steachingschedule.php'"></td>
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
</div>





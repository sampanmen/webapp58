<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
               <h1 class="page-header">ห้อง ป.6/3 <button class="btn btn-circle glyphicon-plus" href="Amodal_addStudent.php" data-toggle="modal" data-target="#myModal"></button></h1>
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
                                        <th class="text-center">No.</th>
                                        <th>ID Student</th>
                                        <th>Student Name</th>
                                        <th>Student Surname</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>5520502978</td>
                                        <td>ธิดารัตน์</td>
                                        <td>ช้างแก้ว</td>
                                        <td>newnewness</td>
                                        <td>123456</td>
                                        <td class="text-center"><label class="label label-success" href="">active</label></td>
                                        <td><button class="btn btn-circle glyphicon-pencil" href="..\AppointmentSchool\Amodal_editStudent.php" data-toggle="modal" data-target="#myModal2"></button></td>
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



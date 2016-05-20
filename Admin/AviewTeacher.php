<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All Teacher <button class="btn btn-circle glyphicon-plus" href="Amodal_addTeacher.php" data-toggle="modal" data-target="#myModal-addteacher"></button></h1>
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
                                        <th>ID Teacher</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>000001</td>
                                        <td>Nutchanart</td>
                                        <td>Sattayakawee</td>
                                        <td>Teacher</td>
                                        <td class="text-center"><label class="label label-success" href="">work</label></td>
                                        <td><button class="btn btn-circle glyphicon-pencil" href="Amodal_editStudent.php" data-toggle="modal" data-target="#myModal-editstudent"></button></td>
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
<div class="modal fade" id="myModal-addteacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>
<div class="modal fade" id="myModal-editstudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>



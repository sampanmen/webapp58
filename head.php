<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Appoint School </title>
        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <!-- DataTables CSS -->
        <!--        <link href="../bower_components/datatables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <!--        <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">-->
        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
        <!--Calendar CSS-->
        <link href="../css/calendar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <!--                                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>-->
                    <?php if ($_SESSION['permission'] == "admin") { ?>
                        <a class="navbar-brand" href="ATerm.php">การนัดหมายคุณครู</a><?php } ?>
                    <?php if ($_SESSION['permission'] == "student") { ?>
                        <a class="navbar-brand" href="SallSubject.php">การนัดหมายคุณครู</a><?php } ?>
                    <?php if ($_SESSION['permission'] == "teacher") { ?>
                        <a class="navbar-brand" href="">การนัดหมายคุณครู</a><?php } ?>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> ข้อมูลผู้ใช้</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="/webapp58/control/control.logout.php"><i class="fa fa-sign-out fa-fw"></i> ออกจากระบบ</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!--ADMIN-->
                <?php if ($_SESSION['permission'] == "admin") { ?>
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="ATerm.php"><i class="fa fa-book fa-fw"></i> ปีการศึกษา</a>
                                </li>
                                <li>
                                    <a href="AviewSubject.php"><i class="fa fa-book fa-fw"></i> วิชา</a>
                                </li>
                                <li>
                                    <a href="AviewTeacher.php"><i class="fa fa-university fa-fw"></i> คุณครู</a>
                                </li>
                                <li>
                                    <a href="ARoom.php"><i class="fa fa-graduation-cap fa-fw"></i> นักเรียน</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <?php
                }
                if ($_SESSION['permission'] == "student") {
                    ?>
                    <!--STUDENT-->
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">

                                <li>
                                    <a href="SallSubject.php"><i class="fa fa-dashboard fa-fw"></i> รายวิชาที่ลงทะเบียน </a>
                                </li>
                                <li>
                                    <a href="SsummeryAppoint.php"><i class="fa fa-table fa-fw"></i> สรุปผลการนัดหมาย</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
                if ($_SESSION['permission'] == "teacher") {
                    ?>
                    <!--TEACHER-->
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href=""><i class="fa fa-book fa-fw"></i> ตารางแสดงการนัดหมาย</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-book fa-fw"></i> อนุมัติการนัดหมาย</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-university fa-fw"></i> อนุมัตินักเรียน</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </nav>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal1-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal2-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                </div>
            </div>
        </div>
        <!-- /#wrapper -->
        <footer>
            <!-- jQuery -->
            <script src="../bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Metis Menu Plugin JavaScript -->
            <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
            <!-- DataTables JavaScript -->
            <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
            <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
            <!-- Page-Level Demo Scripts - Tables - Use for reference -->
            <script>
                $(document).ready(function () {
                    $('#dataTables-example').DataTable({
                        responsive: true
                    });
                });
            </script>
            <!--SCHEDULE-->
            <script src="../js/student/schedule.js" type="text/javascript"></script>
            <!-- Custom Theme JavaScript -->
            <script src="../dist/js/sb-admin-2.js"></script>
            <!--Calendar-->
            <!--<script src="../js/calendar.js" type="text/javascript"></script>-->
            
        </footer>

    </body>

</html>


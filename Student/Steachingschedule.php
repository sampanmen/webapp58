<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ตารางแสดงการสอน <button class="btn btn-circle glyphicon-plus" href="Smodal_addAppointment.php?subjectid=<?= $_GET['subjectid'] ?>&userid=<?= $_GET['subjectid']?>" data-toggle="modal" data-target="#myModal"></button></h1>
            </div>
            <div>
                <div class="col-lg-12">  
                    <div class="col-lg-2">                                           
                        <label>ชื่อวิชา / Subject Name</label>
                    </div>
                    <div class="form-group col-lg-6"> 
                        <p>Web App</p> 
                    </div>
                </div>
                <div class="col-lg-12">  
                    <div class="col-lg-2">                                           
                        <label>ผู้สอน / Teacher</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <p>ผศ.นุชนาฎ   สัตยากวี</p>                              
                    </div>
                </div>
                <table class="calendar table table-bordered">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th colspan="2">08:00-09:00</th>        
                            <th colspan="2">09:00-10:00</th>
                            <th colspan="2">10:00-11:00</th>
                            <th colspan="2">11:00-12:00</th>
                            <th colspan="2">12:00-13:00</th>
                            <th colspan="2">13:00-14:00</th>
                            <th colspan="2">14:00-15:00</th>
                            <th colspan="2">15:00-16:00</th>
                            <th colspan="2">16:00-17:00</th>
                        </tr>
                    </thead>
                    <tbody id='detailSchedule'>
                        
                    </tbody>
<!--                    <tbody>
                        <tr>
                            <td>Monday</td>
                            <td class=" no-events" rowspan="1"></td>
                            <td class=" no-events" rowspan="1"></td>
                            <td class=" has-events" colspan="6">
                                <div class="row-fluid lecture" style="width: 99%; height: 100%;">
                                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Prof.
                                            Someone</a></span> <span class="location">23/111</span>
                                </div>
                            </td>



                            <td class=" no-events" rowspan="1"></td>

                            <td class=" no-events" rowspan="1"></td>

                            <td class=" has-events conflicts " colspan="6">

                                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                                    <span class="title">02204342</span> 
                                    <span class="lecturer"><a>Web app</a></span>
                                    <span class="location">E8301</span>
                                </div>

                            </td>
                            <td class=" no-events" rowspan="1"></td>

                            <td class=" no-events" rowspan="1"></td>





                        </tr>
                        <tr>
                            <td>Tuesday</td>

                            <td class=" no-events" rowspan="1"></td>
                            <td class=" no-events" rowspan="1"></td>


                            <td class=" has-events" colspan="6">

                                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Prof.
                                            Someone</a></span> <span class="location">23/111</span>
                                </div>
                            </td>



                            <td class=" no-events" rowspan="1"></td>

                            <td class=" no-events" rowspan="1"></td>

                            <td class=" has-events conflicts " colspan="6">

                                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                                    <span class="title">02204342</span> 
                                    <span class="lecturer"><a>Web app</a></span>
                                    <span class="location">E8301</span>
                                </div>

                            </td>
                            <td class=" no-events" rowspan="1"></td>

                            <td class=" no-events" rowspan="1"></td>


                        </tr>
                        <tr>
                            <td>Wednesday</td>

                            <td class=" no-events" rowspan="1"></td>
                            <td class=" no-events" rowspan="1"></td>


                            <td class=" has-events" colspan="6">

                                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Prof.
                                            Someone</a></span> <span class="location">23/111</span>
                                </div>
                            </td>



                            <td class=" no-events" rowspan="1"></td>

                            <td class=" no-events" rowspan="1"></td>

                            <td class=" has-events conflicts " colspan="6">

                                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                                    <span class="title">02204342</span> 
                                    <span class="lecturer"><a>Web app</a></span>
                                    <span class="location">E8301</span>
                                </div>

                            </td>
                            <td class=" no-events" rowspan="1"></td>

                            <td class=" no-events" rowspan="1"></td>


                        </tr>
                        <tr>
                            <td>Thursday</td>

                            <td class=" no-events" rowspan="1"></td>
                            <td class=" no-events" rowspan="1"></td>


                            <td class=" has-events" colspan="6">

                                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Prof.
                                            Someone</a></span> <span class="location">23/111</span>
                                </div>
                            </td>



                            <td class=" no-events" rowspan="1"></td>

                            <td class=" no-events" rowspan="1"></td>

                            <td class=" has-events conflicts " colspan="6">

                                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                                    <span class="title">02204342</span> 
                                    <span class="lecturer"><a>Web app</a></span>
                                    <span class="location">E8301</span>
                                </div>

                            </td>
                            <td class=" no-events" rowspan="1"></td>

                            <td class=" no-events" rowspan="1"></td>

                        </tr>
                        <tr>
                            <td>Friday</td>

                            <td class=" no-events" rowspan="1"></td>
                            <td class=" no-events" rowspan="1"></td>


                            <td class=" has-events" colspan="6">

                                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Prof.
                                            Someone</a></span> <span class="location">23/111</span>
                                </div>
                            </td>



                            <td class=" no-events" rowspan="1"></td>

                            <td class=" no-events" rowspan="1"></td>

                            <td class=" has-events conflicts " colspan="6">

                                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                                    <span class="title">02204342</span> 
                                    <span class="lecturer"><a>Web app</a></span>
                                    <span class="location">E8301</span>
                                </div>

                            </td>
                            <td class=" no-events" rowspan="1"></td>

                            <td class=" no-events" rowspan="1"></td>


                        </tr>

                    </tbody>-->
                </table>
            </div>
        </div>
    </div>
</div>

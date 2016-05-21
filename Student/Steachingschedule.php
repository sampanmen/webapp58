<?php include '../head.php'; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ตารางแสดงการสอน <button class="btn btn-circle glyphicon-plus" href="Smodal_addAppointment.php?subjectid=<?= $_GET['subjectid'] ?>&userid=<?= $_GET['userid'] ?>" data-toggle="modal" data-target="#myModal"></button></h1>
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
                <table class="table table-striped table-bordered table-hover" id="dataTables-Appoin">
                    <thead>
                        <tr>
                            <th>วัน</th>
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
                </table>
                <script>
                    var url = "../control/control.student.getSchedule.php?teacherid=<?= $_SESSION['idUser'] ?>";
                    
                    $.post(url, function (data) {
                        var jsonData = jQuery.parseJSON(data);
                        var days = ['วันจันทร์', 'วันอังคาร', 'วันพุธ', 'วันพฤหัสบดี', 'วันศุกร์'];
                        var daysEng = {'Monday': "0", 'Tuesday': "1", 'Wednesday': "2", 'Thursday': "3", 'Friday': "4"};
                        var time = {"08:00:00": "0",
                            "08:30:00": "1",
                            "09:00:00": "2",
                            "09:30:00": "3",
                            "10:00:00": "4",
                            "10:30:00": "5",
                            "11:00:00": "6",
                            "11:30:00": "7",
                            "12:00:00": "8",
                            "12:30:00": "9",
                            "13:00:00": "10",
                            "13:30:00": "11",
                            "14:00:00": "12",
                            "14:30:00": "13",
                            "15:00:00": "14",
                            "15:30:00": "15",
                            "16:00:00": "16",
                            "16:30:00": "17",
                            "17:00:00": "18"}
                        var k = 0;
                        var startTime;
                        var endTime;
                        for (var i = 0; i < days.length; i++) {
                            // for (var key in jsonData) {
                            if (k < jsonData.length) {
                                if (daysEng[jsonData[k]['daySche']] == i) {
                                    startTime = time[jsonData[k]['startTimeSche']];
                                    endTime = time[jsonData[k]['endTimeSche']];
                                } else {
                                    startTime = -1;
                                    endTime = -1;
                                }
                            }
                            var t = "<tr>";
                            t = t + "<td class='text-center'>" + days[i] + "</td>";
                            for (j = 0; j < 18; j++) {
                                if (j == startTime) {
                                    t = t + "<td class='text-center event' colspan='" + (endTime - startTime) + "'>" + jsonData[k]['idSubject'] + "<br/>" + jsonData[k]['nameSubject'] + "</td>";
                                    k++;
                                    j = endTime - 1;
                                    startTime = -1;
                                    endTime = -1;
                                    if (k < jsonData.length) {
                                        if (daysEng[jsonData[k]['daySche']] == i) {
                                            startTime = time[jsonData[k]['startTimeSche']];
                                            endTime = time[jsonData[k]['endTimeSche']];
                                        } else {
                                            startTime = -1;
                                            endTime = -1;
                                        }
                                    }

                                }
                                else {
                                    t = t + "<td class='text-center'></td>";
                                }
                            }
                            t = t + "</tr>";
                            $("#detailSchedule").append(t);

                            // }
                        }

                        //console.log($("#tbody").html());
//                        $('#dataTables-Appoin').DataTable({
//                            responsive: true
//                        });
                    });
                </script>
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

            </div>
        </div>
    </div>
</div>

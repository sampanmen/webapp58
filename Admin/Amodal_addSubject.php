<!--<form action="../control/control.admin.addSubject.php" method="POST">-->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">เพิ่มวิชาใหม่</h4>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>วิชา</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <select id="teacher" class="form-control" name="teacherid">
                                <option value="1" selected="">00001 WebApp</option>
                                <option value="2">00002 Analog</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>อาจารย์ผู้สอน</label>
                        </div>
                        <div class="form-group col-lg-6">
                            <select id="teacher2" class="form-control" name="teacherid">

                            </select>  

                            <script>
                                var url = "../control/control.admin.getTeacher.php";
                                $.post(url, function (data) {
                                    var obj = jQuery.parseJSON(data);
                                    //alert(obj);
                                    for (var key in obj) {
                                        var select = '<option value="' + obj[key]['idUser'] + '">' + obj[key]['name'] + " " + obj[key]['surname'] + '</option>';
                                        $("#teacher2").append(select);
                                    }
                                });
                            </script>
                        </div>
                    </div> 
                    <div class="col-lg-12" id="itemIN">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>เวลาที่สอน </b>
                            </div>
                            <div class="col-lg-12">  
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                                        <thead>
                                            <tr>
                                                <th>วัน</th>
                                                <th>เวลาเริ่มสอน</th>
                                                <th>เวลาที่สินสุด</th>
                                                <th>ชั้นที่สอน</th>
                                                <th>สถานที่</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbItem">
                                            <!--show item-->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>
                                                    <select class="form-control" id="date">
                                                        <option value="1" selected="">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>  
                                                </td>
                                                <td><input type="time" class="form-control" id="startime"> </td>
                                                <td><input type="time" class="form-control" id="endtime"> </td>
                                                <td>
                                                    <select class="form-control" id="room">
                                                        <option value="1" selected="">ป.1/1</option>
                                                        <option value="2">ป.1/2</option>
                                                        <option value="3">ป.2/1</option>
                                                        <option value="4">ป.2/2</option>
                                                        <option value="5">ป.3/1</option>
                                                        <option value="6">ป.3/2</option>
                                                        <option value="7">ป.4/1</option>
                                                        <option value="8">ป.4/2</option>
                                                        <option value="9">ป.5/1</option>
                                                        <option value="10">ป.5/2</option>
                                                        <option value="11">ป.6/1</option>
                                                        <option value="12">ป.6/2</option>
                                                    </select>  
                                                </td>
                                                <td><input type="text" class="form-control" id="location"> </td>
                                                <td><button class="btn btn-circle glyphicon-plus" onclick="addItem();"></button></td>

                                            </tr>                                                     

                                        </tfoot>
                                        <script>                                                        
                                            var itemNo = 0;
                                            function addItem() {
                                                itemNo++;
                                                var date = $("#date").val();
                                                var startime = $("#startime").val();
                                                var endtime = $("#endtime").val();
                                                var room = $("#room").val();
                                                var location = $("#location").val();

                                                var ItemHTML = '<tr id="trItem_' + itemNo + '">' +
                                                        '<td>' + date + '<input type="hidden" name="item_name[]" value="' + date + '"></td>' +
                                                        '<td>' + startime + '<input type="hidden" name="item_name[]" value="' + startime + '"></td>' +
                                                        '<td>' + endtime + '<input type="hidden" name="item_brand[]" value="' + endtime + '"></td>' +
                                                        '<td>' + room + '<input type="hidden" name="item_model[]" value="' + room + '"></td>' +
                                                        '<td>' + location + '<input type="hidden" name="item_serialno[]" value="' + location + '"></td>' +
                                                        '<td><button type="button" class="btn btn-danger btn-circle" onclick="removeItem(\'trItem_' + itemNo + '\')"><i class="glyphicon-minus""></i></button></td>' +
                                                         '</tr>';
                                                $("#tbItem").append(ItemHTML);

                                                $("#date").val('');
                                                $("#startime").val('');
                                                $("#endtime").val('');
                                                $("#room").val('');
                                                $("#location").val('');
                                            }

                                            function removeItem(id) {
                                                $("#" + id).html("");
                                            }
                                        </script>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
<!--</form>-->





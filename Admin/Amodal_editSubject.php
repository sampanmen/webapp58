<form action="../control/control.admin.teaching.php" method="POST">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">02204445</h4>
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
                            <p>Wep App (fix)</p>
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>อาจารย์ผู้สอน</label>
                        </div>
                        <div class="form-group col-lg-6">
                            <p>ฝศ.นุชนาฎ สัตยากวี (fix)</p>
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
                                                        <option value="Monday" selected="">จันทร์</option>
                                                        <option value="Tuesday">อังคาร</option>
                                                        <option value="Wednesday">พุธ</option>
                                                        <option value="Thursday">พฤหัสบดี</option>
                                                        <option value="Friday">ศุกร์</option>
                                                        <option value="Saturday">เสาร์</option>
                                                        <option value="Sunday">อาทิตย์</option>
                                                    </select>  
                                                </td>
                                                <td><input type="time" class="form-control" id="startime"> </td>
                                                <td><input type="time" class="form-control" id="endtime"> </td>
                                                <td>
                                                    <select class="form-control" id="room">
                                                    </select> 
                                                    <script>
                                                        var url = "../control/control.admin.getRoom.php";
                                                        $.post(url, function (data) {
                                                            var obj = jQuery.parseJSON(data);
                                                            //alert(obj);
                                                            for (var key in obj) {
                                                                var select = '<option value="' + obj[key]['idClass'] + '">' + obj[key]['classRoom'] + '</option>';
                                                                $("#room").append(select);
                                                            }
                                                        });
                                                    </script>
                                                </td>
                                                <td><input type="text" class="form-control" id="location"> </td>
                                                <td><button type="button" class="btn btn-circle glyphicon-plus" onclick="addItem();"></button></td>

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
                                                        '<td>' + date + '<input type="hidden" name="date[]" value="' + date + '"></td>' +
                                                        '<td>' + startime + '<input type="hidden" name="startime[]" value="' + startime + '"></td>' +
                                                        '<td>' + endtime + '<input type="hidden" name="endtime[]" value="' + endtime + '"></td>' +
                                                        '<td>' + room + '<input type="hidden" name="room[]" value="' + room + '"></td>' +
                                                        '<td>' + location + '<input type="hidden" name="location[]" value="' + location + '"></td>' +
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
    </div>
    <div class="modal-footer">
        <input type="hidden" name="term" value="<?= $_GET['term'] ?>">
        <input type="hidden" name="year" value="<?= $_GET['year'] ?>">
        <input type="hidden" name="termid" value="<?= $_GET['termid'] ?>">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>

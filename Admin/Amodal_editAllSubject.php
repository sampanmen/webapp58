<form action="../control/control.admin.editSubject.php" method="POST">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel"><?= $_GET['subjectid'] ?></h4>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
            <div class="panel-body">
                <div class="row">                 
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>รหัสวิชา</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <p>02204445</p> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>ชื่อวิชา</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input class="form-control" id="namesubject" name="namesubject"> 
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="hidden" name="subjectid" value="<?= $_GET['subjectid'] ?>">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>
<script>
    var url = "../control/control.admin.getSubject.php?subjectid=<?= $_GET['subjectid'] ?>";
    $.post(url, function (data) {
        var jsonData = jQuery.parseJSON(data);
        $("#namesubject").val(jsonData['nameSubject']);
    });
</script>
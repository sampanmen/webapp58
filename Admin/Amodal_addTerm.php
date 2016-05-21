<form action="../control/control.admin.addTerm.php" method="POST">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">เพิ่มปีการศึกษา</h4>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
            <div class="panel-body">
                <div class="row">                 
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>ปีการศึกษา</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input class="form-control" name="termyear"> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>ภาคการศึกษา</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input class="form-control" name="term"> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>เริ่มภาคการศึกษา</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input class="form-control" type="date" name="starttimeterm"> 
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="col-lg-6">                                           
                            <label>จบภาคการศึกษา</label>
                        </div>
                        <div class="form-group col-lg-6"> 
                            <input class="form-control" type="date" name="endtimeterm"> 
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
</form>

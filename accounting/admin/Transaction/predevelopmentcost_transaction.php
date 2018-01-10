<?php
$tblname = "tbl_account";
if (count($_POST) > 0) {
    $_POST["entrydate"] = date("y-m-d");
    $_POST["updatedate"] = date("y-m-d");
    $_POST["active"] = "Y";
    MysqlConnection::insert($tblname, $_POST);
}
$resultset = MysqlConnection::fetchAll($tblname);
?>
<div class="row">
    <div class="col-sm-12">
        <script>
            init.push(function () {
                $('#jq-datatables-example').dataTable();
                $('#jq-datatables-example_wrapper .table-caption').text('Pre Development Cost Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View <?php echo $explode[1] ?></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add Pre Development Cost</button>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Account Name</th>
                                <th>Account Type</th>
                                <th>Entry Date</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            foreach ($resultset as $key => $value) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index ?></td>
                                    <td><?php echo $value["accountname"]?></td>
                                    <td><?php echo $value["accounttype"]?></td>
                                    <td><?php echo $value["entrydate"]?></td>
                                    <td><?php echo $value["active"]?></td>
                                </tr>
                                <?php
                                $index++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--- ADD POP UP DIALOG ---->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Add Pre Development Cost Information</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Payee Name *</label>
                                <input type="text" name="accountname" maxlength="30" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Cost Code</label>
                                <input type="text" name="accountname" maxlength="5" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                              <div class="form-group no-margin-hr">
                                <label class="control-label">Project Id*</label>
                                <input type="text" name="accountname" maxlength="15" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                              <div class="form-group no-margin-hr">
                                <label class="control-label">Net Cost*</label>
                                <input type="text" name="accountname" maxlength="5" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                           
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                       <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">GST*</label>
                                <input type="text" name="accountname" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">PST</label>
                                <input type="text" name="accountname" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                       <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Holdback*</label>
                                <input type="text" name="accountname" maxlength="25"  autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Gross Amount</label>
                              <input type="text" name="accountname"  onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                     <div class="row">
                        <div class="col-sm-6">
                           
                            
                        </div><!-- col-sm-6 -->
                        
                    </div><!-- row -->
                     
                </div>  
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Save"/>  
                    <button type="button"  class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div> 
    </div>  
</div>  
<!--- ADD POP UP DIALOG ---->
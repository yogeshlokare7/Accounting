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
                $('#jq-datatables-example_wrapper .table-caption').text('Project Master Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View <?php echo $explode[1] ?></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add Project Master</button>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Id</th>
                                <th>Project Name</th>
                                <th>Project Type</th>
                                <th>No Resi Area</th>
                                <th>No Comm Area</th>
                                <th>Unit</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>1</td>
                                <td>Vantage Squamish</td>
                                <td>6-Storey Mixed-Use:  Retail & Residential</td>
                                <td>73</td>
                                <td>2</td>
                                <td>75</td>
                                <td><a href="mainpage.php?pagename=projectdetails_master">details</a></td>
                            </tr>

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
                <h4 class="modal-title" id="myModalLabel">Add project Master Information</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Project Id *</label>
                                <input type="text" name="accountname" maxlength="11" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Project Name *</label>
                                <input type="text" name="accountname" maxlength="30" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Project Type</label>
                                <select class="form-control"  name="accounttype">
                                    <option>Select Account Type</option>
                                    <option>Income</option>
                                    <option>Expense</option>
                                </select>
                            </div>
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Address *</label>
                                <input type="text" name="accountname" maxlength="200" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Country*</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Province</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Residential Unit*</label>
                                <input type="text" name="accountname" maxlength="11" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Commertial Unit</label>
                                <input type="text" name="accountname" maxlength="11" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Start Date*</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>

                            <div class="form-group no-margin-hr">
                                <label class="control-label">Total Billable Sqft</label>
                                <input type="text" name="accountname" maxlength="11" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">

                            <div class="form-group no-margin-hr">
                                <label class="control-label">End Date*</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
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
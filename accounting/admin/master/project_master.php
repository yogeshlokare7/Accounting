<?php
$tblname = "project";
if (count($_POST) > 0) {
    MysqlConnection::insert($tblname, $_POST);
}
$resultset = MysqlConnection::fetchAllAscending($tblname);
print_r($resultset);
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
                                <th>Project Code</th>
                                <th>Project Name</th>
                                <th>Project Type</th>
                                <th>Resi Area</th>
                                <th>Comm Area</th>
                                <th>Address</th>
                                <th>Billable Sqft</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            foreach ($resultset as $key => $value) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index ?></td>
                                    <td><?php echo $value["proj_id"] ?></td>
                                    <td><?php echo $value["proj_name"] ?></td>
                                    <td><?php echo $value["proj_type"] ?></td>
                                    <td><?php echo $value["ressidential_unit"] ?></td>
                                    <td><?php echo $value["commercial_unit"] ?></td>
                                    <td><?php echo $value["address"] ?></td>
                                    <td><?php echo $value["total_billable_sqft"] ?></td>
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
                <h4 class="modal-title" id="myModalLabel">Add project Master Information</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Project Name *</label>
                                <input type="text" name="proj_name" maxlength="30" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Project Type</label>
                                <select class="form-control"  name="proj_type"></select>
                            </div>
                        </div><!-- row -->
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Address *</label>
                                <input type="text" name="address" maxlength="200" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Country*</label>
                                <input type="text" name="country" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Province</label>
                                <input type="text" name="province" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Residential Unit*</label>
                                <input type="text" name="ressidential_unit" maxlength="11" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Commertial Unit</label>
                                <input type="text" name="commercial_unit" maxlength="11" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Start Date*</label>
                                <input type="text" name="start_date" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Total Billable Sqft</label>
                                <input type="text" name="total_billable_sqft" maxlength="11" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">End Date*</label>
                                <input type="text" name="end_date" autofocus="" placeholder="Enter Account Name" class="form-control">
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
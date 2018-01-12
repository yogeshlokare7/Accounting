<?php
$tblname = "taxinfo_master";
if (count($_POST) > 0) {
  MysqlConnection::insert($tblname, $_POST);  
}
$resultset = MysqlConnection::fetchAll($tblname);
?>
<div class="row">
    <div class="col-sm-12">
        <script>
            init.push(function () {
                $('#jq-datatables-example').dataTable();
                $('#jq-datatables-example_wrapper .table-caption').text('Tax Info Master');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View <?php echo $explode[1] ?></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add TaxInfo Master</button>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tax ID</th>
                                <th>Country</th>
                                <th>Province</th>
                                <th>Tax Type</th>
                                <th>Tax Percent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            foreach ($resultset as $key => $value) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index ?></td>
                                    <td><?php echo $value["tax_id"] ?></td>
                                    <td><?php echo $value["country"] ?></td>
                                    <td><?php echo $value["province"] ?></td>
                                    <td><?php echo $value["tax_type"] ?></td>
                                    <td><?php echo $value["tax_percent"] ?></td>

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
                <h4 class="modal-title" id="myModalLabel">Add Tax Info Master</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Country *</label>
                                <input type="text" name="country" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Province  <i class="requred">*</i></label>
                                <input type="text" name="province" required="true" autofocus="" placeholder="Enter Data Here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Tax type*</label>
                                <input type="text" name="tax_type" autofocus="" placeholder="Enter Address here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Tax percent*</label>
                                <input type="text" name="tax_percent" autofocus="" placeholder="Enter City Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->


                    </div><!-- row -->
                </div>  
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
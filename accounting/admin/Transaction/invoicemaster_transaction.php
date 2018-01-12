<?php
$tblname = "invoice_master";
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
                $('#jq-datatables-example_wrapper .table-caption').text('Invoice Master Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View <?php echo $explode[1] ?></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add Invoice Master</button>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Invoice Code</th>
                                <th>Invoice Date</th>
                                <th>Date Entered</th>
                                <th>Date Paid</th>
                                <th>Draw</th>
                                <th>Predevelopment Id</th>
                                <th>Check No</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            foreach ($resultset as $key => $value) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index ?></td>
                                    <td><?php echo $value["invoice_id"]?></td>
                                    <td><?php echo $value["invoice_date"]?></td>
                                    <td><?php echo $value["date_entered"]?></td>
                                    <td><?php echo $value["date_paid"]?></td>
                                    <td><?php echo $value["draw"]?></td>
                                    <td><?php echo $value["predevelopment_id"]?></td>
                                    <td><?php echo $value["check_no"]?></td>
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
                <h4 class="modal-title" id="myModalLabel">Add Invoice Master Transaction Information</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Invoice Id *</label>
                                <input type="text" name="invoice_id" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Invoice Date *</label>
                                <input type="text" name="invoice_date" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Date Entered</label>
                                <select class="form-control" name="data_entered">
                                    <option>Select Account Type</option>
                                    <option>Income</option>
                                    <option>Expense</option>
                                </select>
                            </div>
                              <div class="form-group no-margin-hr">
                                <label class="control-label">Date Paid*</label>
                                <input type="text" name="data_paid" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                       <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Draw*</label>
                                <input type="text" name="draw" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Predevelopment Id</label>
                                <select class="form-control" name="predevelopment_id">
                                    <option>Select Account Type</option>
                                    <option>Income</option>
                                    <option>Expense</option>
                                </select>
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                       <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Check No*</label>
                                <input type="text" name="check_no" autofocus="" placeholder="Enter Account Name" class="form-control">
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
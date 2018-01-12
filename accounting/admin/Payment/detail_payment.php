<?php
$tblname = "payment_summry_detail";
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
                $('#jq-datatables-example_wrapper .table-caption').text('Payment Type Detail Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View Payment Type Detail</span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add Payment Summary Type Detail</button>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Payment Summary type</th>
                                <th>Invoice No</th>
                                <th>Payment Date</th>
                                <th>Gross Price</th>
                                <th>Holdback</th>
                                <th>Net Price</th>
                                <th>Net Price(Inc. GST)</th>
                                <th>Paid</th>
                                <th>Cleared</th>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            foreach ($resultset as $key => $value) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index ?></td>
                                    <td><?php echo $value["name"] ?></td>
                                    <td><?php echo $value["invoice_no"] ?></td>
                                    <td><?php echo $value["payment_date"] ?></td>
                                    <td><?php echo $value["gross_price"] ?></td>
                                    <td><?php echo $value["holdback"] ?></td>
                                    <td><?php echo $value["net_price"] ?></td>
                                    <td><?php echo $value["netprice_inc_tax"] ?></td>
                                    <td><?php echo $value["paid"] ?></td>
                                    <td><?php echo $value["cleared"] ?></td>
                                    <td><?php echo $value["comment"] ?></td>
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
                <h4 class="modal-title" id="myModalLabel">Add Payment Type Detail Information</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Payment Part/Type *</label>
                               <select id="empId" name="employeeid" required="true" autofocus="true" class="form-control" tabindex="1" required>
                                    <option value="">Select Payment Part/Type</option>
                                    <?php
                                    foreach ($resultsetEmployees as $key => $value) {
                                        ?>
                                        <option value="<?php echo $value["id"] ?>">
                                            <?php echo $value["firstname"] ?> <?php echo $value["middlename"] ?> <?php echo $value["lastname"] ?> 
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Invoice No  <i class="requred">*</i></label>
                                <input type="text" name="customer_email" required="true" autofocus="" placeholder="Enter invoice number here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Payment Date *</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter payment date here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Gross Price  <i class="requred">*</i></label>
                                <input type="text" name="customer_email" required="true" autofocus="" placeholder="Enter gross price here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Holdback *</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter holdback here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div><!-- row -->
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Net Price <i class="requred">*</i></label>
                                <input type="text" name="customer_email" required="true" autofocus="" placeholder="Enter net price here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Net Price (Inc. GST) *</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter net price(inc. GST) here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div><!-- row -->
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Paid  <i class="requred">*</i></label>
                                <select id="empId" name="employeeid" required="true" autofocus="true" class="form-control" tabindex="1" required>
                                    <option value="">Select(YES/NO)</option>
                                    <option value="Y">YES
                                    </option>
                                    <option value="N">NO
                                    </option>
                                </select>
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Cleared *</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter cleared here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Comment  *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter comment here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div><!-- row -->
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Save"/>  
                    <button type="button"  class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div> 
    </div>  
</div>  
<!--- ADD POP UP DIALOG ---->
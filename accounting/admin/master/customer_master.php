<?php
$tblname = "customer_master";
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
                $('#jq-datatables-example_wrapper .table-caption').text('Customer Master Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View <?php echo $explode[1] ?></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add Customer </button>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Address</th>
                                <th>Country</th>
                                <th>Province</th>
                                <th>Contact No</th>
                                <th>Fax No</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            foreach ($resultset as $key => $value) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index ?></td>
                                    <td><?php echo $value["customer_id"]?></td>
                                    <td><?php echo $value["name"]?></td>
                                    <td><?php echo $value["customer_email"]?></td>
                                    <td><?php echo $value["address"]?></td>
                                    <td><?php echo $value["country"]?></td>
                                    <td><?php echo $value["province"]?></td>
                                    <td><?php echo $value["contact_no"]?></td>
                                    <td><?php echo $value["fax_no"]?></td>
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
                <h4 class="modal-title" id="myModalLabel">Add Customer Information</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Customer ID *</label>
                                <input type="text" name="customer_id" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                         <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Customer Name *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                              <div class="form-group no-margin-hr">
                                <label class="control-label">Email Id  <i class="requred">*</i></label>
                                <input type="text" name="customer_email" required="true" autofocus="" placeholder="Enter Data Here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                         <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Address*</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Address here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Country*</label>
                                <input type="text" name="country" autofocus="" placeholder="Enter City Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                         <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Province *</label>
                                <input type="text" name="province" autofocus="" placeholder="Enter Province" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                         <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Contact Number *</label>
                                <input type="text" name="contact_no" autofocus="" placeholder="Enter Contact" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                         <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Fax Number *</label>
                                <input type="text" name="fax_no" autofocus="" placeholder="Enter Fax number" class="form-control">
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
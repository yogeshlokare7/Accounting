<?php
$tblname = "development_cost_summary";
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
                $('#jq-datatables-example_wrapper .table-caption').text('Development Cost Summary');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View <?php echo $explode[1] ?></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add Development Cost Summary</button>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                               
                                
                                <th>Total Budget</th>
                                <th>Per Unit</th>
                                <th>Per sf</th>
                                <th>Budget Increase</th>
                                <th>Final Budget</th>
                                <th>Pre Dev</th>
                                <th>Cost in Place</th>
                                <th>Cost to Complete</th>
                                
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td><?php echo $index ?></td>
                                    <td><?php echo $value["total_budget"]?></td>
                                    <td><?php echo $value["per_unit"]?></td>
                                    <td><?php echo $value["per_sf"]?></td>
                                     <td><?php echo $value["budget_increase"]?></td>
                                    <td><?php echo $value["final_budget"]?></td>
                                    <td><?php echo $value["pre_dev"]?></td>
                                    <td><?php echo $value["cost_in_place"]?></td>
                                     <td><?php echo $value["cost_to_complete"]?></td>
                                     
                                <th>
                                    <a href="mainpage.php?pagename=adddevcostsummary_transaction">add</a>
                                </th>
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
                <h4 class="modal-title" id="myModalLabel">Add Development Cost Summary Transaction Information</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            
                           
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Total Budget</label>
                                <input type="text" name="total_budget" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Data Here" class="form-control">
                            </div>
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Per Unit</label>
                                <input type="text" name="per_unit" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Data Here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Per sf</label>
                                <input type="text" name="per_sf" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Data Here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Budget Increase</label>
                                <input type="text" name="budget_increase" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Data Here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Final Budget</label>
                                <input type="text" name="final_budget" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Data Here" class="form-control">
                            </div>
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Pre Dev</label>
                                <input type="text" name="pre_dev" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Data Here" class="form-control">
                            </div>

                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Cost in Place</label>
                                <input type="text" name="cost_in_place" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Data Here" class="form-control">
                            </div>
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Cost to Complete</label>
                                <input type="text" name="cost_to_complete" autofocus="" placeholder="Enter Account Name" class="form-control">
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
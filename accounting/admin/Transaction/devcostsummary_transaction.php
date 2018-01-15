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
            init.push(function() {
                $('#jq-datatables-example').dataTable();
                $('#jq-datatables-example_wrapper .table-caption').text('Development Cost Summary');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View Development</span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title"><a class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" href="mainpage.php?pagename=adddevcostsummary_transaction">Add Development Cost</a></span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Types</th>
                                <th>Category</th>
                                <th>Total Unit</th>
                                <th>Total SqFt</th>
                                <th>Avg SqFt</th>
                                <th>Total Budget</th>
                                <th>Per Unit</th>
                                <th>Per SF</th>
                                <th>Budget Increases</th>
                                <th>Final Budget</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>#</td>
                                <td>Project Name</td>
                                <td>4</td>
                                <td>56</td>
                                <td>75</td>
                                <td>68,332</td>
                                <td>911</td>
                                <td>$29,888,246</td>
                                <td>$377,110</td>
                                <td>$413.91</td>
                                <td>0</td>
                                <td>$29,888,245.62</td>
                                <td>
                                    <a href="mainpage.php?pagename=adddevcostsummary_transaction">add</a>
                                </td>
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
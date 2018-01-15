<?php
$type = $_GET["type"];
$tblname = "virtual_checkbook";
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
                $('#jq-datatables-example_wrapper .table-caption').text('Virtual Checkbook <?php echo strtoupper($type) ?> Account Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Virtual Checkbook </span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title"><a href="mainpage.php?pagename=virtualcheckbook_account&type=gp" class="btn btn-success btn-xs btn-outline btn-flat btn-rounded">GP Account</a></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title"><a href="mainpage.php?pagename=virtualcheckbook_account&type=lp" class="btn btn-success btn-xs btn-outline btn-flat btn-rounded">LP Account</a></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title"><a href="mainpage.php?pagename=virtualcheckbook_account&type=holdback" class="btn btn-success btn-xs btn-outline btn-flat btn-rounded">Holdback</a></span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Contractor</th>
                                <th>A.C Type</th>	
                                <th>Cheque No.</th>	
                                <th>Date	</th>
                                <th>To</th>
                                <th>Amount</th>
                                <th>Comments</th>
                                <th>Cleared Account</th>
                                <th>NotCashed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Vantage Squamish</td>
                                <td>Epix Squamish Limited Partnership</td>
                                <td><?php echo strtoupper($type) ?></td>	
                                <td>1</td>	
                                <td>August 25, 2016</td>
                                <td>Borden Ladner Gervais LLP</td>
                                <td>$16,579.63 </td>
                                <td>Invoices 697355201, 697355242, 697370637</td>
                                <td>September 2, 2016</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tr>
                            <td colspan="11" style="text-align: center;">
                                <span class="panel-title">
                                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">
                                        Add To Virtual <?php echo strtoupper($type) ?> Account
                                    </button>
                                </span>
                            </td>
                        </tr>
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
                <h4 class="modal-title" id="myModalLabel">Add To Virtual Checkbook <?php echo strtoupper($type) ?>  Account</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Project Name *</label>
                                <select class="form-control">
                                    <option>Select Project Name</option>
                                </select>
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Contractor *</label>
                                <select class="form-control">
                                    <option>Select Project Name</option>
                                </select>
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Cheque No. *</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Date *</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">To. *</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Amount *</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Date Cheque Cleared Account. *</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Written But Not Yet Cashed *</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Comments. *</label>
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
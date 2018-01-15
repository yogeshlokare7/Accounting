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
                $('#jq-datatables-example_wrapper .table-caption').text('Banking <?php echo strtoupper($type) ?> Account Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Banking Account</span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title"><a href="mainpage.php?pagename=banking_account&type=gp" class="btn btn-success btn-xs btn-outline btn-flat btn-rounded">GP Account</a></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title"><a href="mainpage.php?pagename=banking_account&type=lp" class="btn btn-success btn-xs btn-outline btn-flat btn-rounded">LP Account</a></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title"><a href="mainpage.php?pagename=banking_account&type=holdback" class="btn btn-success btn-xs btn-outline btn-flat btn-rounded">Holdback</a></span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>#</th>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Bank</th>
                                <th>AC Type</th>
                                <th>AC Number</th>
                                <th>Opening Balance</th>
                                <th>Debits</th>
                                <th>Credits</th>
                                <th>Ending Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>
                                    <a href="mainpage.php?pagename=detailbanking_account&type=<?php echo $type ?>">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModalDetail">
                                        <i class="fa fa-money"></i>
                                    </a>
                                </td>
                                <td>Vantage Squamish</td>
                                <td>CIBC</td>
                                <td>LP</td>
                                <td>47-54212</td>
                                <td>$0.00 </td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>

                            <tr class="odd gradeX">
                                <td>2</td>
                                <td>
                                    <a href="mainpage.php?pagename=detailbanking_account&type=<?php echo $type ?>">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModalDetail">
                                        <i class="fa fa-money"></i>
                                    </a>
                                </td>
                                <td>Epix Squamish Limited Partnership</td>
                                <td>CIBC</td>
                                <td>Holdback</td>
                                <td>47-54212</td>
                                <td>$0.00 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                        <tr>
                            <td colspan="11" style="text-align: center;">
                                <span class="panel-title">
                                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">
                                        Add Virtual <?php echo strtoupper($type) ?> Account
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
                <h4 class="modal-title" id="myModalLabel">Add Virtual Checkbook <?php echo strtoupper($type) ?>  Account</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Bank Name *</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Account No *</label>
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




<!--- ADD POP UP DIALOG ---->
<div id="myModalDetail" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Add Virtual Checkbook <?php echo strtoupper($type) ?>  Account</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Credit *</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div>  
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Debit *</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Comment *</label>
                                <input type="text" name="accountname" autofocus="" placeholder="Enter Account Name" class="form-control">
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
<?php
$tblname = "payment_summary_table";
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
                $('#jq-datatables-example_wrapper .table-caption').text('Payment Summary Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View Payment Summary</span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add Payment Summary </button>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Developer Name</th>
                                <th>Total Invoice</th>
                                <th></th>
                                <th></th>
                                <th>ADD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>Vantage Squamish</td>
                                <td>Epix Squamish Limited Partnership</td>
                                <td><a href="mainpage.php?pagename=adddetailsummary_payment">5</a></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="mainpage.php?pagename=addsummary_payment">ADD</a>
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
                <h4 class="modal-title" id="myModalLabel">Add Payment Summary</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Project  *</label>
                                <select name="" class="form-control">
                                    <?php
                                    for ($index = 1; $index < 3; $index++) {
                                        ?>
                                        <option>Project - <?php echo $index ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Developer Name *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Contractor Name *<i class="requred"></i></label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Contractor Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Contractor Contact *</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Contractor Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Subtrade Name *<i class="requred"></i></label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Contractor Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Subtrade Contact *</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Subtrade Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Purchase Order No *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Purchase Order No" class="form-control">
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
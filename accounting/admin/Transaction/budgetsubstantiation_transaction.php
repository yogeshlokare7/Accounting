<?php
$tblname = "budget_substantiation_summary";
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
                $('#jq-datatables-example_wrapper .table-caption').text('Budget Substantiation Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View <?php echo $explode[1] ?></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Budget Substantiation Summary</button>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>agg_code</th>
                                <th>agg_date</th>
                                <th>final_budget</th>
                                <th>contract</th> 
                                <th>quotation</th> 
                                <th>subtrader_id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            foreach ($resultset as $key => $value) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index ?></td>
                                    <td><?php echo $value["agg_code"] ?></td>
                                    <td><?php echo $value["agg_date"] ?></td>
                                    <td><?php echo $value["company_name"] ?></td>
                                    <td><?php echo $value["final_budget"] ?></td> 
                                    <td><?php echo $value["contract"] ?></td>
                                    <td><?php echo $value["quotation"] ?></td>
                                    <td><?php echo $value["subtrader_id"] ?></td>
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
            <h4 class="modal-title" id="myModalLabel">Add Budget Substantiation  Information</h4>
        </div>
        <form name="frmEntry" method="post">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Agg Code*</label>
                            <input type="text" name="agg_code" autofocus="" placeholder="Enter Contractor Name" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-sm-6">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Agg Date<i class="requred">*</i></label>
                            <input type="text" name="agg_date" required="true" autofocus="" placeholder="Enter Data Here" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                </div><!-- row -->
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Company Name*</label>
                            <input type="text" name="company_name" autofocus="" placeholder="Enter Address here" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-sm-6">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Final Budget*</label>
                            <input type="text" name="final_budget" autofocus="" placeholder="Enter City Name" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                </div><!-- row -->
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Contract *</label>
                            <input type="text" name="contract" autofocus="" placeholder="Enter Province" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-sm-6">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Quotation *</label>
                            <input type="text" name="quotation" autofocus="" placeholder="Enter Contact" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-sm-6">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Subtrader Id *</label>
                            <input type="text" name="subtrader_id" autofocus="" placeholder="Enter Fax number" class="form-control">
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
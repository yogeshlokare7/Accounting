<div class="row">
    <div class="col-sm-12">
        <form class="panel form-horizontal" method="POST" >
            <div class="panel-heading" ><span class="panel-title" style="text-transform: capitalize">Add VTB Mortgage Transaction</span></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Gross Loan Amount</label>
                            <input type="text" name="" autofocus="" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-sm-3">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Funding Date</label>
                            <input type="text" name="" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-sm-3">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Maturity Date</label>
                            <input type="email" name="" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-sm-3">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Interest Rate</label>
                            <input type="url" name="website" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                </div><!-- row -->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Nominal Interest Rate</label>
                            <input type="text" name="" autofocus="" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-sm-3">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Monthly Effective Rate</label>
                            <input type="text" name="" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-sm-3">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">Daily Effective Rate</label>
                            <input type="email" name="" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                </div><!-- row -->
            </div>
            <div class="panel-footer text-left">
                <input type="submit"  class="btn btn-success" name="btnSubmit" value="Loan Tracing"/>
                <input type="submit"  class="btn btn-primary" name="btnSubmit" value="Save"/>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <script>
            init.push(function () {
                $('#jq-datatables-example').dataTable();
                $('#jq-datatables-example_wrapper .table-caption').text('Loan Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading"><span class="panel-title">View Transcation</span></div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Days of Interest</th>
                                <th>Description</th>
                                <th>Start Loan Balance</th>
                                <th>Additional Draws</th>
                                <th>Holdback</th>
                                <th>Interest Charged</th>
                                <th>Interest Paid</th>
                                <th>Principal Payments</th>
                                <th>Ending Loan Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            for ($index = 0; $index < 10; $index++) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index ?></td>
                                    <td>March 31, 2016</td>
                                    <td></td>
                                    <td>Initial Advance</td>
                                    <td>$822,500.00 </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>$822,500.00 </td>
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

<?php
$tblname = "tbl_account";
$resultset = MysqlConnection::fetchAll($tblname);
?>
<div class="row">
    <div class="col-sm-12">
        <script>
            init.push(function () {
                $('#jq-datatables-example').dataTable();
                $('#jq-datatables-example_wrapper .table-caption').text('VTB Mortgage Summary');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View <?php echo $explode[1] ?></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <a href="mainpage.php?pagename=addvtbmortgage_transaction" class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" >
                        Add VTB Mortgage Summary
                    </a>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Gross Loan Amount</th>
                                <th>Funding Date</th>
                                <th>Maturity Date</th>
                                <th>Interest Rate</th>
                                <th>Nominal Interest Rate</th>
                                <th>Monthly Effective Rate</th>
                                <th>Daily Effective Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($index = 0; $index < 10; $index++) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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
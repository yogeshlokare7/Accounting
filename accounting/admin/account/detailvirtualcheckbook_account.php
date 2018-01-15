<?php
$type = $_GET["type"];
?>
<script>
    init.push(function () {
        $('#jq-datatables-example').dataTable();
        $('#jq-datatables-example_wrapper .table-caption').text('Banking <?php echo strtoupper($type) ?> Account Information');
        $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
    });
</script>
<div class="row">
    <div class="col-sm-12">
        <form class="panel form-horizontal" method="POST" >
            <div class="panel-heading" ><span class="panel-title" style="text-transform: capitalize">
                    Add Payment Summary =>  <b>Project Name</b></span>
            </div>
            <div class="panel-body no-padding-hr">
                <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
                    <div class="row">
                        <label class="col-sm-2 ">Bank:</label>
                        <div class="col-sm-4">CIBC</div>
                        <label class="col-sm-2 ">Account Number:</label>
                        <div class="col-sm-4">47-54212</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 ">Opening Balance:</label>
                        <div class="col-sm-4">$0.00 </div>
                        <label class="col-sm-2 ">Debits:</label>
                        <div class="col-sm-4">$69,030.76 </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 ">Ending Balance:</label>
                        <div class="col-sm-4">$72.59 </div>
                        <label class="col-sm-2 ">Credits:</label>
                        <div class="col-sm-4">$69,103.35 </div>
                    </div>
                </div>

            </div>
            <div>


            </div>

        </form>
    </div>
</div>


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
            <div class="table-primary">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                    <thead>
                        <tr>
                            <th style="width: 10%">#</th>
                            <th>Month</th>
                            <th>Day</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Balance</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($index = 1; $index <= 100; $index++) {
                            ?>
                            <tr>
                                <td style="width: 10%"><?php echo $index ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



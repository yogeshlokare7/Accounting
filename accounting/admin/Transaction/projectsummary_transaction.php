<?php ?>
<div class="row">
    <div class="col-sm-12">
        <form class="panel form-horizontal" method="POST" >
            <div class="panel-heading" >
                <span class="panel-title" style="text-transform: capitalize">Project Report</span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-2">
                        <label class="control-label">Project Name : </label>
                    </div>
                    <div class="col-sm-7">
                        <select class="form-control">
                            <option>Please select</option>
                            <option value="1">Vantage Squamish</option>
                            <option value="2">Epix Squamish Limited Partnership</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <input type="submit"  class="btn btn-primary" name="btnSubmit" value="Search" style="margin-right: 5px;"/>
                        <a class="btn btn-primary" href="mainpage.php?pagename=projectsummary_transaction">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="table-primary">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
        <thead>
            <tr>
                <th style="width: 3%">#</th>
                <th style="width: 40%"></th>
                <th>Total</th>
                <th>Per Unit</th>
                <th>Per SF</th>
            </tr>
        </thead>
        <?php
        if (isset($_POST["btnSubmit"]) || count($_POST) != 0) {
            $arrayMockData = mockData();
            $arrayKeys = array_keys($arrayMockData);
            for ($index = 0; $index < count($arrayKeys); $index++) {
                $dataFromArray = $arrayMockData[$arrayKeys[$index]];
                ?>
                <tbody>
                    <?php
                    $innerIndex = 1;
                    foreach ($dataFromArray as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $innerIndex ?></td>
                            <td><?php echo $value ?></td>
                            <td>$<?php echo number_format(rand(1111111, 9999999)) ?></td>
                            <td>$<?php echo number_format(rand(111111, 999999)) ?></td>
                            <td>$<?php echo number_format(rand(11, 99)) ?></td>
                        </tr>
                        <?php
                        $innerIndex++;
                    }
                    ?>
                </tbody>
                <?php
            }
        }
        ?>
    </table>
</div>

<?php

function mockData() {
    $array["hard"][0] = "Total Hard Construction Cost Budget";
    $array["hard"][1] = "Approved Hard Cost Revisions";
    $array["hard"][2] = "Final Hard Construction Cost Budget";

    $array["soft"][0] = "Total Soft Cost Budget";
    $array["soft"][1] = "Approved Soft Cost Revisions";
    $array["soft"][2] = "Final Soft Cost Budget";

    $array["land"][0] = "Total Land Cost Budget";
    $array["land"][1] = "Approved Land Cost Revisions";
    $array["land"][2] = "Final Land Cost Budget";

    $array["financing"][0] = "Total Financing Cost Budget";
    $array["financing"][1] = "Approved Financing Cost Revisions";
    $array["financing"][2] = "Final Financing Cost Budget";

    $array["contingency"][0] = "Total Hard Cost Contingency";
    $array["contingency"][1] = "Total Soft Cost Contingency";
    $array["contingency"][2] = "Total Project Contingency";

    $array["loan"][0] = "Approved 1st Mortgage Loan";
    $array["loan"][1] = "Approved 2nd Mortgage Loan";
    $array["loan"][2] = "Total Registered Debt";


    return $array;
}
?>
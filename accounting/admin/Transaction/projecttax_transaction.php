<?php ?>
<div class="row">
    <div class="col-sm-12">
        <form class="panel form-horizontal" method="POST" >
            <div class="panel-heading" >
                <span class="panel-title" style="text-transform: capitalize">Project Tax Report</span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-2">
                        <label class="control-label">Project&nbsp;Name&nbsp;:&nbsp;</label>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control">
                            <option>Please select</option>
                            <option value="1">Vantage Squamish</option>
                            <option value="2">Epix Squamish Limited Partnership</option>
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <label class="control-label">Tax&nbsp;Type&nbsp;:&nbsp;</label>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control">
                            <option>Please select</option>
                            <option value="1">GST</option>
                            <option value="2">PST</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <input type="submit"  class="btn btn-primary" name="btnSubmit" value="Search" style="margin-right: 5px;"/>
                        <a class="btn btn-primary" href="mainpage.php?pagename=projecttax_transaction">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<?php
if (count($_POST) > 0) {
    ?>


    <div class="table-primary">
        <?php
        $array = mockData();
        $index = 1;
        foreach ($array as $key => $value) {
            ?>
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                <thead>
                    <tr>
                        <th colspan="7"><?php echo $value ?></th>
                    </tr>
                    <tr>
                        <th style="width: 3%">#</th>
                        <th>Draw</th>
                        <th>Claim Date</th>
                        <th>GST Claimed</th>
                        <th>GST Received</th>
                        <th>Date Received</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $arrayMonth = getMonth();
                    $innert = 1;
                    foreach ($arrayMonth as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $index ?></td>
                            <td><?php echo $innert ?></td>
                            <td><?php echo $value ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                        $index ++;
                        $innert ++;
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
        ?>
    </div>
    <?php
}
?>
<?php

function mockData() {
    $array[0] = "Pre Construction Period GST Return";
    $array[1] = "Construction Period GST Return";
    return $array;
}

function getMonth() {
    $datearray[] = "July 31, 2017";
    $datearray[] = "August 31, 2017";
    $datearray[] = "September 30, 2017";
    $datearray[] = "October 31, 2017";
    $datearray[] = "November 30, 2017";
    return $datearray;
}
?>
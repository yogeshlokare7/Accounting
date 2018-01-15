<div class="row">
    <div class="col-sm-12">
        <form class="panel form-horizontal" method="POST" >
            <div class="panel-heading" ><span class="panel-title" style="text-transform: capitalize">
                    Add Payment Summary =>  <b>Project Name => Epix Squamish Limited Partnership</b></span>
            </div>
            <div class="panel-body no-padding-hr">
                <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
                    <div class="row">
                        <label class="col-sm-2 ">Purchase Order:</label>
                        <div class="col-sm-4">#O67JH</div>
                        <label class="col-sm-2 ">General&nbsp;Contractor:</label>
                        <div class="col-sm-4">Syncra Construction Corp.</div>
                    </div>
                    <hr>
                    <div class="row">
                        <label class="col-sm-2 ">Contact:</label>
                        <div class="col-sm-4">Craig Taylor</div>
                        <label class="col-sm-2 ">Sub-Trade:</label>
                        <div class="col-sm-4">
                            Taylor Kurtz Architecture + Design Inc.
                            Suite 102, 1183 Odlum Drive
                            Vancouver, British Columbia
                            V5L 2P6
                            Craig Taylor

                        </div>
                    </div>
                </div>

            </div>
            <div class="panel-body" class="col-sm-6" style="margin-top: -30px;">
                <div class="table-primary"  >
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th style="width: 10%">#</th>
                                <th>Purcahse Order</th>
                                <th style="width: 20%">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $datarray = getPrePopulatedData();
                            for ($index = 1; $index <= 5; $index++) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index ?></td>
                                    <td>
                                        <select class="form-control">
                                            <?php
                                            foreach ($datarray as $key => $value) {
                                                ?>
                                                <option><?php echo $value ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="" class="form-control" style="padding: 0px;margin: 0px;">
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-footer text-left">
                <a class="btn btn-success" href="mainpage.php?pagename=adddetailsummary_payment">
                    Create Purchase Order
                </a>
                <input type="submit"  class="btn btn-primary" name="btnSubmit" value="Cancel"/>
            </div>
        </form>
    </div>
</div>

<?php

function getPrePopulatedData() {
    $array = array();
    $array[] = "Pre-Design";
    $array[] = "Schematic Design";
    $array[] = "Design Development";
    $array[] = "Contract Documents";
    $array[] = "Building Permit & Tendering";
    $array[] = "Construction Administration";
    ///
    $array[] = "Part A: Schematic Design Stage";
    $array[] = "Part B: Design Development - Building Code Services";
    $array[] = "Part C: Design Development - Alternative Solution Services";
    $array[] = "Part D: Construction Stage - Shop Drawing Review & Field Services";
    $array[] = "Part E: Services Related To Mid-Rise Construction";
    return $array;
}
?>



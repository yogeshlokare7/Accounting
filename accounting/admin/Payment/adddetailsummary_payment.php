<div class="row">
    <div class="col-sm-12">
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
            <?php
            $datarray = getPrePopulatedData();
            $index = 1;
            foreach ($datarray as $key => $value) {
                ?>
                <div class="table-primary"  >
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th colspan="11"><?php echo $value ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: greenyellow">
                                <td>Invoices</td>	
                                <td>Date</td>
                                <td>Gross Price</td>
                                <td>Holdback</td>
                                <td>Net Price</td>
                                <td>Net Price (inc. GST)</td>
                                <td>Paid</td>
                                <td>Cleared</td>
                                <td>Cheque</td>
                                <td>Comment</td>
                            </tr>
                            <tr >
                                <td>44432</td>	
                                <td>October 30, 2016</td>
                                <td>$3,251.25 </td>
                                <td></td>
                                <td>$3,251.25 </td>
                                <td>$3,413.81 </td>
                                <td>Yes</td>
                                <td></td>
                                <td>30</td>
                                <td></td>
                            </tr>
                            <tr >
                                <td colspan="2"><b>Running Total</b></td>	
                                <td><b><?php echo rand(4444, 8888) ?>.<?php echo rand(44, 88) ?></b></td>
                                <td><b>$ 00.00</b></td>
                                <td><b><?php echo rand(4444, 8888) ?>.<?php echo rand(44, 88) ?></b></td>
                                <td colspan="5">
                                    <span class="panel-title">
                                        <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add Payment Summary </button>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
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
    return $array;
}
?>

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
                                <label class="control-label">Invoices *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Date *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Gross Price*</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Contractor Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Holdback *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Net Price *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Net Price (inc. GST)*</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Contractor Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Paid *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Cleared *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Cheque*</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Contractor Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Comment *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
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
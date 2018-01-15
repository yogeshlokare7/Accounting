<div class="row">
    <div class="col-sm-12">
        <div class="panel-heading" >
            <span class="panel-title" style="text-transform: capitalize">Add Payment Summary =>  <b>Project Name</b></span>
        </div>
        <div class="panel-body no-padding-hr">
            <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
                <div class="row">
                    <label class="col-sm-2 ">Number&nbsp;of&nbsp;Units</label>
                    <div class="col-sm-2">75</div>
                    <label class="col-sm-2 ">Total&nbsp;Square&nbsp;Feet</label>
                    <div class="col-sm-2">68,332</div>
                    <label class="col-sm-2 ">Average&nbsp;Square&nbsp;Feet:</label>
                    <div class="col-sm-2">911</div>
                </div>

                <div class="row">
                    <label class="col-sm-2 ">Total Unit</label>
                    <div class="col-sm-2">75</div>
                    <label class="col-sm-2 ">Total SqFt</label>
                    <div class="col-sm-2">68,332</div>
                    <label class="col-sm-2 ">Avg SqFt</label>
                    <div class="col-sm-2">911</div>
                </div>
                <div class="row">
                    <label class="col-sm-2 ">Budget Increases</label>
                    <div class="col-sm-2">75</div>
                    <label class="col-sm-2 ">Final Budget</label>
                </div>
                <hr/>    
                <div class="row">
                    <label class="col-sm-2 ">Select Type :</label>
                    <div class="col-sm-10">
                        <?php
                        $prePopulatedData = getPrePopulatedData();
                        foreach ($prePopulatedData as $key => $value) {
                            echo "" . $value . " , ";
                        }
                        ?>
                    </div>
                </div>
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
        <div class="table-primary" style="overflow: auto;border: solid 1px white;" >
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-responsive" id="jq-datatables-example">
                <thead>
                    <tr>
                        <th colspan="12"><?php echo $value ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color: greenyellow">
                        <td>Cost Code</td>	
                        <td>Line Item</td>	
                        <td>Total Budget</td>	
                        <td>Per Unit</td>	
                        <td>Per SF</td>	
                        <td>Budget Increases</td>	
                        <td>Final Budget</td>	
                        <td>Sub-Contractor</td>	
                        <td>Pre-Development</td>	
                        <td>Draws</td>
                        <td>Cost-In-Place</td>	
                        <td>Cost-To-Complete</td>
                    </tr>
                    <tr >
                        <td>&nbsp;</td>	
                        <td></td>	
                        <td></td>	
                        <td></td>	
                        <td></td>	
                        <td></td>	
                        <td></td>	
                        <td></td>	
                        <td></td>	
                        <td></td>	
                        <td></td>	
                        <td></td>	
                    </tr>
                    <tr >
                        <td>
                            <span class="panel-title">
                                <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add</button>
                            </span>
                        </td>	
                        <td><b>Total</b></td>	
                        <td>$2,105,243 </td>	
                        <td>$28,070 </td>	
                        <td>$30.81 </td>	
                        <td>$00.00</td>	
                        <td>$2,105,243.37 </td>	
                        <td></td>	
                        <td></td>	
                        <td></td>
                        <td>$20,222</td>	
                        <td>$2,085,021</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
    }
    ?>
</div>
<?php

function getPrePopulatedData() {
    $array = array();
    $array[] = "Hard Construction Cost";
    $array[] = "Soft Construction Cost	";
    $array[] = "Land Related Cost";
    $array[] = "Financing Cost";
    $array[] = "GST Tracking";
    $array[] = "Total DRAW";
    return $array;
}
?>
<!--- ADD POP UP DIALOG ---->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Add Summary</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Select Type *</label>
                                <select class="form-control">
                                    <?php
                                    $subData = subData();
                                    foreach ($subData as $key => $value) {
                                        ?>
                                        <option ><?php echo $value ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Cost Code *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Line Item *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Total Budget*</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Contractor Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Per Unit *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Per SF*</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Budget Increases*</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Contractor Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Final Budget *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->

                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Sub-Contractor *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Pre-Development*</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Contractor Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Cost-In-Place *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Developer Name" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                        <div class="col-sm-4">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Cost-To-Complete*</label>
                                <input type="text" name="address" autofocus="" placeholder="Enter Contractor Contact here" class="form-control">
                            </div>
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="table-primary" style="overflow: auto;border: solid 1px white;" >
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-responsive" id="jq-datatables-example">
                            <tbody>
                                <tr style="background-color: greenyellow">
                                    <?php
                                    for ($index1 = 1; $index1 < 14; $index1++) {
                                        ?>
                                        <td >Draw <?php echo $index1 ?></td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                <tr >
                                <tr style="background-color: greenyellow">
                                    <?php
                                    for ($index2 = 1; $index2 < 14; $index2++) {
                                        ?>
                                        <td  style="padding: 1px;margin: 1px;">
                                            <input type="text" style="width: 100%;padding: 0px;margin: 0px;">
                                        </td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>  
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Save"/>  
                    <button type="button"  class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div> 
    </div>  
</div>  

<?php

function subData() {
    $arraysub[] = "Syncra Pre-Construction Fee";
    $arraysub[] = "Syncra Construction Management Fee";
    $arraysub[] = "Project Manager";
    $arraysub[] = "Superintendent";
    $arraysub[] = "Site Labour";
    $arraysub[] = "Traffic Control";
    $arraysub[] = "Safety Officer / First Aid (10 Hrs Per Day)";
    $arraysub[] = "Independent Safety Inspections";
    $arraysub[] = "First Aid Room / Trailer";
    $arraysub[] = "First Aid / Safety Supplies";
    $arraysub[] = "Fire Control";
    return $arraysub;
}
?>
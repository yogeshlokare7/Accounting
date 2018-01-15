<div class="row">
    <div class="col-sm-12">
        <div class="panel-heading" >
            <span class="panel-title" style="text-transform: capitalize">
                Add Payment Summary => <b>Project Name</b>
            </span>
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
                <hr/>    
                <div class="row">
                    <label class="col-sm-2 ">Select Type :</label>
                    <div class="col-sm-10">
                        <?php
                        $prePopulatedData = getPrePopulatedData();
                        ?>
                        <select multiple="multiple" id="jquery-select2-multiple" class="form-control">
                            <optgroup label="Construction">
                                <?php
                                foreach ($prePopulatedData as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value ?>"><?php echo $value ?></option>
                                    <?php
                                }
                                ?>
                            </optgroup>
                        </select>                
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="mainpage.php?pagename=adddetailsummarytransaction_payment" class="btn btn-primary" >Save</a>
                <button type="button"  class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

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
<script>
    init.push(function() {
        // Multiselect
        $("#jquery-select2-multiple").select2({
            placeholder: "Select a State"
        });
    });
</script>

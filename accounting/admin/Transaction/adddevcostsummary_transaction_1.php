<?php
$array = array();
$array["Division 1"] = "General Requirements";
$array["Division 2"] = "Sitework";
$array["Division 3"] = "Concrete";
$array["Division 4"] = "Masonry";
$array["Division 5"] = "Metals";
$array["Division 6"] = "Wood & Plastics";
$array["Division 7"] = "Thermal & Moisture";
$array["Division 8"] = "Doors & Windows";
$array["Division 9"] = "Finishes";
$array["Division 10"] = "Specialties";
$array["Division 11"] = "Equipment";
$array["Division 12"] = "Furnishings";
$array["Division 13"] = "Special Construction";
$array["Division 14"] = "Conveying Systems";
$array["Division 15"] = "Mechanical Systems";
$array["Division 16"] = "Electrical Systems";
$array["Division 17"] = "Heritage Building Works";
$array["Division 18"] = "Cash Allowances";
$array["Division 19"] = "Fees & Contingencies";
$array["Division 20"] = "Change Orders";


///////////////////////////

$array1[] = "Syncra Pre-Construction Fee";
$array1[] = "Syncra Construction Management Fee";
$array1[] = "Project Manager";
$array1[] = "Superintendent";
$array1[] = "Site Labour";
$array1[] = "Traffic Control";
$array1[] = "Safety Officer / First Aid (10 Hrs Per Day)";
$array1[] = "Independent Safety Inspections";
$array1[] = "First Aid Room / Trailer";
$array1[] = "First Aid / Safety Supplies";
$array1[] = "Fire Control";
$array1[] = "Site Safety Plan";
$array1[] = "Security NIC";
$array1[] = "Safety Video & Equipment";
$array1[] = "Employee/Travel Expense";
$array1[] = "Site Staff Parking";
$array1[] = "Site Vehicles";
$array1[] = "Living Out Allowance";
$array1[] = "Field Offices & Sheds - Rental";
$array1[] = "Field Offices & Sheds - Delivery, Placement, Removal";
$array1[] = "Field Office Supplies";
$array1[] = "Cartage";
$array1[] = "Lock-Up (Storage)";
$array1[] = "Site Fencing";
$array1[] = "Covered Walkway, hoarding with trailers";
$array1[] = "Covered Walkway, hoarding w/o trailers";
$array1[] = "Project Signage";
$array1[] = "Site Clean Up - Progressive Clean Up";
$array1[] = "Garbage Bins - Progressive Clean Up";
$array1[] = "Final Clean Up - Interior";
$array1[] = "Final Clean Up - Exterior";
$array1[] = "Radios & Cell Phones";
$array1[] = "Job Photos - Condition Document";
$array1[] = "Plans & Printing";
$array1[] = "Temporary Equipment - Rental, Light Tools";
$array1[] = "Temporary Equipment - Rental, Heavy Tools";
$array1[] = "Submersible Pumps";
$array1[] = "Inspect & Test - Concrete";
$array1[] = "Legal Survey";
$array1[] = "Survey Equipment";
$array1[] = "Site & Building Layout Survey (Ongoing)";
$array1[] = "Excavation / Shoring Layout";
$array1[] = "Bobcat/Forklift Allowance";
$array1[] = "Guard Rails, Scaffolding, Platforms";
$array1[] = "Elevator Operator";
$array1[] = "Trucking & Delivery";
$array1[] = "Finish Protection";
$array1[] = "Street Cleaning";
$array1[] = "Weather Enclosures";
$array1[] = "Winter Conditions";
$array1[] = "Temporary - Telephone";
$array1[] = "Field Office Equipment - Computer, Photocopier";
$array1[] = "Temporary Power, Hook-Up";
$array1[] = "Temporary Power, Shack & Equipment";
$array1[] = "Temporary Power, Consumption";
$array1[] = "Temporary Power, Line Protection/Shielding";
$array1[] = "Temporary Water, Connection";
$array1[] = "Temporary Water";
$array1[] = "Temporary Heat";
$array1[] = "Temporary Ventilation";
$array1[] = "Temporary Lighting";
$array1[] = "Temporary Toilets";
$array1[] = "Temporary Sidewalk Rental NIC";
$array1[] = "Temporary Street Parking Meter Rental NIC";
$array1[] = "Project Wrap-Up Insurance NIC";
$array1[] = "Operations Manuals";
?>
<form name="frmEntry" method="post">
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group no-margin-hr">
                    <label class="control-label">Date</label>
                    <input type="text" name="accountname" maxlength="11" autofocus="" placeholder="Enter Account Name" class="form-control">
                </div>

            </div><!-- col-sm-6 -->
            <div class="col-sm-4">
                <div class="form-group no-margin-hr">
                    <label class="control-label">Project Name *</label>
                    <input type="text" name="accountname" maxlength="30" autofocus="" placeholder="Enter Account Name" class="form-control">
                </div>
            </div><!-- col-sm-6 -->
            <div class="col-sm-4">
                <div class="form-group no-margin-hr">
                    <label class="control-label">Project Type</label>
                    <select class="form-control"  name="accounttype">
                        <option>Select Account Type</option>
                        <option>Income</option>
                        <option>Expense</option>
                    </select>
                </div>
            </div><!-- col-sm-6 -->
        </div><!-- row -->

        <div class="row">

            <div class="col-sm-4">
                <div class="form-group no-margin-hr">
                    <label class="control-label">Address *</label>
                    <input type="text" name="accountname" maxlength="200" autofocus="" placeholder="Enter Account Name" class="form-control">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group no-margin-hr">
                    <label class="control-label">Residential Unit*</label>
                    <input type="text" name="accountname" maxlength="11" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group no-margin-hr">
                    <label class="control-label">Commertial Unit</label>
                    <input type="text" name="accountname" maxlength="11" onkeypress="return chkNumericKey(event)" autofocus="" placeholder="Enter Account Name" class="form-control">
                </div>
            </div><!-- col-sm-6 -->
        </div><!-- row -->
        <div class="row">
            <div class="col-sm-4">
            </div>
        </div>
    </div>  

    <div class="row">
        <div class="col-sm-12">
            <script>
                init.push(function () {
                    $('#jq-datatables-example').dataTable();
                    $('#jq-datatables-example_wrapper .table-caption').text('Project Master Information');
                    $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
                });
            </script>
            <div class="panel">
                <div class="panel-body">
                    <div class="table-primary">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                            <thead>
                                <tr>
                                    <th colspan="11">Development Cost Details </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <th></th>
                                    <th></th>
                                    <th>Total</th>
                                    <th>Per Unit</th>
                                    <th>Per SF</th>
                                    <th>Budget In</th>
                                    <th>Final Bud</th>
                                    <th>Pre Dev</th>
                                    <th>Cost In Place</th>
                                    <th>Cost To Com</th>
                                    <th>Draw</th>
                                </tr>

                                <?php
                                foreach ($array as $key => $value) {
                                    ?>
                                    <tr class="odd gradeX" >
                                        <td></td>
                                        <td><?php echo $value ?></td>
                                        <td>$<?php echo rand(1000, 9955) ?>.00</td>
                                        <td>$<?php echo rand(1000, 9955) ?>.00</td>
                                        <td>$<?php echo rand(1000, 9955) ?>.00</td>
                                        <td>$<?php echo rand(1000, 9955) ?>.00</td>
                                        <td>$<?php echo rand(1000, 9955) ?>.00</td>
                                        <td>$<?php echo rand(1000, 9955) ?>.00</td>
                                        <td>$<?php echo rand(1000, 9955) ?>.00</td>
                                        <td></td>
                                        <td><a href="" class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">add</a></td>
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
    </div>
</form>


<!--- ADD POP UP DIALOG ---->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Add Development Cost Information</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <tbody>
                            <tr class="odd gradeX">
                                <th></th>
                                <th>Tota  l</th>
                                <th>Per Unit</th>
                                <th>Per SF</th>
                                <th>Budget In</th>
                                <th>Final Bud</th>
                                <th>Pre Dev</th>
                                <th>Cost In Place</th>
                                <th>Cost To Com</th>
                                <th>Draw</th>
                            </tr>

                            <?php
                            foreach ($array1 as $key => $value) {
                                ?>
                                <tr class="odd gradeX" >
                                    <td><?php echo $value ?></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                     <td><input type="text" class="form-control"></td>
                                    <td><a href="" class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">add</a></td>
                                </tr> 
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>  

            </form>
        </div> 
    </div>  
</div>  
<!--- ADD POP UP DIALOG ---->
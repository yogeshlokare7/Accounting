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
                                    <th colspan="5">Project Details</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="odd gradeX">
                                    <th></th>
                                    <th></th>
                                    <th>Total</th>
                                    <th>Per Unit</th>
                                    <th>Per SF</th>
                                </tr>

                                <tr class="odd gradeX">
                                    <td></td>
                                    <td>Total Hard Construction Cost Budget</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   
                                    
                               
                                </tr>
                                 <tr class="odd gradeX">
                                    <td></td>
                                    <td>Approved Hard Cost Revisions</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                               <tr class="odd gradeX">
                                    <td></td>
                                    <td>Final Hard Construction Cost Budget</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                   
                                   <tr class="odd gradeX">
                                    <td></td>
                                    <td>Total Soft Cost Budget</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                   <tr class="odd gradeX">
                                    <td></td>
                                    <td>Approved Soft Cost Revisions</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                   <tr class="odd gradeX">
                                    <td></td>
                                    <td>Final Soft Cost Budget</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                   <tr class="odd gradeX">
                                    <td></td>
                                    <td>Final Soft Cost Budget</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                   <tr class="odd gradeX">
                                    <td></td>
                                    <td>Total Land Cost Budget</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                   <tr class="odd gradeX">
                                    <td></td>
                                    <td>Approved Land Cost Revisions</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                   <tr class="odd gradeX">
                                    <td></td>
                                    <td>Final Land Cost Budget</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                   <tr class="odd gradeX">
                                    <td></td>
                                    <td>Total Financing Cost Budget</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                   <tr class="odd gradeX">
                                    <td></td>
                                    <td>Approved Financing Cost Revisions</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                    <tr class="odd gradeX">
                                    <td></td>
                                    <td>Final Financing Cost Budget</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                    <tr class="odd gradeX">
                                    <td></td>
                                    <td>Total Hard Cost Contingency</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                    <tr class="odd gradeX">
                                    <td></td>
                                    <td>Total Soft Cost Contingency</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                    <tr class="odd gradeX">
                                    <td></td>
                                    <td>Total Project Contingency</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                    <tr class="odd gradeX">
                                    <td></td>
                                    <td>Final Development Budget</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                    <tr class="odd gradeX">
                                    <td></td>
                                    <td>Total Project Contingency</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                    <tr class="odd gradeX">
                                    <td></td>
                                    <td>Approved 1st Mortgage Loan</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                    <tr class="odd gradeX">
                                    <td></td>
                                    <td>Approved 2nd Mortgage Loan</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                    <tr class="odd gradeX">
                                    <td></td>
                                    <td>Total Registered Debt</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                    </tr> 
                                    <tr class="odd gradeX">
                                    <td></td>
                                    <td>Equity Requirement</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   </tr> 
                                
                                
                                

                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
$tblname = "category_master";
if (count($_POST) > 0) {
    MysqlConnection::insert($tblname, $_POST);
}
$resultset = MysqlConnection::fetchAll($tblname);
print_r($resultset);
?>
<div class="row">
    <div class="col-sm-12">
        <script>
            init.push(function () {
                $('#jq-datatables-example').dataTable();
                $('#jq-datatables-example_wrapper .table-caption').text('Category Information');
                $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
            });
        </script>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">View <?php echo $explode[1] ?></span>
                <span class="panel-title">&nbsp;|&nbsp;</span>
                <span class="panel-title">
                    <button class="btn btn-success btn-xs btn-outline btn-flat btn-rounded" data-toggle="modal" data-target="#myModal">Add Category</button>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Id</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Category Type Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            foreach ($resultset as $key => $value) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $index ?></td>
                                    <td><?php echo $value["category_id"] ?></td>
                                    <td><?php echo $value["name"] ?></td>
                                    <td><?php echo $value["description"] ?></td>
                                    <td><?php echo $value["categorytype_id"] ?></td>
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
<!--- ADD POP UP DIALOG ---->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Add Category Information</h4>
            </div>
            <form name="frmEntry" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Category Name *</label>
                                <input type="text" name="name" autofocus="" placeholder="Enter Category Type" class="form-control">
                            </div>
                        </div>
                    </div><!-- row -->
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Description *</label>
                                <input type="text" name="description" autofocus="" placeholder="Enter Description" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label class="control-label">Category Type Id*</label>
                                <input type="text" name="categorytype_id" autofocus="" placeholder="Enter Description" class="form-control">
                            </div>
                        </div>
                    </div><!-- row -->
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
<!--- ADD POP UP DIALOG ---->
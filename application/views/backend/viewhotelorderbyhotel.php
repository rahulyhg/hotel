<div id="page-title">
<!--       <a class="btn btn-primary btn-labeled fa fa-plus margined pull-right" href="<?php echo site_url('site/createorder'); ?>">Create</a>-->
<div class=" pull-right col-md-1 createbtn" ><a class="btn btn-primary btn-labeled fa fa-plus margined pull-right" href="<?php echo site_url('site/exportordercsvbyhotel'); ?>" target="_blank"><i class="icon-plus"></i>Export to CSV </a></div>

<!--<div class=" pull-right col-md-1 createbtn" ><a class="btn btn-primary" href="<?php echo site_url('site/exportproductcsv'); ?>"target="_blank"><i class="icon-plus"></i>Export to CSV </a></div>-->
    <h1 class="page-header text-overflow">Order Details</h1>
</div>

<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel drawchintantable">

                <?php $this->chintantable->createsearch("");?>


                <div class="fixed-table-container">
                    <div class="fixed-table-body">
                        <table class="table table-hover" id="" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="username">User</th>
                                    <th data-field="adminname">Admin</th>
                                    <th data-field="hotel">Hotel</th>
                                    <th data-field="days">Days</th>
                                    <th data-field="userrate">User Rate</th>
                                    <th data-field="hotelrate">Hotel Rate</th>
                                    <th data-field="status">Status</th>
                                    <th data-field="price">Price</th>
                                    <th data-field="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="fixed-table-pagination" style="display: block;">
                        <div class="pull-left pagination-detail">
                                    <?php $this->chintantable->createpagination();?>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

       
        <script>
            function drawtable(resultrow) {
//                <a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editorder?id=');?>" + resultrow.id + "'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deleteorder?id='); ?>" + resultrow.id + "'><i class='icon-trash '></i></a>
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.username + "</td><td>" + resultrow.adminname + "</td><td>" + resultrow.hotelname + "</td><td>" + resultrow.days + "</td><td>" + resultrow.userrate + "</td><td>" + resultrow.hotelrate + "</td><td>" + resultrow.statusname + "</td><td>" + resultrow.price + "</td><td></td></tr>";
            }
            generatejquery("<?php echo $base_url;?>");
        </script>
    </div>
</div>
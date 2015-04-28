<div id="page-title">
    <a href="<?php echo site_url('site/vieworder'); ?>" class="btn btn-primary btn-labeled fa fa-arrow-left margined pull-right">Back</a>

    <h1 class="page-header text-overflow">Order Details</h1>
</div>

<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
               <div class="panel-heading">
							<h3 class="panel-title">Create Order</h3>
						</div>
            <div class="panel-body">
                <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createordersubmit");?>' enctype='multipart/form-data'>
                    <div class="panel-body">
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">User</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown( "user",$user,set_value( 'user'), "class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Admin</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown( "admin",$admin,set_value( 'admin'), "class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Hotel</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown( "hotel",$hotel,set_value( 'hotel'), "class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Days</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="days" value='<?php echo set_value(' days ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">User Rate</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="userrate" value='<?php echo set_value(' userrate ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Hotel Rate</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="hotelrate" value='<?php echo set_value(' hotelrate ');?>'>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Status</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown( "status",$status,set_value( 'status'), "class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Price</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="price" value='<?php echo set_value(' price ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?php echo site_url("site/vieworder"); ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                </form>
                </div>
        </section>
        </div>
    </div>
    </div>

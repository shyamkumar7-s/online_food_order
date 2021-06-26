<div class="conatiner">
    <form action="<?php echo base_url().'admin/electricpost/create_post';?>" method="POST"
        class="form-container mx-auto  shadow-container" id="myForm" style="width:90%" enctype="multipart/form-data">
        <h3 class="mb-3 p-2 text-center mb-3">Add New Post Details</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Post Name</label>
                    <input type="text" name="electric_post" id="electric_post" class="form-control
                    <?php echo (form_error('electric_post') != "") ? 'is-invalid' : '';?>" placeholder="Add Restaurant Name"
                    value="<?php echo set_value('electric_post');?>">

                    <?php echo form_error('electric_post'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label class="control-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control form-control-danger
                    <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>" placeholder="example@gmail.com"
                        value="<?php echo set_value('address');?>">

                        <?php echo form_error('address'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label class="control-label">Pincode</label>
                    <input type="number" name="pincode" id="pincode" class="form-control
                    <?php echo (form_error('pincode') != "") ? 'is-invalid' : '';?>" placeholder="1-(555)-555-5555"
                        value="<?php echo set_value('pincode');?>">
                        <?php echo form_error('pincode'); ?>
                    <span></span>
                </div>
        <div class="form-actions">
            <input type="submit" id="btn" name="submit" class="btn btn-success" value="Save">
            <a href="<?php echo base_url().'admin/electricpost/index'?>" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

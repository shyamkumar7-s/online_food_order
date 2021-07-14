<html>

<div class="container ">
<div class="row">
                <div class="col-md-12">
                    <?php $user = $this->session->userdata('user'); ?>
                    <div class='display-4 text-uppercase mb-2 restro-name'>
                    <?php echo ($user['username']); ?>
                    </div>
                </div>
                
            </div>
            <div class="col-md-12">
                <?php $user = $this->session->userdata('user');
                $data=$user["username"];
                ?>
                </div>
            <div class="row ">
                <div class="col-md-12 business-data"> 
                <div class="card">
                <p>A taste of home</p>
                <a href="<?php echo base_url()?>vendor/menu/index/<?php echo $data; ?>"
                        class="btn btn-primary mb-3">Our dishes</a>
                </div>
                <div class="card">
                <p>A taste of home</p>
                <a href="<?php echo base_url()?>vendor/menu/create_menu/<?php echo $data; ?>"
                        class="btn btn-primary mb-3">add a new dish</a>
               </div>
                <div class="card">
                <p>A taste of home</p>
                <a href="<?php echo base_url()?>vendor/orders/index/<?php echo $data; ?>"
                        class="btn btn-primary mb-3">show orders</a>
                        </div>
            </div>
</div>
</html>
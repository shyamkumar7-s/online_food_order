<html>
<div class="container">
    <div class="row">
       
        <div class="col-md-6 mt-3">
            <div class="row">
                <div class="col-md-12">
                    <h2>Restaurants Report</h2>
                    <?php $user = $this->session->userdata('user');                     ?>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo ($user['username']); ?>
                </a>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Restaurant Name</th>
                                <th>Total Sales</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php if(!empty($resReport)) {?>
                            <?php foreach($resReport as $report) { ?>
                            <tr>
                                <td><?php echo $report->r_id; ?></td>
                                <td><?php echo $report->name; ?></td>
                                <td><?php echo $report->price; ?></td>
                            </tr>
                            <?php } ?>
                            <?php } else {?>
                            <tr>
                                <td colspan="4">Records not found</td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <a href="<?php $id=1; echo base_url().'admin/home/generate_pdf/'.$id; ?>"
                        class="btn btn-success mt-3">Download Report</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="row">
                <div class="col-md-12">
                    <h2>Dishes Report</h2>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Dish Name</th>
                                <th>Ordered Count</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php if(!empty($dishReport)) {?>
                            <?php foreach($dishReport as $report) { ?>
                            <tr>
                                <td><?php echo $report->d_id; ?></td>
                                <td><?php echo $report->d_name; ?></td>
                                <td><?php echo $report->qty; ?></td>
                            </tr>
                            <?php } ?>
                            <?php } else {?>
                            <tr>
                                <td colspan="4">Records not found</td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                <?php $user = $this->session->userdata('user');
                $data=$user["username"];
                ?>
                    <a href="<?php echo base_url()?>vendor/menu/index/<?php echo $data; ?>"
                        class="btn btn-success mb-3">undakunnu</a>
                </div>
                <div class="col-md-12">
                <a href="<?php echo base_url()?>vendor/menu/create_menu/<?php echo $data; ?>"
                        class="btn btn-success mb-3">undakkunnu</a>
                        </div>
                        <div class="col-md-12">
                <a href="<?php echo base_url()?>vendor/orders/index/<?php echo $data; ?>"
                        class="btn btn-success mb-3">parcel</a>
                        </div>
            </div>
        </div>
    </div>
</div>
</html>
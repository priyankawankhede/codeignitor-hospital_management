
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="zmdi zmdi-home"></i>Hospital</a></li>
                    
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
            <div class="row clearfix">
                
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card info-box-2 hover-zoom-effect social-widget facebook-widget shadow">
                        <br>
                        <div class="text-danger">Patients</div>
                        <div class="icon"><i class="zmdi zmdi-male-female"></i></div>                        
                        <div class="content">
                        <?php $date = date('Y-m-d'); ?>
                            <div class="text">Daily</div>
                            <div class="number"><?php foreach($daily_patients as $d){ echo $d['id']; } ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card info-box-2 hover-zoom-effect social-widget instagram-widget shadow">
                        <br>
                        <div class="text-danger">Patients</div>
                        <div class="icon"><i class="zmdi zmdi-male-female"></i></div>
                        <div class="content">
                            <div class="text">Monthly</div>
                            <div class="number"><?php foreach($monthly_patients as $m){ echo $m['id']; } ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card info-box-2 hover-zoom-effect social-widget twitter-widget shadow">
                        <br>
                        <div class="text-danger">Patients</div>
                        <div class="icon"><i class="zmdi zmdi-male-female"></i></div>
                        <div class="content">
                            <div class="text">Total</div>
                            <div class="number"><?php foreach($total_patients as $t){ echo $t['id']; } ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card w_data_1 shadow">
                        <div class="body">
                            <label for="">Patients Follow-up</label>
                            <div class="w_icon green"><i class="zmdi zmdi-male-female"></i></div>
                            <h4 class="mt-3 mb-0"></h4>
                            <span class="text-muted text-danger">Daily</span>
                            <div class="w_description text-success">                                
                                <?php 
                                    foreach($follow_up_daily as $t)
                                    {                                        
                                    
                                ?>
                                <h5><?php echo $t['id']; ?></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card w_data_1 shadow">
                        <div class="body">
                            <label for="">Patients Follow-up</label>
                            <div class="w_icon pink"><i class="zmdi zmdi-male-female"></i></div>
                            <h4 class="mt-3 mb-0"></h4>
                            <span class="text-muted text-danger">Monthly</span>
                            <div class="w_description text-success">                                
                                <?php 
                                    foreach($follow_up_monthly as $m)
                                    {                                        
                                    
                                ?>
                                <h5><?php echo $m['id']; ?></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card w_data_1 shadow">
                        <div class="body">
                            <label for="">Patients Follow-up</label>
                            <div class="w_icon cyan"><i class="zmdi zmdi-male-female"></i></div>
                            <h4 class="mt-3 mb-0"></h4>
                            <span class="text-muted text-danger">Total</span>
                            <div class="w_description text-success">                                
                                <?php 
                                    foreach($follow_up_total as $t)
                                    {                                        
                                    
                                ?>
                                <h5><?php echo $t['id']; ?></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div> 

                <!-- <div class="col-lg-3 col-md-4 col-6">
                    <div class="card w_data_1">
                        <div class="body">
                            <label for="">Product Amount</label>
                            <div class="w_icon green"><i class="zmdi zmdi-gamepad"></i></div>
                            <h4 class="mt-3 mb-0"></h4>
                            <span class="text-muted text-danger">Daily</span>
                            <div class="w_description text-success">                                
                                <?php 
                                    foreach($daily_amount as $d)
                                    {                                        
                                    
                                ?>
                                <h5><?php echo $d['total'].' ₹'; ?></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card w_data_1">
                        <div class="body">
                            <label for="">Product Amount</label>
                            <div class="w_icon pink"><i class="zmdi zmdi-gamepad"></i></div>
                            <h4 class="mt-3 mb-0"></h4>
                            <span class="text-muted text-danger">Total</span>
                            <div class="w_description text-success">                                
                                <?php 
                                    foreach($total_amount as $t)
                                    {                                        
                                    
                                ?>
                                <h5><?php echo $t['total'].' ₹'; ?></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-lg-1 col-md-4 col-6">
                </div>
                
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="card w_data_1">
                        <div class="body">
                            <label for="">Patients Fees</label>
                            <div class="w_icon blue"><i class="zmdi zmdi-male-female"></i></div>
                            <h4 class="mt-3 mb-0"></h4>
                            <span class="text-muted text-danger">Monthly</span>
                            <div class="w_description text-success">                                
                                <?php 
                                    foreach($monthly_patient_fees as $t)
                                    {                                        
                                    
                                ?>
                                <h5><?php echo $t['fees'].' ₹'; ?></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                </div> 

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="card w_data_1">
                        <div class="body">
                            <label for="">Product Amount</label>
                            <div class="w_icon blue"><i class="zmdi zmdi-gamepad"></i></div>
                            <h4 class="mt-3 mb-0"></h4>
                            <span class="text-muted text-danger">Monthly</span>
                            <div class="w_description text-success">                                
                                <?php 
                                    foreach($monthly_product_amount as $t)
                                    {                                        
                                    
                                ?>
                                <h5><?php echo $t['total'].' ₹'; ?></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>       
    </div>
</section>


<!-- designed and developed by priyanka wankhede -->
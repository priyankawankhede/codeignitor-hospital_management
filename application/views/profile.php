<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Profile</h2>
                    <ul class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li> -->
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                
               
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <!-- <button class="btn btn-info btn-icon float-right right_icon_toggle_btn" data-toggle="modal" data-target="<?php echo "#".'update_emp'.$e['id']; ?>"><i class="zmdi zmdi-edit"></i></button> -->
                </div>

            </div>
        </div> 
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    
                    <div class="card mcard_3">
                        <div class="body">
                        <?php 
                                foreach($patients as $p){
                            ?>
                            <?php 
                                if($p['photo'] == ''){
                            ?>
                            <a href="#"><img src="<?php echo base_url().'assets/images/profile_av.jpg'; ?>" class="rounded-circle shadow " alt="profile-image"></a>
                                <?php  }else{ ?>
                            <a href="#"><img src="<?php echo base_url().'images/'.$p['photo']; ?>" class="rounded-circle shadow " alt="profile-image"></a>
                                <?php } ?>
                            <h4 class="m-t-10"><?php echo $p['name']; ?></h4>                            
                            <div class="row">                                
                                <div class="col-3">                                    
                                    <b>Age</b><br>
                                    <b><?php echo $p['age']; ?></b>
                                </div>
                                <div class="col-4">                                    
                                    <b>Gender</b>
                                    <b><?php echo $p['sex']; ?></b>
                                </div>                                
                                <div class="col-5">                                    
                                    <b>Mobile</b><br>
                                    <b><?php echo $p['mobile']; ?></b>
                                </div>                            
                            </div>  
                                         
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            
                            <h4><font color="Red"><b>Personal Information</b></font></h4>
                            <b class=" text-dark"><font size="4">Address: </font></b>
                            <p><?php echo $p['address']; ?></p>
                            <hr>
                            <b class=" text-dark"><font size="4">Occupation: </font></b>
                            <p><?php echo $p['occupation']; ?></p>
                            <hr>
                            <b class=""><font size="4">Weight: </font></b>
                            <p><?php echo $p['weight']; ?></p>
                            
                        </div>                        
                    </div>  
                    
                    <div class="card">
                        <div class="body">
                            <h4><font color="Red"><b>On Examination</b></font></h4>
                            <b class=""><font size="4">1.Blood Pressure</font> </b>
                            <p><?php echo $p['bp'] ?></p>
                            <hr>
                            <b class=""><font size="4">2.Pulse: </font></b>
                            <p><?php echo $p['pulse'] ?></p>
                            <hr>
                            <b class=""><font size="4">3.Temperature: </font></b>
                            <p><?php echo $p['temperature'] ?></p>
                            
                         
                        </div>
                    </div> 
                    
                    
                </div>

                

                <div class="col-lg-8 col-md-12">  
                    <p class="text-right">Created on - <?php echo $p['created_at'] ?></p>
                    <div class="card">
                        <div class="body">
                            
                            <b class=""><font size="4">Diagnosis: </font></b>
                            <p><?php echo $p['diagnosis']; ?></p>
                            <hr>
                            <b class=""><font size="4">Present C/O: </font></b>
                            <p><?php echo $p['present_co']; ?></p>
                            <hr>
                            <b class=""><font size="4">Mental: </font></b>
                            <p><?php echo $p['mental']; ?></p>
                            <!-- <hr>
                            <b class="text-muted">Job type: </b>
                            <p>Priyanka</p> -->
                            
                        </div>
                    </div> 
                    
                    <div class="card">
                        <div class="body">
                            <h4><font color="Red"><b>Personal History</b></font></h4>
                            <b class=""><font size="4">1.Apetite </font></b>
                            <p><?php echo $p['apetite'] ?></p>
                            <hr>
                            <b class=""><font size="4">2.Thirst: </font></b>
                            <p><?php echo $p['thirst'] ?></p>
                            <hr>                           
                            <b class=""><font size="4">3.Tongue: </font></b>
                            <p><?php echo $p['tongue'] ?></p>
                            <hr>
                            <b class=""><font size="4">4.Bowel: </font></b>
                            <p><?php echo $p['bowel'] ?></p>
                            <hr>
                            <b class=""><font size="4">5.Urine: </font></b>
                            <p><?php echo $p['urine'] ?></p>
                            <hr>
                            <b class=""><font size="4">6.Sleep: </font></b>
                            <p><?php echo $p['sleep'] ?></p>
                            <hr>
                            <b class=""><font size="4">7.Dreams: </font></b>
                            <p><?php echo $p['dreams'] ?></p>
                            <hr>
                            <b class=""><font size="4">8.Menses: </font></b>
                            <p><?php echo $p['menses'] ?></p>
                            <hr>
                            <b class=""><font size="4">9.Habits: </font></b>
                            <p><?php echo $p['habits'] ?></p>
                                
                        </div>
                    </div>

                    <!-- <div class="card">
                        <div class="body">
                            
                            <b class=""><font size="4">Prescription</font></b>
                            <p><?php echo $p['prescription'] ?></p>
                           
                        </div>
                    </div> -->
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="body">
                           
                            <b class=""><font size="5" color="red">Past H/O:</font></b>
                            <p><?php echo $p['past_ho']; ?></p>
                            <hr>
                            
                        </div>
                    </div> 
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="body">
                            <h4><font color="red"><b>FAMILY H/O:</b></font></h4><br>
                            <p><?php echo $p['family_ho']; ?></p>
                            
                            <b class=""><font size="3">I. FATHER: </font></b><br>
                            <p><?php echo $p['father']; ?></p>

                            <b class=""><font size="3">Grandfather: </font></b><br>
                            <p><?php echo $p['grandfather']; ?></p>
                            
                            <b class=""><font size="3">GrandMother: </font></b><br>
                            <p><?php echo $p['grandmother']; ?></p>
                                
                            <hr>

                            <b class=""><font size="3">II. Mother: </font></b><br>
                            <p><?php echo $p['mother']; ?></p>

                            <b class=""><font size="3">Grandfather: </font></b><br>
                            <p><?php echo $p['grandfather1']; ?></p>
                            
                            <b class=""><font size="3">GrandMother: </font></b><br>
                            <p><?php echo $p['grandmother1']; ?></p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="body">
                            
                            <b class=""><font size="5" color="red">Prescription:</font></b>
                            <p><?php echo $p['prescription'] ?></p>
                           
                        </div>
                    </div>                            
                </div>
                <?php } ?>

               
                <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="body">
                                <center><h4><font color="red">PAST HISTORY</font></h4></center>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                            <thead>
                                                <tr>                                                    
                                                    <th>id</th>
                                                    <th>Date</th>
                                                    <th>Presciption</th>                                  
                                                    <th>Diagnosis</th>                                                    
                                                </tr>                          
                                            </thead>
                                            <tfoot>
                                                <tr>                                                    
                                                    <th>id</th> 
                                                    <th>Date</th>                                
                                                    <th>Presciption</th>                                  
                                                    <th>Diagnosis</th>                          
                                                </tr>                                       
                                            </tfoot>
                                            <tbody>
                                           
                                                <?php                                           
                                                    if(!empty($follow_up)){
                                                    $i=0;                                                     
                                                        foreach($follow_up as $f)
                                                    {                                                                      
                                                        $i++;
                                                ?>
                                                                                                                      
                                                <tr>
                                                    
                                                    <td><?php echo $i; ?></td> 
                                                    <td><?php echo $f['date']; ?></td>                                                  
                                                    <td><?php echo $f['prescription']; ?></td>
                                                    <td><?php echo $f['diagnosis']; ?></td>
                                                    
                                                </tr>
                                                
                                                <?php }} ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                </div>

                
                <div class="col-lg-12 col-md-12 col-sm-12">                    
                    <div class="card">
                       
                        <div class="body">      
                        <center><h4><font color="red">Reports</font></h4></center>                     
                            
                            <!-- <?php 
                                foreach($view as $v){
                            ?>
                                    <h4 for="">Patients Name - <?php echo $v['patient_name'].'('. $v['patients_id'] .')'; ?></h4>
                                    <b></b>
                            <?php } ?>
                             -->

                             <?php 
                                if(!empty($view))
                                {                                
                                
                            ?>
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <?php 
                                    foreach($view as $v){
                                ?>                               

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30">
                                    <?php 
                                        if($v['image1'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image1']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image1']; ?>"  alt=""></a> 
                                    <?php } ?>
                                </div>
                                
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image2'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image2']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image2']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>
                                
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image3'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image3']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image3']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>
                                
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image4'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image4']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image4']; ?>" alt=""></a> 
                                    <?php } ?>  
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image5'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image5']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image5']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30">
                                    <?php 
                                        if($v['image6'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image6']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image6']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image7'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image7']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image7']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>
                                
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image8'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image8']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image8']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image9'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image9']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image9']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>
                                
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image10'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image10']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image10']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image11'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image11']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image11']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image12'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image12']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image12']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image13'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image13']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image13']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image14'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image14']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image14']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                                    <?php 
                                        if($v['image15'] == ''){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                    <?php }else{ ?>

                                        <a href="<?php echo base_url().'/images/'.$v['image15']; ?>" > <img class="img-fluid img-thumbnail" src="<?php echo base_url().'/images/'.$v['image15']; ?>" alt=""></a> 
                                    <?php } ?>
                                </div>

                                <?php } ?>
                            </div>
                            
                            <?php }else{
                                echo "
                                <p>No Reports added..</p>
                                ";
                            } ?>                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="content">
    Designed and Developed by <font color="red">Priyanka K. Wankhede.</font>
</section>



<!-- designed and developed by PRIYANKA WANKHEDE -->
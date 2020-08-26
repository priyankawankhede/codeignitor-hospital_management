<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Patients</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>"><i class="zmdi zmdi-home"></i>Hospital</a></li>
                        
                        <li class="breadcrumb-item active">View</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                   
                </div>
            </div>
        </div> 
        <div class="container-fluid">
            <!-- Tabs With Icon Title -->
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="card">
                            <div class="body">
                            <button type="button" class="btn btn-success btn-round waves-effect m-r-20" data-toggle="modal" data-target="#add">Add Patients</button><br><br>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                            <thead>
                                                <tr>
                                                    <th>View Profile</th>
                                                    <th>id</th>                                                    
                                                    <th>Date</th>  
                                                    <th>Name</th>
                                                    <th>Age</th>                                      
                                                    <th>Mobile No.</th>
                                                    <th>Address</th>                                                    
                                                    <!-- <th>Diagnosis</th>
                                                    <th>Prescription</th>                                                                                                       -->
                                                    <th>Action</th>
                                                </tr>                          
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>View Profile</th>
                                                    <th>id</th>      
                                                    <th>Date</th>                                              
                                                    <th>Name</th>
                                                    <th>Age</th>                                     
                                                    <th>Mobile No.</th>
                                                    <th>Address</th>                                                   
                                                    <!-- <th>Diagnosis</th>
                                                    <th>Prescription</th>                                                     -->
                                                    <th>Action</th>
                                                </tr>                                       
                                            </tfoot>
                                            <tbody>
                                           
                                                <?php                                           
                                            
                                                    $i=0;                                                     
                                                        foreach($patient as $d)
                                                    {                                                                      
                                                        $i++;
                                                ?>
                                                                                                                      
                                                <tr>
                                                    <td><a href="<?php echo base_url().'patients/profile/'.$d['id']; ?>" class="btn btn-warning waves-effect waves-float btn-sm waves-green" title="View Profile"><i class="zmdi zmdi-account"></i></a></td>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $d['date']; ?></td>                                                     
                                                    <td><?php echo $d['name'].'-'.$d['id']; ?></td>
                                                    <td><?php echo $d['age'];?></td>                                                    
                                                    <td><?php echo $d['mobile']; ?></td> 
                                                    <td><?php echo $d['address']; ?></td>                                                    
                                                    <!-- <td><?php echo $d['diagnosis']; ?></td> 
                                                    <td><?php echo $d['prescription']; ?></td>                                                     -->
                                                                                                      
                                                    <td>
                                                        <a class="btn btn-success waves-effect waves-float btn-sm waves-green" data-toggle="modal" data-target="<?php echo '#'.'reject'.$d['id']; ?>" title="follow-up"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="btn btn-danger waves-effect waves-float btn-sm waves-red" data-toggle="modal" data-target="<?php echo '#'.'delete'.$d['id']; ?>" title="delete"><i class="zmdi zmdi-delete"></i></a>
                                                    </td>                           
                                                </tr>


                                      
                                                    <div class="modal fade" id="<?php echo 'reject'.$d['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalLabel">Patient Follow-up</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                    <form action="<?php echo base_url('patients/update'); ?>" method="post" enctype="multipart/form-data">
                                                                        <div class="row clearfix">     
                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Name<font color="red">*</font></b>
                                                                                    <input type="text" required class="form-control" name="name" placeholder="Add Name" value="<?php echo $d['name']; ?>"> 
                                                                                    <input type="text" class="form-control" name="id" placeholder="Add Name" value="<?php echo $d['id']; ?>" hidden>                                                                    
                                                                                </div>
                                                                            </div> 

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Age</b>
                                                                                    <input type="number" class="form-control" name="age" placeholder="Age" value="<?php echo $d['age']; ?>">                                                                    
                                                                                </div>
                                                                            </div> 

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Gender<font color="red">*</font></b>
                                                                                    <select class="form-control ms select2" name="sex">
                                                                                        <option value="<?php echo $d['sex']; ?>"><?php echo $d['sex']; ?></option>
                                                                                        <option value="Male">Male</option>
                                                                                        <option value="Female">Female</option>
                                                                                        <option value="Transgender">Transgender</option>
                                                                                    </select>                                                                   
                                                                                </div>
                                                                            </div> 

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Mobile No</b>
                                                                                    <input type="number" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $d['mobile']; ?>">                                                      
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Weight</b>
                                                                                    <input type="text" class="form-control" name="weight" placeholder="Weight" value="<?php echo $d['weight']; ?>">                                                      
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Address</b>
                                                                                    <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $d['address']; ?>">                                                      
                                                                                </div>
                                                                            </div> 

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>District</b>
                                                                                    <input type="text" class="form-control" name="district" placeholder="District" value="<?php echo $d['district']; ?>">                                                      
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Date</b>
                                                                                    <input type="date" class="form-control" name="date" placeholder="" value="<?php echo $d['date']; ?>">                                                      
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Occupation</b>
                                                                                    <input type="text" class="form-control" name="occupation" placeholder="Add Occupation" value="<?php echo $d['occupation']; ?>">                                                      
                                                                                </div>
                                                                            </div>                                                                            

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Present c/o</b>
                                                                                    <textarea type="text" class="form-control" name="present_co" placeholder="Enter Here" rows="9"><?php echo $d['present_co']; ?></textarea>                                                     
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Diagnosis</b>
                                                                                    <textarea type="text" class="form-control" name="diagnosis" placeholder="Diagnosis" rows="4" value="<?php echo $d['diagnosis']; ?>"><?php echo $d['diagnosis']; ?></textarea>                                                     
                                                                                </div>
                                                                            </div> 

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Mental</b>
                                                                                    <textarea type="text" class="form-control" name="mental" placeholder="Enter Here" rows="4"><?php echo $d['mental']; ?></textarea>                                                     
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                            <font color="blue">*--------------------------------------------------</font><b class="text-danger" > Personal History </b><font color="blue">------------------------------------------------------*</font><br>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>1.Apetite</b>
                                                                                    <input type="text" list="apetite" id="apetites" class="form-control" name="apetite" placeholder="Add Here" value="<?php echo $d['apetite']; ?> ">                                                  
                                                                                    <datalist id="apetite">
                                                                                        <option value="Moderate">
                                                                                        <option value="Increased">
                                                                                        <option value="Decreased">
                                                                                    </datalist>
                                                                                </div>
                                                                            </div> 

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>2.Thirst</b>
                                                                                    <input type="text" list="thirst" id="thirsts" class="form-control" name="thirst" placeholder="Add here" value="<?php echo $d['thirst']; ?>">
                                                                                    <datalist id="thirst">
                                                                                        <option value="Moderate">
                                                                                        <option value="Increased">
                                                                                        <option value="Decreased">
                                                                                    </datalist>                                                   
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>3.Tongue</b>
                                                                                    <input type="text" list="tongue" id="tongues" class="form-control" name="tongue" placeholder="Add here" value="<?php echo $d['tongue']; ?>">                                                    
                                                                                    <datalist id="tongue">
                                                                                        <option value="Clear">
                                                                                        <option value="Coated">
                                                                                        <option value="Mapped">
                                                                                        <option value="Irregular Margin">
                                                                                    </datalist>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>4.Bowel</b>
                                                                                    <input type="text" id="bowel" list="bowels" class="form-control" name="bowel" placeholder="Add here" value="<?php echo $d['bowel']; ?>">                                                    
                                                                                    <datalist id="bowels">
                                                                                        <option value="Satisfactory">
                                                                                        <option value="Unsatisfactory">
                                                                                        <option value="Hard stool">
                                                                                        <option value="Knotty stool">
                                                                                    </datalist>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>5.Urine</b>
                                                                                    <input type="text" id="urine" list="urines" class="form-control" name="urine" placeholder="Add here" value="<?php echo $d['urine']; ?>">  
                                                                                    <datalist id="urines">
                                                                                        <option value="Clear & transparent">
                                                                                        <option value="Yellowish">
                                                                                        <option value="Offensive odour">
                                                                                    </datalist>                                                  
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>6.Sleep</b>
                                                                                    <input type="text" id="sleep" list="sleeps" class="form-control" name="sleep" placeholder="Add here" value="<?php echo $d['sleep']; ?> ">                                                
                                                                                    <datalist id="sleeps">
                                                                                        <option value="Sound">
                                                                                        <option value="Disturbed">
                                                                                    </datalist>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>7.Dreams</b>
                                                                                    <input type="text" list="dreams" id="dream" class="form-control" name="dreams" placeholder="Add here" value="<?php echo $d['dreams']; ?>">
                                                                                    <datalist id="dreams">
                                                                                        <option value="Fearfull">
                                                                                        <option value="Routine of daily">
                                                                                    </datalist>                                                  
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>8.Menses</b>
                                                                                    <input type="text" id="mense" list="menses" class="form-control" name="menses" placeholder="Add here" value="<?php echo $d['menses']; ?>">                                                    
                                                                                    <datalist id="menses">
                                                                                        <option value="Regular">
                                                                                        <option value="Irregular">
                                                                                    </datalist>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>9.Habits</b>
                                                                                    <input type="text" id="habit" list="habits" class="form-control" name="habits" placeholder="Add here" value="<?php echo $d['habits']; ?> ">                                                  
                                                                                    <datalist id="habits">
                                                                                        <option value="Chewing tobacco">
                                                                                        <option value="Alcohol">
                                                                                        <option value="Ghutka">
                                                                                        <option value="Smoking">
                                                                                    </datalist>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <font color="blue">*--------------------------------------------------</font><b class="text-danger text-xl"> On Examination </b><font color="blue">----------------------------------------------------*</font><br>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                            <p class="text-white">priyanka</p>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>1.Blood Pressure(BP)</b>
                                                                                    <input type="text" class="form-control" name="bp" placeholder="Add here" value="<?php echo $d['bp']; ?>">                                                    
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>2.Pulse</b>
                                                                                    <input type="text" class="form-control" name="pulse" placeholder="Add here" value="<?php echo $d['pulse']; ?>">                                                    
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>3.Temperature</b>
                                                                                    <input type="text" class="form-control" name="temperature" placeholder="Add here" value="<?php echo $d['temperature']; ?>">                                                    
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <font color="blue">*-----------------------------------------------------------------------------------------------------------------------------*</font><br>
                                                                               <hr>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b><font size="5">Past H/O - </font></b>
                                                                                    <textarea type="text" class="form-control" name="past_ho" placeholder="Add here"><?php echo $d['past_ho']; ?></textarea>                                                   
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <font color="blue">*-----------------------------------------------------------------------------------------------------------------------------*</font><br>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b><font size="5">Family H/O -</font></b>
                                                                                    <!-- <textarea type="text" class="form-control" name="family_ho" placeholder="Add here" rows="9"><?php echo $d['family_ho']; ?></textarea>                                                    -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b><font size="4">1. Father :-</font></b>
                                                                                    <div class="col-lg-12 col-md-12">
                                                                                        <textarea type="text" class="form-control" name="father" placeholder="Add here"><?php echo $d['father']; ?></textarea> <br> 
                                                                                    </div> 

                                                                                    <div class="row clearfix">
                                                                                        
                                                                                        <div class="col-lg-6 col-md-12">
                                                                                            <b><font size="2">I. Grandfather :-</font></b>
                                                                                            <br><textarea type="text" class="form-control" name="grandfather" placeholder="Add here"><?php echo $d['grandfather']; ?></textarea>
                                                                                        </div> 

                                                                                        
                                                                                        <div class="col-lg-6 col-md-12">
                                                                                            <b><font size="2">II. Grandmother :-</font></b>
                                                                                            <br><textarea type="text" class="form-control" name="grandmother" placeholder="Add here"><?php echo $d['grandmother']; ?></textarea>
                                                                                        </div> 
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b><font size="4">2. Mother :-</font></b>
                                                                                    <div class="col-lg-12 col-md-12">
                                                                                        <textarea type="text" class="form-control" name="mother" placeholder="Add here"><?php echo $d['mother']; ?></textarea> <br> 
                                                                                    </div> 

                                                                                    <div class="row clearfix">
                                                                                        
                                                                                        <div class="col-lg-6 col-md-12">
                                                                                            <b><font size="2">I. Grandfather :-</font></b>
                                                                                            <br><textarea type="text" class="form-control" name="grandfather1" placeholder="Add here"><?php echo $d['grandfather1']; ?></textarea>
                                                                                        </div> 

                                                                                        
                                                                                        <div class="col-lg-6 col-md-12">
                                                                                            <b><font size="2">II. Grandmother :-</font></b>
                                                                                            <br><textarea type="text" class="form-control" name="grandmother1" placeholder="Add here"><?php echo $d['grandmother1']; ?></textarea>
                                                                                        </div> 
                                                                                    </div>

                                                                                </div>
                                                                            </div>


                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Prescription</b>
                                                                                    <textarea type="text" class="form-control" rows="9" name="prescription" placeholder="Add Prescription" rows="4"><?php echo $d['prescription']; ?></textarea>                                                    
                                                                                    <!-- <input type="text" class="form-control" name="type"  value="follow-up" hidden> -->
                                                                                </div>
                                                                            </div> 

                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Patients Photo</b>
                                                                                    <input type="file" class="form-control" name="photo" value="<?php echo $d['photo']; ?> ">
                                                                                    <input type="hidden" class="form-control" name="photo" value="<?php echo $d['photo']; ?> ">
                                                                                                                                  
                                                                                    <!-- <input type="text" class="form-control" name="type"  value="follow-up" hidden> -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30">
                                                                                <?php 
                                                                                    if($d['photo'] == ''){
                                                                                ?>
                                                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url().'assets/images/image-gallery/2.jpg'; ?>" alt=""> </a> 
                                                                                <?php }else{ ?>

                                                                                    <a href="<?php echo base_url().'/images/'.$d['photo']; ?>" > <img class="img-fluid img-thumbnail shadow-lg" src="<?php echo base_url().'/images/'.$d['photo']; ?>"  alt=""></a> 
                                                                                <?php } ?>
                                                                            </div>
                                                                            
                                                                            
                                                                            <div class="col-md-12">
                                                                                <button type="submit" class="btn btn-primary">Add Follow-up</button>                                                                
                                                                            </div>
                                                                        </div>                           
                                                                    </div>
                                                                    </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade" id="<?php echo 'delete'.$d['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Sure? you want to delete the Patient...</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                    <!-- <h4>Sure? you want to delete the product..</h4> -->
                                                                     
                                                                            <div class="col-md-12">
                                                                                <a href="<?php echo base_url().'patients/delete/'.$d['id']; ?>"><button type="submit" class="btn btn-primary">Delete</button></a>                                                                
                                                                            </div>
                                                                        
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                                        
                                                <?php } ?>                                            
                                            </tbody>                                            
                                        </table>
                                    </div>                                
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


                                  


                                    <!-- Add Patient modal starts here-->
                                    <div class="modal fade" id="add" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="title" id="largeModalb">Add Patients</h4>
                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                </div>
                                                <div class="modal-body"> 
                                                    <form action="<?php echo base_url('patients/add'); ?>" method="post" enctype="multipart/form-data">
                                                        <div class="row clearfix">                            
                                                            
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Name<font color="red">*</font></b>
                                                                    <input type="text" required class="form-control" name="name" placeholder="Enter Name">                                                                    
                                                                </div>
                                                            </div> 

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Age</b>
                                                                    <input type="number" class="form-control" name="age" placeholder="Enter age">                                                                    
                                                                </div>
                                                            </div> 

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Gender<font color="red">*</font></b>
                                                                    <select class="form-control ms select2" name="sex">
                                                                        <option value="">-- Select Gender --</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                        <option value="Transgender">Transgender</option>
                                                                    </select>                                                                   
                                                                </div>
                                                            </div> 

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Mobile No.</b>
                                                                    <input type="number" class="form-control" name="mobile" placeholder="Enter Mobile No.">                                                      
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Weight</b>
                                                                    <input type="text" class="form-control" name="weight" placeholder="Add Weight">                                                      
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Address</b>
                                                                    <input type="text" class="form-control" name="address" placeholder="Add Address">                                                      
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>District</b>
                                                                    <input type="text" class="form-control" name="district" placeholder="Add District">                                                      
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Date<font color="red">*</font></b>
                                                                    <input type="date" class="form-control" required name="date" placeholder="">                                                      
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Occupation</b>
                                                                    <input type="text" class="form-control" name="occupation" placeholder="Add Occupation">                                                      
                                                                </div>
                                                            </div>

                                                            

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Present c/o</b>
                                                                    <textarea type="text" class="form-control" name="present_co" rows="9" placeholder="Enter Here"></textarea>                                                     
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Diagnosis</b>
                                                                    <textarea type="text" class="form-control" name="diagnosis" rows="5" placeholder="Enter Diagnosis"></textarea>                                                     
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Mental</b>
                                                                    <textarea type="text" class="form-control" name="mental" rows="5" placeholder="Enter Here"></textarea>                                                     
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                            <font color="blue">*--------------------------------------------------</font><b class="text-danger text-xl"> Personal History </b><font color="blue">----------------------------------------------------*</font><br>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                            <p class="text-white">priyanka</p>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>1.Apetite</b>
                                                                    <input type="text" class="form-control" name="apetite" list="apetite" id="apetites" placeholder="Add Here">                                                   
                                                                    <datalist id="apetite">
                                                                        <option value="Moderate">
                                                                        <option value="Increased">
                                                                        <option value="Decreased">
                                                                    </datalist>
                                                                </div>
                                                            </div> 

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>2.Thirst</b>
                                                                    <input type="text" class="form-control" list="thirst" id="thirsts" name="thirst" placeholder="Add here">                                                   
                                                                    <datalist id="thirst">
                                                                        <option value="Moderate">
                                                                        <option value="Increased">
                                                                        <option value="Decreased">
                                                                    </datalist>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>3.Tongue</b>
                                                                    <input type="text" class="form-control" name="tongue" list="tongue" id="tongues" placeholder="Add here">
                                                                    <datalist id="tongue">
                                                                        <option value="Clear">
                                                                        <option value="Coated">
                                                                        <option value="Mapped">
                                                                        <option value="Irregular Margin">
                                                                    </datalist>                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>4.Bowel</b>
                                                                    <input type="text" id="bowel" list="bowels" class="form-control" name="bowel" placeholder="Add here">                                                   
                                                                    <datalist id="bowels">
                                                                        <option value="Satisfactory">
                                                                        <option value="Unsatisfactory">
                                                                        <option value="Hard stool">
                                                                        <option value="Knotty stool">
                                                                    </datalist>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>5.Urine</b>
                                                                    <input type="text" id="urine" list="urines" class="form-control" name="urine" placeholder="Add here">
                                                                    <datalist id="urines">
                                                                        <option value="Clear & transparent">
                                                                        <option value="Yellowish">
                                                                        <option value="Offensive odour">
                                                                    </datalist>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>6.Sleep</b>
                                                                    <input type="text" id="sleep" list="sleeps" class="form-control" name="sleep" placeholder="Add here">                                                   
                                                                    <datalist id="sleeps">
                                                                        <option value="Sound">
                                                                        <option value="Disturbed">
                                                                    </datalist>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>7.Dreams</b>
                                                                    <input type="text" list="dreams" id="dream" class="form-control" name="dreams" placeholder="Add here">                                                    
                                                                    <datalist id="dreams">
                                                                        <option value="Fearfull">
                                                                        <option value="Routine of daily">
                                                                    </datalist>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>8.Menses</b>
                                                                    <input type="text" id="mense" list="menses"  class="form-control" name="menses" placeholder="Add here">                                                 
                                                                    <datalist id="menses">
                                                                        <option value="Regular">
                                                                        <option value="Irregular">
                                                                    </datalist>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>9.Habits</b>
                                                                    <input type="text" id="habit" list="habits" class="form-control" name="habits" placeholder="Add here">                                                    
                                                                    <datalist id="habits">
                                                                        <option value="Chewing tobacco">
                                                                        <option value="Alcohol">
                                                                        <option value="Ghutka">
                                                                        <option value="Smoking">
                                                                    </datalist>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <font color="blue">*--------------------------------------------------</font><b class="text-danger text-xl"> On Examination </b><font color="blue">----------------------------------------------------*</font><br>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                            <p class="text-white">priyanka</p>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>1.Blood Pressure(BP)</b>
                                                                    <input type="text" class="form-control" name="bp" placeholder="Add here">                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>2.Pulse</b>
                                                                    <input type="text" class="form-control" name="pulse" placeholder="Add here">                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>3.Temperature</b>
                                                                    <input type="text" class="form-control" name="temperature" placeholder="Add here">                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <font color="blue">*-----------------------------------------------------------------------------------------------------------------------------*</font><br>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b><font size="5">Past H/O - </font></b>
                                                                    <textarea type="text" class="form-control" name="past_ho" placeholder="Add here" ></textarea>                                                   
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <font color="blue">*-----------------------------------------------------------------------------------------------------------------------------*</font><br>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b><font size="5">Family H/O -</font></b>
                                                                    <!-- <textarea type="text" class="form-control" name="family_ho" placeholder="Add here" rows="9"></textarea>                                                    -->
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b><font size="4">1. Father :-</font></b>
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <textarea type="text" class="form-control" name="father" placeholder="Add here"></textarea> <br> 
                                                                    </div> 

                                                                    <div class="row clearfix">
                                                                        
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <b><font size="2">I. Grandfather :-</font></b>
                                                                            <br><textarea type="text" class="form-control" name="grandfather" placeholder="Add here"></textarea>
                                                                        </div> 

                                                                        
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <b><font size="2">II. Grandmother :-</font></b>
                                                                            <br><textarea type="text" class="form-control" name="grandmother" placeholder="Add here"></textarea>
                                                                        </div> 
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b><font size="4">2. Mother :-</font></b>
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <textarea type="text" class="form-control" name="mother" placeholder="Add here"></textarea> <br> 
                                                                    </div> 

                                                                    <div class="row clearfix">
                                                                        
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <b><font size="2">I. Grandfather :-</font></b>
                                                                            <br><textarea type="text" class="form-control" name="grandfather1" placeholder="Add here"></textarea>
                                                                        </div> 

                                                                        
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <b><font size="2">II. Grandmother :-</font></b>
                                                                            <br><textarea type="text" class="form-control" name="grandmother1" placeholder="Add here"></textarea>
                                                                        </div> 
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b><font size="4">Prescription</font></b>
                                                                    <textarea type="text" class="form-control" rows="9" name="prescription" placeholder="Add Prescription" rows="4"></textarea>                                                    
                                                                    <!-- <input type="text" class="form-control" name="type" value="new" hidden> -->
                                                                </div>
                                                            </div> 

                                                            <!-- <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Fees</b>
                                                                    <input type="text" class="form-control" name="fees" placeholder="Add Fees">                                                    
                                                                </div>
                                                            </div>                                            -->

                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group">
                                                                                    <b>Patients Photo</b>
                                                                                    <input type="file" class="form-control" name="photo" >
                                                                                                                                  
                                                                                    <!-- <input type="text" class="form-control" name="type"  value="follow-up" hidden> -->
                                                                                </div>
                                                                            </div>
                                                            
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-primary">Add Patient</button>                                                                
                                                            </div>
                                                        </div>                           
                                                    </div>
                                                    </form>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal ends here -->




                                    
                                    <!-- designed and developed by PRIYANKA WANKHEDE -->
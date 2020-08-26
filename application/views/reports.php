<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Reports</h2>
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
                            <button type="button" class="btn btn-success btn-round waves-effect m-r-20" data-toggle="modal" data-target="#add">Add Reports</button><br><br>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                            <thead>
                                                <tr>
                                                    <th>id</th> 
                                                    <th>Patients Name</th>                                                   
                                                    <th>View Reports</th>                                                    
                                                   
                                                </tr>                          
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>id</th> 
                                                    <th>Patients Name</th>                                                   
                                                    <th>View Reports</th>                                                    
                                                   
                                                </tr>                                       
                                            </tfoot>
                                            <tbody>
                                           
                                                <?php                                           
                                                        $i = 0;                                          
                                                        foreach($reports as $d)
                                                    {                                                                      
                                                        $i++;
                                                ?>
                                                                                                                      
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $d['patients_id'].'-'.$d['patient_name']; ?></td>
                                                    <td><a href="<?php echo base_url().'reports/view_reports/'.$d['patients_id']; ?>" class="btn btn-warning waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-account"></i></a></td>
                                                                              
                                                </tr>
                                                        
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


                                  


                                    <!-- Add Product modal starts here-->
                                    <div class="modal fade" id="add" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="title" id="largeModalLabel">Add Reports</h4>
                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                </div>
                                                <div class="modal-body"> 
                                                    <form action="<?php echo base_url('reports/add'); ?>" method="post" enctype="multipart/form-data">
                                                        <div class="row clearfix">                            
                                                            
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b >Patients Name<font color="red">*</font></b>
                                                                    <select name="patients_id" class="form-control ms select2" required>
                                                                        <option value="">-- Select Patients Name --</option>
                                                                        <?php 
                                                                            foreach($patients as $p)
                                                                            {
                                                                                echo "<option value='$p->id'>$p->name - $p->id</option>";
                                                                            }
                                                                        ?>
                                                                    </select>                                                                    
                                                                </div>
                                                            </div>
                                                                
                                                            <div class="col-lg-12 col-md-12">
                                                                <b><p class="text-center text-danger">Upload Reports</p></b>
                                                            </div>
                                                                
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 1<font color="red">*</font></b>
                                                                    <input type="file"  name="image1" required class="form-control" >
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 2</b>
                                                                    <input type="file"  name="image2" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 3</b>
                                                                    <input type="file"  name="image3" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 4</b>
                                                                    <input type="file"  name="image4" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 5</b>
                                                                    <input type="file"  name="image5" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 6</b>
                                                                    <input type="file"  name="image6" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 7</b>
                                                                    <input type="file"  name="image7" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 8</b>
                                                                    <input type="file"  name="image8" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 9</b>
                                                                    <input type="file"  name="image9" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 10</b>
                                                                    <input type="file"  name="image10" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 11</b>
                                                                    <input type="file"  name="image11" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 12</b>
                                                                    <input type="file"  name="image12" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 13</b>
                                                                    <input type="file"  name="image13" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 14</b>
                                                                    <input type="file"  name="image14" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Report 15</b>
                                                                    <input type="file"  name="image15" class="form-control" >
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                                                    
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-primary">Add Reports</button>                                                                
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
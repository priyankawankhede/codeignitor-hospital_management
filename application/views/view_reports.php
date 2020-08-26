<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Reports</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Hospital</a></li>
                       
                        <li class="breadcrumb-item active">Image Gallery</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">                           
                            
                            <?php 
                                foreach($view as $v){
                            ?>
                                    <h4 for="">Patients Name - <?php echo $v['patient_name'].'('. $v['patients_id'] .')'; ?></h4>
                                    <b></b>
                            <?php } ?>
                            
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

                                
                            </div>
                            
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="body">
                                <center><h4><font color="red">Update Reports</font></h4></center>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                            <thead>
                                                <tr>                                                    
                                                    <th>id</th>
                                                    <th>Reports</th>
                                                    <th>Action</th>                                  
                                                                                                   
                                                </tr>                          
                                            </thead>
                                            <tfoot>
                                                <tr>                                                    
                                                    <th>id</th>
                                                    <th>Reports</th>
                                                    <th>Action</th>                       
                                                </tr>                                       
                                            </tfoot>
                                            <tbody>
                                           
                                                <?php                                           
                                                    if(!empty($view)){
                                                    $i=0;                                                     
                                                        foreach($view as $f)
                                                    {                                                                      
                                                        $i++;
                                                ?>
                                                                                                                      
                                                <tr>
                                                    
                                                    <td><?php echo 1; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image1']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image1'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>
                                                    
                                                    <div class="modal fade" id="<?php echo 'image1'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('reports/update'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 1</b>
                                                                                <input type="file"  name="image1" required class="form-control" value="<?php echo $f['image1']; ?>"><?php echo $f['image1']; ?>                                                                                
                                                                                <input type="hidden"  name="image1" class="form-control" value="<?php echo $f['image1']; ?>">
                                                                                <input type="text" class="form-control" value="<?php echo $f['id']; ?>" name="id" hidden>
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 2; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image2']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image2'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image2'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image2'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 2</b>
                                                                                <input type="file"  name="image2" required class="form-control" value="<?php echo $f['image2']; ?>"><?php echo $f['image2']; ?>                                                                                
                                                                                <input type="hidden"  name="image2" class="form-control" value="<?php echo $f['image2']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 3; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image3']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image3'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image3'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image3'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 3</b>
                                                                                <input type="file"  name="image3" required class="form-control" value="<?php echo $f['image3']; ?>"><?php echo $f['image3']; ?>                                                                                
                                                                                <input type="hidden"  name="image3" class="form-control" value="<?php echo $f['image3']; ?>">
                                                                                <input type="text" class="form-control" value="<?php echo $f['id']; ?>" name="id" hidden>
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 4; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image4']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image4'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image4'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image4'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 4</b>
                                                                                <input type="file"  name="image4" required class="form-control" value="<?php echo $f['image4']; ?>"><?php echo $f['image4']; ?>                                                                                
                                                                                <input type="hidden"  name="image4" class="form-control" value="<?php echo $f['image4']; ?>">
                                                                                <input type="text" class="form-control" value="<?php echo $f['id']; ?>" name="id" hidden>
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 5; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image5']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image5'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image5'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image5'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 5</b>
                                                                                <input type="file"  name="image5" required class="form-control" value="<?php echo $f['image5']; ?>"><?php echo $f['image5']; ?>                                                                                
                                                                                <input type="hidden"  name="image5" class="form-control" value="<?php echo $f['image5']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 6; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image6']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image6'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image6'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image6'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 6</b>
                                                                                <input type="file"  name="image6" required class="form-control" value="<?php echo $f['image6']; ?>"><?php echo $f['image6']; ?>                                                                                
                                                                                <input type="hidden"  name="image6" class="form-control" value="<?php echo $f['image6']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                
                                                <tr>
                                                    
                                                    <td><?php echo 7; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image7']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image7'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image7'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image7'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 7</b>
                                                                                <input type="file"  name="image7" required class="form-control" value="<?php echo $f['image7']; ?>"><?php echo $f['image7']; ?>                                                                                
                                                                                <input type="hidden"  name="image7" class="form-control" value="<?php echo $f['image7']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>


                                                <tr>
                                                    
                                                    <td><?php echo 8; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image8']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image8'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image8'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image8'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 8</b>
                                                                                <input type="file"  name="image8" required class="form-control" value="<?php echo $f['image8']; ?>"><?php echo $f['image8']; ?>                                                                                
                                                                                <input type="hidden"  name="image8" class="form-control" value="<?php echo $f['image8']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 9; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image9']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image9'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image9'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image9'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 9</b>
                                                                                <input type="file"  name="image9" required class="form-control" value="<?php echo $f['image9']; ?>"><?php echo $f['image9']; ?>                                                                                
                                                                                <input type="hidden"  name="image9" class="form-control" value="<?php echo $f['image9']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>
                                                
                                                <tr>
                                                    
                                                    <td><?php echo 10; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image10']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image10'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image10'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image10'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 10</b>
                                                                                <input type="file"  name="image10" required class="form-control" value="<?php echo $f['image10']; ?>"><?php echo $f['image10']; ?>                                                                                
                                                                                <input type="hidden"  name="image10" class="form-control" value="<?php echo $f['image6']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 11; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image11']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image11'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image11'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image11'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 11</b>
                                                                                <input type="file"  name="image11" required class="form-control" value="<?php echo $f['image11']; ?>"><?php echo $f['image11']; ?>                                                                                
                                                                                <input type="hidden"  name="image11" class="form-control" value="<?php echo $f['image11']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 12; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image12']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image12'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image12'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image12'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 12</b>
                                                                                <input type="file"  name="image12" required class="form-control" value="<?php echo $f['image12']; ?>"><?php echo $f['image12']; ?>                                                                                
                                                                                <input type="hidden"  name="image12" class="form-control" value="<?php echo $f['image12']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 13; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image13']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image13'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image13'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image13'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 13</b>
                                                                                <input type="file"  name="image13" required class="form-control" value="<?php echo $f['image13']; ?>"><?php echo $f['image13']; ?>                                                                                
                                                                                <input type="hidden"  name="image13" class="form-control" value="<?php echo $f['image13']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 14; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image14']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image14'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image14'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image14'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 13</b>
                                                                                <input type="file"  name="image14" required class="form-control" value="<?php echo $f['image14']; ?>"><?php echo $f['image14']; ?>                                                                                
                                                                                <input type="hidden"  name="image14" class="form-control" value="<?php echo $f['image14']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    <td><?php echo 15; ?></td> 
                                                    <td><img  src="<?php echo base_url().'images/'.$f['image15']; ?>" height="200px" width="300px"></td>                                                  
                                                    <td><a data-toggle="modal" data-target="<?php echo '#'.'image15'.$f['id']; ?>" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                        <!-- <a href="<?php echo base_url().'reports/view_reports/'.$f['patients_id']; ?>" class="btn btn-danger waves-effect waves-float btn-sm waves-danger"><i class="zmdi zmdi-delete"></i></a> -->
                                                    </td>

                                                    <div class="modal fade" id="<?php echo 'image15'.$f['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Image</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                <form action="<?php echo base_url('Reports/update_image15'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="row clearfix">                                            
                                                                       
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <b>Report 13</b>
                                                                                <input type="file"  name="image15" required class="form-control" value="<?php echo $f['image15']; ?>"><?php echo $f['image13']; ?>                                                                                
                                                                                <input type="hidden"  name="image15" class="form-control" value="<?php echo $f['image15']; ?>">
                                                                                <input type="text" hidden class="form-control" value="<?php echo $f['id']; ?>" name="id" >
                                                                            </div>
                                                                        </div>
                                                                                                
                                                                        <div class="col-md-12">
                                                                            <button type="submit" class="btn btn-primary">Update </button>                                                                
                                                                        </div>
                                                                    </div>                           
                                                                </div>
                                                                </form>
                                                                </div>                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </tr>
                                                
                                                
                                                <?php }} ?>
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

<!-- designed and developed by PRIYANKA WANKHEDE -->
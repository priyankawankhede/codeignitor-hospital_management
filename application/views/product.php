<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Products</h2>
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
                            <button type="button" class="btn btn-success btn-round waves-effect m-r-20" data-toggle="modal" data-target="#add">Add Product</button><br><br>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                            <thead>
                                                <tr>
                                                    <th>id</th> 
                                                    <th>Patients Name</th>                                                   
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Daily Fees</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>                          
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>id</th>   
                                                    <th>Patients Name</th>                                                   
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Daily Fees</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>                                       
                                            </tfoot>
                                            <tbody>
                                           
                                                <?php                                           
                                            
                                                    $i=0;                                                     
                                                        foreach($product as $d)
                                                    {                                                                      
                                                        $i++;
                                                ?>
                                                                                                                      
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $d['patients_id'].'-'.$d['patients_name']; ?></td>
                                                    <td><?php echo $d['name']; ?></td>
                                                    <td><?php echo $d['quantity'];?></td> 
                                                    <td><?php echo $d['price']; ?></td>                                                   
                                                    <td><?php echo $d['daily_fees']; ?></td>
                                                    <td>
                                                        <?php 
                                                            $id = $d['id'];
                                                            echo $total = $d['price'] + $d['daily_fees'];
                                                            $this->db->query("update product set total = '$total' where id = '$id'");
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-warning waves-effect waves-float btn-sm waves-green" data-toggle="modal" data-target="<?php echo '#'.'reject'.$d['id']; ?>"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="btn btn-danger waves-effect waves-float btn-sm waves-red" data-toggle="modal" data-target="<?php echo '#'.'delete'.$d['id']; ?>"><i class="zmdi zmdi-delete"></i></a>
                                                    </td>                           
                                                </tr>


                                      
                                                    <div class="modal fade" id="<?php echo 'reject'.$d['id']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="largeModalb">Update Product</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                    <form action="<?php echo base_url('product/update'); ?>" method="post" enctype="multipart/form-data">
                                                                        <div class="row clearfix">     
                                                                            <div class="col-lg-12 col-md-12">
                                                                                
                                                                                <div class="form-group">
                                                                                    <b>Patients Name<font color="red">*</font></b>
                                                                                    <select name="patients_id" class="form-control ms select2" required>
                                                                                        
                                                                                        <option value="<?php echo $d['patients_id']; ?>"><?php echo $d['patients_id']; ?></option>
                                                                                        <?php 
                                                                                            foreach($patient as $p)
                                                                                            {
                                                                                                echo "<option value='$p->name'>$p->name - $p->id</option>";                                                                                                
                                                                                            }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <b>Product Name</b>
                                                                                    <?php $date = date('Y-m-d'); ?>
                                                                                    <input type="text"  class="form-control" name="id" value="<?php echo $d['id']; ?>" hidden>  
                                                                                    <input type="text"  class="form-control" name="name" value="<?php echo $d['name']; ?>" >
                                                                                    <input type="text"  class="form-control" name="date" placeholder="Add Name" value="<?php echo $date; ?>" hidden>        
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <b>Product Quantity</b>                                                                                      
                                                                                    <input type="text"  class="form-control" name="quantity" value="<?php echo $d['quantity']; ?>" >
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <b>Product Price</b>                                                                                      
                                                                                    <input type="text"  class="form-control" name="price" value="<?php echo $d['price']; ?>" >
                                                                                </div>

                                                                               
                                                                                <div class="form-group">
                                                                                    <b>Daily Fees</b>
                                                                                    <input type="number" class="form-control" name="daily_fees" placeholder="Add Price" value="<?php echo $d['daily_fees']; ?>">                                                                    
                                                                                </div>
                                                            
                                                                            </div>                       
                                                                            
                                                                            
                                                                            <div class="col-md-12">
                                                                                <button type="submit" class="btn btn-primary">Update</button>                                                                
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
                                                                    <h4 class="title" id="largeModalb">Sure? you want to delete the product..</h4>
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                    <!-- <h4>Sure? you want to delete the product..</h4> -->
                                                                     
                                                                            <div class="col-md-12">
                                                                                <a href="<?php echo base_url().'product/delete/'.$d['id']; ?>"><button type="submit" class="btn btn-primary">Delete</button></a>                                                                
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


                                  


                                    <!-- Add Product modal starts here-->
                                    <div class="modal fade" id="add" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="title" id="largeModalb">Add Product</h4>
                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                </div>
                                                <div class="modal-body"> 
                                                    <form action="<?php echo base_url('product/add'); ?>" method="post" enctype="multipart/form-data">
                                                        <div class="row clearfix">                            
                                                            
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Patients Name<font color="red">*</font></b>
                                                                    <select name="patients_id" class="form-control ms select2">
                                                                        <option value="">-- Select Patients Name --</option>
                                                                        <?php 
                                                                            foreach($patient as $p)
                                                                            {
                                                                                echo "<option value='$p->id'>$p->name - $p->id</option>";
                                                                            }
                                                                        ?>
                                                                    </select>                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Product Name<font color="red">*</font></b>
                                                                    <input type="text" required class="form-control" name="name" placeholder="Add Name">     
                                                                    <?php $date=date('Y-m-d'); ?>                                                        
                                                                    <input type="text" class="form-control" name="date" value="<?php echo $date; ?>" hidden>        
                                                                </div>
                                                            </div> 

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Quanity<font color="red">*</font></b>
                                                                    <input type="number" required class="form-control" name="quantity" placeholder="Add Quantity">                                                                    
                                                                </div>
                                                            </div> 

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Product Price<font color="red">*</font></b>
                                                                    <input type="number" required class="form-control" name="price" placeholder="Add Price">                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <b>Daily Fees<font color="red">*</font></b>
                                                                    <input type="number" required class="form-control" name="daily_fees" placeholder="Add Price">                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-primary">Add Product</button>    

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
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">           
                <h4>
                    Makers/Brands list
                    <a href="<?php echo admin_url(); ?>makers/add" class="btn btn-success pull-right">Add New Makers</a>
                </h4>
                <hr>
                <div class="clearfix"></div>
                <br>
                <?php 
                    if(!empty($makers)){
                ?>
                
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Maker/Brand</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i++;
                            foreach ($makers as $mak){
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $mak['maker']; ?></td>
                                <td><?php echo $mak['cat_name']; ?></td>
                                <td>
                                    <a href="<?php echo admin_url(); ?>makers/edit/<?php echo $mak['makerID'] ?>" class="label label-blue"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo admin_url(); ?>makers/delete/<?php echo $mak['makerID'] ?>" class="label label-red" onclick="return confirm('Are you sure you want to delete this category?');"><i class="fa fa-trash-o"></i> Delete</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
                <?php
                    }
                    else{
                        echo '<div class="alert alert-warning">Sorry! There is no makers/brand found.</div>';
                    }
                ?>

            </div>
        </div>
    </div>
</div>


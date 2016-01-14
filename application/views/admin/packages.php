<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">           
                
                <a href="#" class="btn btn-success pull-right">Add New Package</a>
                <div class="clearfix"></div>
                <br>
                <?php 
                    if(!empty($packages)){
                ?>
                
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Package Name</th>
                            <th>Credits</th>
                            <th>Price</th>
                            <th>Currency/Symbol</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i++;
                            foreach ($packages as $pack){
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $pack['description']; ?></td>
                                <td><?php echo $pack['credits_nr']; ?></td>
                                <td><?php echo $pack['price']; ?></td>
                                <td><?php echo $pack['currency'].'/'.$pack['currency_symbol']; ?></td>
                                <td>
                                    <a href="<?php echo admin_url(); ?>packages/edit/<?php echo $pack['packageID'] ?>" class="label label-blue"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo admin_url(); ?>packages/delete/<?php echo $pack['packageID'] ?>" class="label label-red" onclick="return confirm('Are you sure you want to delete this category?');"><i class="fa fa-trash-o"></i> Delete</a>
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
                        echo '<div class="alert alert-warning">Sorry! There is no packages found.</div>';
                    }
                ?>

            </div>
        </div>
    </div>
</div>


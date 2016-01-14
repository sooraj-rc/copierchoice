<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">           
                <?php
                    $error = f('error_message') ? f('error_message') : validation_errors();
                    if(!empty($error)){
                        echo '<div class="alert alert-warning">'.$error.'</div>';
                    }
                ?>
                
                <?php
                    $cat_form = array(
                        "class"=>"form-inline",
                    );
                    if(!empty($catdata)){
                        echo form_open(admin_url()."categories/edit",$cat_form);
                    }
                    else {
                        echo form_open(admin_url()."categories/add",$cat_form);
                    }
                ?>
                <div class="form-group">
                    <label for="catname">Category Name</label>
                    <?php
                        $catname = array(
                            "class" => "form-control",
                            "name"  => "catname",
                            "id"    => "catname",
                            "style" => "width: 300px;",
                            "value" => $catdata['catname']
                        );
                        echo form_input($catname);
                    ?>
                </div>
                <?php
                    if(!empty($catdata)){
                        $btn_value = "Edit Category";
                    }
                    else {
                        $btn_value = "Add New Category";
                    }
                    $submit = array(
                        "class" => "btn btn-success",
                        "value" => $btn_value
                    );
                    if(!empty($catdata)) {  echo form_hidden ("catid",$catdata["catid"]);  }
                    echo form_submit($submit);
                    echo form_close();
                ?>
                
                <div class="clearfix"></div>
                <br>
                <?php 
                    if(!empty($categories)){
                ?>
                
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i++;
                            foreach ($categories as $cat){
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $cat['cat_name']; ?></td>
                                <td>
                                    <a href="<?php echo admin_url(); ?>categories/edit/<?php echo $cat['cat_id'] ?>" class="label label-blue"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo admin_url(); ?>categories/delete/<?php echo $cat['cat_id'] ?>" class="label label-red" onclick="return confirm('Are you sure you want to delete this category?');"><i class="fa fa-trash-o"></i> Delete</a>
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
                        echo '<div class="alert alert-warning">Sorry! There is no categories found.</div>';
                    }
                ?>

            </div>
        </div>
    </div>
</div>


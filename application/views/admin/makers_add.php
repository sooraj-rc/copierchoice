<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">           
                <?php
                    if (!empty($md)) {
                        $title = "Edit maker";
                    }
                    else{
                        $title = "Add new maker";
                    }
                ?>
                <h4>
                    <a href="<?php echo admin_url(); ?>makers" class="">Makers/Brands list</a> <i class="fa fa-angle-right"></i>
                    <?php echo $title; ?>
                </h4>
                <hr>
                <div class="col-md-6">
                <?php
                    $error = f('error_message') ? f('error_message') : validation_errors();
                    if(!empty($error)){
                        echo '<div class="red-font">'.$error.'</div>';
                    }
                ?>
                <?php
                    $pack_form = array(
                        "class" => "",
                    );
                    if (!empty($md)) {
                        echo form_open(admin_url() . "makers/edit/".$this->uri->segment(4), $pack_form);
                    } else {
                        echo form_open(admin_url() . "makers/add", $pack_form);
                    }
                ?>
                    <div class="form-body pal">
                        
                        <div class="form-group">
                            <label for="maker" class="control-label">Maker/Brand Name</label>
                            <div class="input-icon right">
                                <?php
                                    $bn = array(
                                        "name"          => "maker",
                                        "class"         => "form-control",
                                        "placeholder"   => "Maker/Brand Name",
                                        "id"            => "maker",
                                        "value"         => set_value('maker',$md[0]['maker'])
                                    );
                                    echo form_input($bn);
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category" class="control-label">Category</label>
                            <div class="input-icon right">
                                <select name="cat_id" class="form-control">
                                    <option value="">Select Category</option>
                                    <?php
                                        foreach ($cat_list as $cl){
                                            if($cl['cat_id'] == $md[0]['cat_id']){
                                                $selected = "selected";
                                            }
                                            else{
                                                $selected = "";
                                            }
                                            echo '<option value="'.$cl[cat_id].'" '.$selected.'>'.$cl['cat_name'].'</option>';
                                        }                                                               
                                    ?>
                                </select>
                                
                            </div>
                        </div>

                    </div>
                    <div class="form-actions text-right pal">
                        <?php
                            if(!empty($md)){
                                $btn_value = "Edit Maker";
                            }
                            else {
                                $btn_value = "Add New Maker";
                            }
                            $submit = array(
                                "class" => "btn btn-primary",
                                "value" => $btn_value
                            );
                            if(!empty($md)) {  echo form_hidden ("makerID",$md[0]["makerID"]);  }
                            echo form_submit($submit);
                        ?>
                    </div>
                <?php
                    echo form_close();
                ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">           
                <?php
                    if (!empty($pd)) {
                        $title = "Edit package";
                    }
                    else{
                        $title = "Add new package";
                    }
                ?>
                <h4>
                    <a href="<?php echo admin_url(); ?>packages" class="">Package list</a> <i class="fa fa-angle-right"></i>
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
                    if (!empty($pd)) {
                        echo form_open(admin_url() . "packages/edit/".$this->uri->segment(4), $pack_form);
                    } else {
                        echo form_open(admin_url() . "packages/add", $pack_form);
                    }
                ?>
                    <div class="form-body pal">
                        
                        <div class="form-group">
                            <label for="packagename" class="control-label">Package Name</label>
                            <div class="input-icon right">
                                <?php
                                    $pn = array(
                                        "name"          => "description",
                                        "class"         => "form-control",
                                        "placeholder"   => "Package Name",
                                        "id"            => "packagename",
                                        "value"         => set_value('description',$pd[0]['description'])
                                    );
                                    echo form_input($pn);
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="packagecredit" class="control-label">Credits</label>
                            <div class="input-icon right">
                                <?php
                                    $pc = array(
                                        "name"          => "credits_nr",
                                        "class"         => "form-control",
                                        "placeholder"   => "Package Credits",
                                        "id"            => "packagecredit",
                                        "value"         => set_value('credits_nr',$pd[0]['credits_nr'])
                                    );
                                    echo form_input($pc);
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="control-label">Credits Price</label>
                            <div class="input-icon right">
                                <?php
                                    $pcp = array(
                                        "name"          => "price",
                                        "class"         => "form-control",
                                        "placeholder"   => "Package Credits Price",
                                        "id"            => "price",
                                        "value"         => set_value('price',$pd[0]['price'])
                                    );
                                    echo form_input($pcp);
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="currency" class="control-label">Currency</label>
                                    <div class="input-icon right">
                                        <?php
                                            $pcc = array(
                                                "name"          => "currency",
                                                "class"         => "form-control",
                                                "placeholder"   => "Package Currency",
                                                "id"            => "currency",
                                                "value"         => set_value('currency',$pd[0]['currency'])
                                            );
                                            echo form_input($pcc);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="csymbol" class="control-label">Currency Symbol</label>
                                    <div class="input-icon right">
                                        <?php
                                            $pcs = array(
                                                "name"          => "currency_symbol",
                                                "class"         => "form-control",
                                                "placeholder"   => "Package Currency Symbol",
                                                "id"            => "csymbol",
                                                "value"         => set_value('currency_symbol',$pd[0]['currency_symbol'])
                                            );
                                            echo form_input($pcs);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-actions text-right pal">
                        <?php
                            if(!empty($pd)){
                                $btn_value = "Edit Package";
                            }
                            else {
                                $btn_value = "Add New Package";
                            }
                            $submit = array(
                                "class" => "btn btn-primary",
                                "value" => $btn_value
                            );
                            if(!empty($pd)) {  echo form_hidden ("packageID",$pd[0]["packageID"]);  }
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


<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">           

                
                <div class="col-md-6">
                <?php
                    $pack_form = array(
                        "class" => "",
                    );
                    if (!empty($packdata)) {
                        echo form_open(admin_url() . "packages/edit", $pack_form);
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
                                        "id"            => "packagename"
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
                                        "name"  => "credits_nr",
                                        "class" => "form-control",
                                        "placeholder" => "Package Credits",
                                        "id"    => "packagecredit"
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
                                        "name"  => "price",
                                        "class" => "form-control",
                                        "placeholder" => "Package Credits Price",
                                        "id"    => "price"
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
                                                "name"  => "currency",
                                                "class" => "form-control",
                                                "placeholder" => "Package Currency",
                                                "id"    => "currency"
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
                                                "name"  => "currency_symbol",
                                                "class" => "form-control",
                                                "placeholder" => "Package Currency Symbol",
                                                "id"    => "csymbol"
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
                            if(!empty($packdata)){
                                $btn_value = "Edit Package";
                            }
                            else {
                                $btn_value = "Add New Package";
                            }
                            $submit = array(
                                "class" => "btn btn-primary",
                                "value" => $btn_value
                            );
                            if(!empty($packdata)) {  echo form_hidden ("packageID",$packdata["packageID"]);  }
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


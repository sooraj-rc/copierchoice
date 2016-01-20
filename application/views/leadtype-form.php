<style>
    .step{
        min-height: 420px !important;
        font-size: 18px;
    }
</style>
<div class="container">
    <br><br>
    <form id="first_form" class="form-horizontal form" action="" method="post">
        <div class="col-md-8 col-md-offset-2">   	
            <!--<div class="progress">
                <div class="progress-bar progress-bar-success active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>-->
            <div class="box row-fluid" style="font-size: 18px;">	
                <br>
                <div id="error"></div>
                <div class="form-group">
                    
                    <label for="name">1. What type of quote are you after?</label>
                    <div class="col-sm-10">
                        <input type="radio" class="next1" name="qtype1" value="1" required=""> Printer or Multifunction Device<br>
                        <input type="radio" class="next1" name="qtype1" value="2" required=""> Service &/or repair<br>
                        <input type="radio" class="next1" name="qtype1" value="3" required=""> Managed Print Service
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group" id="2ndqn"><!-- show if qtype1 is 1  -->
                    <label for="name">2. What type of device do you require?</label>
                    <div class="col-sm-10">
                        <!-- first 4 lead types: qtype1-qtype2 => lead_type_id
                            1-1 => 1
                            1-2 => 2
                            1-3 => 3
                            1-4 => 4
                        -->
                        <input type="radio" class="next2" name="qtype2" value="1"> Multifunction Device / Digital Copier<br>
                        <input type="radio" class="next2" name="qtype2" value="2"> Printer only (Mono or Colour Laser Printer)<br>
                        <input type="radio" class="next2" name="qtype2" value="3"> Wide Format Printer / Plotter<br>
                        <input type="radio" class="next2" name="qtype2" value="4"> Production Printer
                    </div>
                </div>
                <div class="form-group" id="3rdqn" style="display: none;"><!-- show if qtype1 is 2  -->
                    <label for="name">2. What do you require?</label>
                    <div class="col-sm-10">
                        <!-- second 3 lead types: qtype1-qtype3 => lead_type_id
                            2-1 => 5
                            2-2 => 6
                            2-3 => 7
                        -->
                        <input type="radio" class="next3" name="qtype2" value="1"> Book urgent repair/service on existing device<br>
                        <input type="radio" class="next3" name="qtype2" value="2"> Book non-urgent service on existing device<br>
                        <input type="radio" class="next3" name="qtype2" value="3"> Enquire about new service agreement for existing device<br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div align="center">
                            <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
                            <button id="continue" type="submit" class="btn-fresh text-capitalize submit btn">CONTINUE >></button>
                        </div>
                    </div>
                </div>			

            </div>

        </div> 
    </form> 
</div>




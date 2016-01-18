
<div class="container">
    <br><br>
    <form class="form-horizontal form" action="manu.php">
        <div class="col-md-8 col-md-offset-2">   	
            <div class="progress">
                <div class="progress-bar progress-bar-success active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="box row-fluid">	
                <br>
                <div class="step">
                    <div class="form-group">
                        <label for="name">1. What type of quote are you after?</label>
                        <div class="col-sm-10">
                            <input type="radio" name="qtype" value="1"> Printer or Multifunction Device<br>
                            <input type="radio" name="qtype" value="2"> Service &/or repair<br>
                            <input type="radio" name="qtype" value="3"> Managed Print Service
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">2. What type of device do you require?</label>
                        <div class="col-sm-10">
                            <input type="radio" class="next" name="dtype" value="1"> Multifunction Device / Digital Copier<br>
                            <input type="radio" class="next" name="dtype" value="2"> Printer only (Mono or Colour Laser Printer)<br>
                            <input type="radio" class="next" name="dtype" value="3"> Wide Format Printer / Plotter<br>
                            <input type="radio" class="next" name="dtype" value="3"> Production Printer
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="form-group">
                        <label for="name">3. Are you interested in a new or used device?</label>
                        <div class="col-sm-10">
                            <input type="radio" name="condition" value="1"> New only<br>
                            <input type="radio" name="condition" value="2"> Used only<br>
                            <input type="radio" name="condition" value="3"> I will consider both
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">4. Do you require a black & white or a colour copier?</label>
                        <div class="col-sm-10">
                            <input type="radio" class="next" name="color" value="1"> Colour<br>
                            <input type="radio" class="next" name="color" value="2"> Black & White<br>
                            <input type="radio" class="next" name="color" value="3"> Not sure
                        </div>
                    </div>
                </div>
                
                <div class="step display">
                    <h4>contact Informations</h4>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="email" placeholder="email">
                        </div>
                    </div>			  
                    <div class="form-group">
                        <label for="country" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="country" id="country">
                                <option value="">Select</option>
                                <option value="au">Australia</option>
                            </select>
                        </div>
                    </div>			  
                </div>
                <div class="step">
                    <h1>Thank You!</h1>
                    <p>Please provide final submit and get your quote.</p>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pull-right">
                            <button type="button" class="action btn-sky text-capitalize back btn">Back</button>
                            <button type="button" class="action btn-sky text-capitalize next btn">Next</button>
                            <button type="submit" class="action btn-hot text-capitalize submit btn">Submit</button>
                        </div>
                    </div>
                </div>			

            </div>

        </div> 
    </form> 
</div>




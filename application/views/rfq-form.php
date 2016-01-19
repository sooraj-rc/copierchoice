<style>
    .step{
        min-height: 420px !important;
        font-size: 18px;
    }
</style>
<div class="container">
    <br><br>
    <form class="form-horizontal form" action="manu.php">
        <div class="col-md-8 col-md-offset-2">   	
            <div class="progress">
                <div class="progress-bar progress-bar-success active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="box row-fluid">	
                <br>
                <?php //p($brands); ?>   

                <?php
                $i = 1;
                foreach ($qns_ans as $qa) {
                    $specification = $qa['specification'];
                    ?>
                    <div class="step">
                        <div class="form-group">
                            <label for="name"><?php echo $i++ . ') ' . $qa['question'] ?></label>
                            <div class="col-sm-10">
                                <br>
                                <?php
                                foreach ($qa['answers'] as $ans) {
                                    if ($ans['answer_type'] == "radio") {
                                        echo '<input type="radio" name="qn_' . $qa['question_id'] . '" required value="'.$ans[aid].'" data-id="'.$ans[aid].'"> &nbsp;';
                                    } else if ($ans['answer_type'] == "check") {
                                        echo '<input type="checkbox" name="qn_' . $qa['question_id'] . '[]"> &nbsp;';
                                    }
                                    echo $ans['answer'], '<br>';
                                    
                                }
                                if ($specification == "show_brand") {
                                    foreach ($brands as $brand) {
                                        echo '<input type="checkbox" name="qn_' . $qa['question_id'] . '[]"> &nbsp;' . $brand['maker'] . '<br>';
                                    }
                                }
                                else if($specification == "show_textarea"){
                                    echo '<textarea class="form-control" name="qncomment_'.$qa['question_id'].'"></textarea>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>                    
                <div class="step">
                    <div class="form-group">
                        <h1>Thank You!</h1>
                        <p>Please provide final submit and get your quote.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div align="center">
                            <button type="button" class="action btn-sky text-capitalize back btn">Back</button>
                            <button type="button" class="action btn-sky text-capitalize next btn">Next</button>
                            <button type="submit" class="action btn-fresh text-capitalize submit btn">GET QUOTE NOW!</button>
                        </div>
                    </div>
                </div>			

            </div>

        </div> 
    </form> 
</div>




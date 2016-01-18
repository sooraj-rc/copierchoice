<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">           
                <h4>
                    Leads List
                </h4>
                <hr>

                <?php
                if (!empty($leads)) {
                    ?>
                    <?php echo $links; ?>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date Submission</th>
                                <th>Lead's Name</th>
                                <th>Email</th>
                                <th>Phone(Business)</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i++;
                            foreach ($leads as $lead) {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $lead['sdate']; ?></td>
                                    <td><?php echo $lead['First_Name'] . ' ' . $lead['Last_Name']; ?></td>
                                    <td><?php echo $lead['Email']; ?></td>
                                    <td><?php echo $lead['Business_Phone']; ?></td>
                                    <td><a href="#" class="label label-info more" data-from="leads" data-id="<?php echo $lead['ID']; ?>">View more</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php echo $links; ?>
                    <?php
                } else {
                    echo '<div class="alert alert-warning">Sorry! There is no leads found.</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">           
                <h4>
                    User list
                </h4>
                <hr>

                <?php 
                    if(!empty($users)){
                ?>
                <?php echo $links; ?>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Company Name</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Status</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i++;
                            foreach ($users as $user){
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $user['contact_name']; ?></td>
                                <td><?php echo $user['company_name']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['telephone']; ?></td>
                                <td><a href="#" class="label label-success"><?php echo $user['status']; ?></a></td>
                                <td><a href="#" class="label label-info">View more</a></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <?php echo $links; ?>
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


<h2><?php echo $title ?></h2>
<!-- <div class="d-flex justify-content-between">
    <h4 class="my-3"><?php echo $title ?></h4>
    <a href="<?php echo base_url(); ?>subscriptions/create">
        <button class="btn btn-secondary" style="height: 50px; margin-top: 15px;">Add</button>
    </a>
</div>
<table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Customer_id</th>
            <th scope="col">Package_id</th>
            <th scope="col">Start_date</th>
            <th scope="col">End_Date</th>
            <th scope="col">Active</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($subscriptions as $subscription) : ?>
            <tr>
                <th scope="row"><?php echo $subscription['Id'] ?></th>
                <td><?php echo $subscription['Customer_id'] ?></td>
                <td><?php echo $subscription['Package_id'] ?></td>
                <td><?php echo $subscription['Start_date'] ?></td>
                <td><?php echo $subscription['End_date'] ?></td>
                <td><?php echo $subscription['Active'] ?></td>
                <td><a href="<?php echo base_url() ?>subscriptions/update"><i class="bi bi-pencil-square"></i></a></td>
                <td><a><i class="bi bi-trash3-fill"></i></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table> -->
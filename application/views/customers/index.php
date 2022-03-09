<div class="d-flex justify-content-between">
    <h4 class="my-3"><?php echo $title ?></h4>
    <a href="<?php echo base_url(); ?>customers/create">
        <button class="btn btn-secondary" style="height: 50px; margin-top: 15px;">Add</button>
    </a>
</div>
<table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Sr No.</th>
            <th scope="col">Customer Id</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
        <?php foreach($customers as $customer) : ?>
            <tr>
                <th scope="row"><?php echo $i++ ?></th>
                <td><?php echo $customer['Id'] ?></td>
                <td><?php echo $customer['Name'] ?></td>
                <td><?php echo $customer['Mobile_no'] ?></td>
                <td><?php echo $customer['Email_id'] ?></td>
                <td><a href="<?php echo site_url('/customers/edit/'.$customer['Id']); ?>"><i class="bi bi-pencil-square"></i></a></td>
                <td><a><i class="bi bi-trash3-fill"></i></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>

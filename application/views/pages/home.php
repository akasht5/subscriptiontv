<h2>Dashboard</h2>
<span>Welcome back admin !</span>
<div class="container-fluid my-4">
    <div class="row box-grid">
        <div class="col p-4 border rounded">
            <h4>Customers</h4>
            <p>Manage customers</p>
            <a href="<?php echo base_url() ?>customers">
                <button class="btn btn-outline-primary">Manage</button>
            </a>
        </div>
        <div class="col p-4 border rounded">
            <h4>Subscriptions</h4>
            <p>Manage subscriptions</p>
            <a href="<?php echo base_url(); ?>subscriptions">
                <button class="btn btn-outline-primary">Manage</button>
            </a>
        </div>
        <div class="col p-4 border rounded">
            <h4>Packages</h4>
            <p>Manage packages</p>
            <a href="<?php echo base_url(); ?>packages">
                <button class="btn btn-outline-primary">Manage</button>
            </a>
        </div>
        <div class="col p-4 border rounded">
            <h4>Report</h4>
            <p>Generate report</p>
            <a href="<?php echo base_url(); ?>report">
                <button class="btn btn-outline-primary">Generate</button>
            </a>
        </div>
    </div>
</div>
<div class="xs">
    <h3>Stats Area</h3>
    <div class="well1 white">
        <h2 class="panel panel-heading">Stats Management</h2>
        <div style="height: 30px;"></div>
        <?php
        $msg = $this->session->flashdata('msg');
        if($msg != null) {
            echo "<p class='alert alert-success'>$msg</p>";
        }
        ?>
        <?php foreach ($allstats as $stats):?>
        <form class="form-floating" action="<?php echo base_url()?>stats/update" method="post" enctype="multipart/form-data" >
            <fieldset>
                <div class="form-group">
                    <label class="control-label">Complete Projects</label>
                    <input type="text" name="cproject" value="<?php echo $stats->cproject; ?>" class="form-control1">
                    <?php echo form_error('cproject','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Happy Clients</label>
                    <input type="text" name="hclient" value="<?php echo $stats->hclient; ?>" class="form-control1">
                    <?php echo form_error('hclient','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Awards Won</label>
                    <input type="text" name="awon" value="<?php echo $stats->awon; ?>" class="form-control1">
                    <?php echo form_error('awon','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Our Clicks</label>
                    <input type="text" name="oclick" value="<?php echo $stats->oclick; ?>" class="form-control1">
                    <?php echo form_error('oclick','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Change">
                </div>
            </fieldset>
        </form>
        <?php endforeach; ?>
    </div>
</div>
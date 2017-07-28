<div class="xs">
    <h3>My Photos Area</h3>
    <div class="well1 white">
        <h2 class="panel panel-heading">Add New Photo In Gallery</h2>
        <a href="<?php echo base_url();?>my-photos" class="btn btn-info own">View All</a>
        <div style="height: 30px;"></div>
        <?php
        $msg = $this->session->flashdata('msg');
        if($msg != null) {
            echo "<p class='alert alert-success'>$msg</p>";
        }
        ?>

        <form class="form-floating" action="<?php echo base_url()?>my-photos/store" method="post" enctype="multipart/form-data" >
            <fieldset>
                <div class="form-group">
                    <label class="control-label">Caption</label>
                    <input type="text" name="caption" value="<?php echo set_value('caption'); ?>" class="form-control1">
                    <?php echo form_error('caption','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Picture</label>
                    <input type="file" name="pic">
                    <?php echo form_error('pic','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Save">
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
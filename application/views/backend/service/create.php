<div class="xs">
    <h3>What I Create Area</h3>
    <div class="well1 white">
        <h2 class="panel panel-heading">What I Create Management</h2>
        <a href="<?php echo base_url();?>service" class="btn btn-info own">View All</a>
        <div style="height: 30px;"></div>
        <?php
        $msg = $this->session->flashdata('msg');
        if($msg != null) {
            echo "<p class='alert alert-success'>$msg</p>";
        }
        ?>

        <form class="form-floating" action="<?php echo base_url()?>service/store" method="post" enctype="multipart/form-data" >
            <fieldset>
                <div class="form-group">
                    <label class="control-label">Title</label>
                    <input type="text" name="title" value="<?php echo set_value('title'); ?>" class="form-control1">
                    <?php echo form_error('title','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea name="description"  cols="30" rows="5" class="form-control"></textarea>
                    <?php echo form_error('description','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Save">
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<div class="xs">
    <h3>About Area</h3>
    <div class="well1 white">
        <h2 class="panel panel-heading">About Area Management</h2>
        <div style="height: 30px;"></div>
        <?php
        $msg = $this->session->flashdata('msg');
        if($msg != null) {
            echo "<p class='alert alert-success'>$msg</p>";
        }
        ?>
        <?php foreach ($about as $ab):?>
        <form class="form-floating" action="<?php echo base_url()?>about/store" method="post" enctype="multipart/form-data" >
            <fieldset>
                <div class="form-group">
                    <label class="control-label">Short Description</label>
                    <textarea name="description"  cols="30" rows="5" class="form-control"><?php echo $ab->description;?></textarea>
                    <?php echo form_error('description','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Change">
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </fieldset>
        </form>
        <?php endforeach; ?>
    </div>
</div>
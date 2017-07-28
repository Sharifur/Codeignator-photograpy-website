<div class="xs">
    <h3>Footer Area</h3>
    <div class="well1 white">
        <h2 class="panel panel-heading">Footer Social Links Management</h2>
        <div style="height: 30px;"></div>
        <?php
        $msg = $this->session->flashdata('msg');
        if($msg != null) {
            echo "<p class='alert alert-success'>$msg</p>";
        }
        ?>
        <?php foreach ($footerlinks as $flinks):?>
        <form class="form-floating" action="<?php echo base_url()?>footer/update" method="post" enctype="multipart/form-data" >
            <fieldset>
                <div class="form-group">
                    <label class="control-label">Facebook Link</label>
                    <input type="text" name="facebook" value="<?php echo $flinks->facebook; ?>" class="form-control1">
                    <?php echo form_error('facebook','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Twitter Link</label>
                    <input type="text" name="twitter" value="<?php echo $flinks->twitter; ?>" class="form-control1">
                    <?php echo form_error('twitter','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Dribble Link</label>
                    <input type="text" name="dribble" value="<?php echo $flinks->dribble; ?>" class="form-control1">
                    <?php echo form_error('dribble','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Rss Feed</label>
                    <input type="text" name="rss" value="<?php echo $flinks->rss; ?>" class="form-control1">
                    <?php echo form_error('rss','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Change">
                </div>
            </fieldset>
        </form>
        <?php endforeach; ?>
    </div>
</div>
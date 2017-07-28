<div class="xs">
    <h3>Edit Header Area</h3>
    <div class="well1 white">
        <h2 class="panel panel-heading">Header Area Management</h2>
        <a href="<?php echo base_url();?>header" class="btn btn-info own">View All</a>
        <a href="<?php echo base_url();?>header/create" class="btn btn-info own">Add New </a>
        <div style="height: 30px;"></div>
            <?php
                $msg = $this->session->flashdata('msg');
            if($msg != null) {
                echo "<p class='alert'>$msg</p>";
               }
            ?>
                <?php foreach ($headers as $hitems):?>
        <form class="form-floating" action="<?php echo base_url()?>header/update/<?php echo $hitems->id;?>" method="post" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group">
                    <label class="control-label">Bordered Text</label>
                    <input type="text" name="brtext" value="<?php echo $hitems->btext; ?>" class="form-control1">
                    <?php echo form_error('brtext','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Title</label>
                    <input type="text" name="title" value="<?php echo $hitems->title; ?>" class="form-control1">
                    <?php echo form_error('title','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Short Description</label>
                    <textarea name="shortdes"  cols="30" rows="5" class="form-control"><?php echo $hitems->shortdes;?></textarea>
                    <?php echo form_error('shortdes','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Picture</label>
                    <input type="file" name="pic">
                    <?php echo form_error('pic','<span class="text-danger">', '</span>'); ?>
                    <div style="height: 30px;"></div>
                    <?php if(file_exists("images/header/header-pic-{$hitems->id}.{$hitems->picture}")):?>
                        <img src="<?php echo base_url();?>images/header/header-pic-<?php echo $hitems->id.'.'.$hitems->picture;?>" width="100" alt="Header Images">
                    <?php else:?>
                        <img src="<?php echo base_url();?>images/no-thumb.jpg" width="100" alt="Header Images">
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Change">
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </fieldset>
        </form>
        <?php endforeach;?>
    </div>
</div>
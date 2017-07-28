<div class="xs">
    <h3>My Photos Area</h3>
    <div class="well1 white">
        <h2 class="panel panel-heading">Edit Gallery Post</h2>
        <a href="<?php echo base_url();?>my-photos" class="btn btn-info own">View All</a>
        <div style="height: 30px;"></div>
        <?php
        $msg = $this->session->flashdata('msg');
        if($msg != null) {
            echo "<p class='alert alert-success'>$msg</p>";
        }
        ?>
        <?php foreach($allphotos as $photos): ?>
        <form class="form-floating" action="<?php echo base_url();?>my-photos/update/<?php echo $photos->id; ?>" method="post" enctype="multipart/form-data" >
            <fieldset>
                <div class="form-group">
                    <label class="control-label">Caption</label>
                    <input type="text" name="caption" value="<?php echo $photos->caption; ?>" class="form-control1">
                    <?php echo form_error('caption','<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Picture</label>
                    <input type="file" name="pic">
                    <div style="height: 30px;"></div>
                    <?php if(file_exists("images/photos-gallery/gall-pic-{$photos->id}.{$photos->picture}")):?>
                        <img src="<?php echo base_url();?>images/photos-gallery/gall-pic-<?php echo $photos->id.'.'.$photos->picture;?>" width="100" alt="Header Images">
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
        <?php endforeach; ?>
    </div>
</div>
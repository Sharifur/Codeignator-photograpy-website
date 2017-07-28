<div class="xs">
    <h3>My Photos Area</h3>
    <div class="well1 white">
        <h2 class="panel panel-heading">My Photos Gallery</h2>
        <a href="<?php echo base_url();?>my-photos/create" class="btn btn-info own">Add New</a>
        <div style="height: 20px;"></div>
        <?php
        $msg = $this->session->flashdata('msg');
        if($msg != null) {
            echo "<p class='alert alert-success'>$msg</p>";
        }
        ?>

        <div class="panel panel-warning own" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
            <div class="panel-heading">
                <h2>All Header items</h2>
                <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
            </div>
            <div class="panel-body no-padding" style="display: block;">
                <table class="table table-striped">
                    <thead>
                    <tr class="warning">
                        <th>id</th>
                        <th>Caption </th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($gphotos as $photos):?>
                        <tr>
                            <td><?php echo $photos->id; ?></td>
                            <td><?php echo $photos->caption; ?></td>
                            <td>
                                <div style="height: 30px;"></div>
                                <?php if(file_exists("images/photos-gallery/gall-pic-{$photos->id}.{$photos->picture}")):?>
                                    <img src="<?php echo base_url();?>images/photos-gallery/gall-pic-<?php echo $photos->id.'.'.$photos->picture;?>" width="100" alt="Header Images">
                                <?php else:?>
                                    <img src="<?php echo base_url();?>images/no-thumb.jpg" width="100" alt="Header Images">
                                <?php endif;?>
                            </td>
                            <td>
                                <a href="<?php echo base_url();?>my-photos/edit/<?php echo $photos->id?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo base_url();?>my-photos/delete/<?php echo $photos->id?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="xs">
    <h3>Header Area</h3>
    <div class="well1 white">
        <h2 class="panel panel-heading">All Header Items</h2>
        <a href="<?php echo base_url();?>header/create" class="btn btn-info own">Add New</a>

        <?php
        $msg = $this->session->flashdata('msg');
        if($msg != null) {
            echo "<p class='alert'>$msg</p>";
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
                        <th>Bordered Text</th>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($header as $hitem):?>
                    <tr>
                        <td><?php echo $hitem->id; ?></td>
                        <td><?php echo $hitem->btext; ?></td>
                        <td><?php echo $hitem->title; ?></td>
                        <td><?php echo $hitem->shortdes; ?></td>
                        <td>
                            <?php if(file_exists("images/header/header-pic-{$hitem->id}.{$hitem->picture}")):?>
                            <img src="<?php echo base_url();?>images/header/header-pic-<?php echo $hitem->id.'.'.$hitem->picture;?>" width="100" alt="Header Images">
                            <?php else:?>
                                <img src="<?php echo base_url();?>images/no-thumb.jpg" width="100" alt="Header Images">
                            <?php endif;?>
                        </td>
                        <td>
                            <a href="<?php echo base_url();?>header/edit/<?php echo $hitem->id?>" class="btn btn-primary btn-xs">Edit</a>
                            <a href="<?php echo base_url();?>header/delete/<?php echo $hitem->id?>" class="btn btn-danger btn-xs">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
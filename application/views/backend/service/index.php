<div class="xs">
    <h3>What I create Area</h3>
    <div class="well1 white">
        <h2 class="panel panel-heading">What I Create Items</h2>
        <a href="<?php echo base_url();?>service/create" class="btn btn-info own">Add New</a>
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
                        <th>Title </th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($allservice as $sitem):?>
                        <tr>
                            <td><?php echo $sitem->id; ?></td>
                            <td><?php echo $sitem->title; ?></td>
                            <td><?php echo $sitem->description; ?></td>
                            <td>
                                <a href="<?php echo base_url();?>service/edit/<?php echo $sitem->id?>" class="btn btn-primary btn-xs">Edit</a>
                                <a href="<?php echo base_url();?>service/delete/<?php echo $sitem->id?>" class="btn btn-danger btn-xs">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
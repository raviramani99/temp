<?php foreach ($aProjectDetails['records'] as $aProjectDetail) { ?>
<div class="edit-project">
    <div class="edit-project-header">
        <h1><?php echo __('update_project'); ?></h1>
    </div>
    <div>
        <div>
            <div class="col-sm-12 edit-project-form-design">
                <div class="col-sm-6">
                                        <img alt="image" class="img-responsive" src="<?php echo getConfig('mediaUrl') . '/' . $aProjectDetails['records'][0]['project_image']; ?>" width="80%">
                </div>
                <form class="col-sm-6" name="updateProject" method="POST" enctype="multipart/form-data" action="" role="form">
                    <table>
                        <tr>
                            <td><label>Project Id</label></td><td><input type="text" name="project_id" value="<?php echo $aProjectDetail['project_id']; ?>"></td>
                        </tr>
                        <tr>
                        <td><label>Project Title</label></td> <td><input type="text" name="project_title" value="<?php echo $aProjectDetail['project_title']; ?>"></td>
                        </tr>
                        <tr>
                        <td><label>Project Description</label></td> <td><textarea name="project_description"><?php echo $aProjectDetail['project_description']; ?></textarea></td>
                        </tr>
                        <tr>
                        <td><label>Project Owner</label></td> <td><input type="text" name="project_owner" value="<?php echo $aProjectDetail['project_owner']; ?>"></td>
                        </tr>
                        <tr>
                        <td><label>Project Image</label></td> <td><input type="text" name="project_image" value="<?php echo $aProjectDetail['project_image']; ?>"></td>                    
                        </tr>
                        <tr>
                        <td><label>Project Location</label></td>
                        <td>
                            <select name="project_location">
                                <option>Ahmedabad</option>
                                <option>Surat</option>
                                <option>Baroda</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <button class="btn btn-sm btn-primary" type="submit" name="update_project"><strong><?php echo __('update_project') ?></strong></button>
                        </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>    
    <?php
}
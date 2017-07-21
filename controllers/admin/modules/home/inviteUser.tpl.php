<div class="row wrapper border-bottom white-bg page-heading" style="padding-top:20px;">
    <div class="col-lg-offset-1 col-lg-10 text-center">
        <a href="<?php echo getconfig('siteUrl') . '/home/index' ?>" class="btn btn-primary btn-admin" title="<?php echo __('home'); ?>"><?php echo __('home') ?></a>
        <a href="<?php echo getconfig('siteUrl') . '/companies/company' ?>" class="btn btn-primary btn-admin" title="<?php echo __('company'); ?>"><?php echo __('company') ?></a>
        <a href="<?php echo getconfig('siteUrl') . '/projects/projects' ?>" class="btn btn-primary btn-admin" title="<?php echo __('projects'); ?>"><?php echo __('projects') ?></a>
        <a href="<?php echo getconfig('siteUrl') . '/home/users' ?>" class="btn btn-primary btn-admin" title="<?php echo __('users'); ?>"><?php echo __('users') ?></a>
    </div>
</div>
                
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-offset-1 col-lg-10">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo __('invite_user')?></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form name="inviteUser" method="POST" enctype="multipart/form-data" action ="" role="form" class="form-horizontal">
                        <div class="form-group"><label class="col-sm-2 control-label"><?php echo __('mail_id')?></label>
                            <div class="col-sm-10"><input type="text" placeholder="<?php echo __('user_mail_id')?>" class="form-control" name="user_email"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-4 text-center">
                                <button class="btn btn-white btn-form" type="submit">Cancel</button>
                                <button class="btn btn-primary btn-form" type="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

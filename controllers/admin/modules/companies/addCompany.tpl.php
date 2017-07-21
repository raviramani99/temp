<div class="row wrapper border-bottom white-bg page-heading" style="padding-top:20px;">
            <div class="col-lg-offset-1 col-lg-10 text-center">
                <a href="<?php echo getconfig('siteUrl') . '/home/index' ?>" class="btn btn-primary btn-admin" title="<?php echo __('home'); ?>"><?php echo __('home') ?></a>
                <a href="<?php echo getconfig('siteUrl') . '/home/users' ?>" class="btn btn-primary btn-admin" title="<?php echo __('users'); ?>"><?php echo __('users') ?></a>
                <a href="<?php echo getconfig('siteUrl') . '/projects/projects' ?>" class="btn btn-primary btn-admin" title="<?php echo __('projects'); ?>"><?php echo __('projects') ?></a>
                <a href="<?php echo getconfig('siteUrl') . '/companies/company' ?>" class="btn btn-primary btn-admin" title="<?php echo __('company'); ?>"><?php echo __('company') ?></a>
            </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo __('add_company');?> <small><?php echo __('autogenerated_password_will_sent_in_mail');?></small></h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b"><?php echo __('company_details');?></h3>
                            <form role="form">
                                <div class="form-group"><label><?php echo __('company_name');?></label> <input type="text" placeholder="Enter Company Name" class="form-control"></div>
                                <div class="form-group"><label><?php echo __('mail');?></label> <input type="email" placeholder="Enter email" class="form-control"></div>

                            </form>
                        </div>
                        <div class="col-sm-6"><h4><?php echo __('company_logo_or_image');?></h4>
                            <p><?php echo __('select_image');?></p>
                            <p class="text-center">
                                <a href=""><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong><?php echo __('add_company');?></strong></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
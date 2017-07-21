<body style="background-image: url('<?php echo getConfig('mediaUrl') . '/' . $aProjectDetails['records'][0]['project_image']; ?>');">
        <div class="border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a href="<?php echo getconfig('siteUrl') . '/home/index' ?>"><img src="<?php echo getConfig('siteUrl') . '/images/logo-t.png' ?>" style="overflow: hidden;">
                </div>
                <div class="navbar-menu">
                    <a href="<?php echo getConfig('siteUrl') . '/dashboard/index?project_id=' . $nProId . '&project_name=' . $sProName; ?>"><i class="fa fa-home"></i><?php echo __('_home') ?></a>
                    <a href="<?php echo getConfig('siteUrl') . '/documents/documents?project_id=' . $nProId . '&project_name=' . $sProName; ?>"><i class="fa fa-folder"></i><?php echo __('_documents') ?></a>
                    <a href="<?php echo getConfig('siteUrl') . '/checklist/checklist?project_id=' . $nProId . '&project_name=' . $sProName; ?>"><i class="fa fa-check"></i><?php echo __('_checklist') ?></a>
                    <a href="<?php echo getconfig('siteUrl') . '/floorplan/index?project_id=' . $nProId . '&project_name=' . $sProName; ?>"><i class="fa fa-copy"></i> <?php echo __('_floorplans') ?></a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome <?php
                            if ($oSession->getSession('sDisplayUserName')) {
                                echo $oSession->getSession('sDisplayUserName', false);
                            }
                            ?></span>
                    </li>
                    <li>
                        <img class="img-circle " src="<?php echo getConfig('mediaUrl') . '/images/logo.png' ?>" alt="*" style="width:50px; height:50px;"/>
                    </li>
                    <li>
                        <a href="<?php echo getconfig('siteUrl') . '/users/logout' ?>" title="<?php echo __('logout'); ?>"><i class="fa fa-sign-out"></i><?php echo __('logout') ?></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div style="padding: 5px">

        </div>
        <div class="main-container">
            <div class="col-lg-offset-1 col-lg-10">
                <div class="wrapper wrapper-content">
                    <?php foreach ($aProjectDetails['records'] as $aProjectDetail) { ?>
                        <div class="col-lg-4">
                            <div class="widget-head-color-box navy-bg p-lg text-center" style="">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        <?php echo $aProjectDetail['project_title']; ?>
                                    </h2>
                                    <small>Put here role</small>
                                </div>
                                <img src="<?php echo getConfig('mediaUrl') . '/' . $aProjectDetail['project_image']; ?>" class="img-circle circle-border m-b-md" alt="profile" height="150px" width="150px">
                                <div>
                                    <span>100 Tweets</span> |
                                    <span>350 Following</span> |
                                    <span>610 Followers</span>
                                </div>
                            </div>
                            <div class="widget-text-box">
                                <h4 class="media-heading">By : <?php echo $aProjectDetail['project_owner']; ?></h4>
                                <p><?php echo $aProjectDetail['project_description']; ?></p>
                                <div class="text-right">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content ">
                                <div class="carousel slide" id="carousel2">
                                    <ol class="carousel-indicators">
                                        <li data-slide-to="0" data-target="#carousel2"  class="active"></li>
                                        <li data-slide-to="1" data-target="#carousel2"></li>
                                        <li data-slide-to="2" data-target="#carousel2" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img alt="image"  class="img-responsive" src="<?php echo getConfig('mediaUrl') . '/3Afr0xwMZi.jpg' ;?>">
                                            <div class="carousel-caption">
                                                <p>Front View</p>
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img alt="image"  class="img-responsive" src="<?php echo getConfig('mediaUrl') . '/4mAY0beJhn.jpg';?>">
                                            <div class="carousel-caption">
                                                <p>Sea View</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img alt="image"  class="img-responsive" src="<?php echo getConfig('mediaUrl') . '/9p2MDQPsqS.jpg';?>">
                                            <div class="carousel-caption">
                                                <p>Garden View</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a data-slide="prev" href="#carousel2" class="left carousel-control">
                                        <span class="icon-prev"></span>
                                    </a>
                                    <a data-slide="next" href="#carousel2" class="right carousel-control">
                                        <span class="icon-next"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2" style="margin-top: 10px;">
                        <div class="ibox-content">
                            <div>
                                <div>
                                    <span>Memory</span>
                                    <small class="pull-right">10/200 GB</small>
                                </div>
                                <div class="progress-striped progress-small">
                                    <div style="width: 60%;" class="progress-bar"></div>
                                </div>
                                <div>
                                    <span>Bandwidth</span>
                                    <small class="pull-right">20 GB</small>
                                </div>
                                <div class="progress progress-small">
                                    <div style="width: 50%;" class="progress-bar"></div>
                                </div>
                                <div>
                                    <span>Activity</span>
                                    <small class="pull-right">73%</small>
                                </div>
                                <div class="progress progress-small">
                                    <div style="width: 40%;" class="progress-bar"></div>
                                </div>
                                <div>
                                    <span>FTP</span>
                                    <small class="pull-right">400 GB</small>
                                </div>
                                <div class="progress progress-small">
                                    <div style="width: 20%;" class="progress-bar progress-bar-danger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <div class="footer">
        <div class="pull-right">
            10GB of <strong>250GB</strong> Free.
        </div>
        <div>
            <strong>Copyright</strong> Example Company &copy; 2014-2015
        </div>
    </div>

</body>
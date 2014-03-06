<div class="navbar navbar-nav" role="navigation">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav side-nav">
                <li><div class="navbar-pad-left nav-header header-image"><a class="navbar-brand" href="<?php echo site_url('admin/index') ?>">
                        <input type="image"  src="<?php echo base_url() ?>assets/img/unicef_logo.png"/>
                    </a></div></li>
                    <br>
                    <hr class="hr-light-blue">
                <div class="navbar-pad-left <?php echo ($current_section == 'quest') ? 'active' : '' ?>">
                    <a href="<?php echo site_url('admin/questform') ?>"><img id="create-quest-btn"src="<?php echo base_url() ?>assets/img/create_quest_btn.png" alt="Create Quest"></a>
                </div>       
                <li class="<?php echo ($current_section == 'home') ? 'active' : '' ?>"><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-home"></i>  Home</a></li>
                
                <li class="<?php echo ($current_section == 'profile') ? 'active' : '' ?>"><a href="<?php echo site_url('admin/partnerform') ?>"><i class="fa fa-pencil"></i>  Edit profile</a></li>
                <li class="<?php echo ($current_section == 'notification') ? 'active' : '' ?>"><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-bell"></i><span class="badge pull-right badge-green">4</span>  Notification</a></li>
                <li class="<?php echo ($current_section == 'stat') ? 'active' : '' ?>"><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-bar-chart-o"></i></span>  Statistics</a></li>
                
                
            </ul>
            <ul class="nav navbar-nav side-nav bottom-left-nav">
                
                <li class="<?php echo ($current_section == 'help') ? 'active' : '' ?>"><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-shield"></i>  Help me!</a></li>
                <li class="<?php echo ($current_section == 'signout') ? 'active' : '' ?>"><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-power-off"></i>  Sign me out</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="watermark">
    
</div>
<div class="alert alert-danger alert-dismissable top-alert">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
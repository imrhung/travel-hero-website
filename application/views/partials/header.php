<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header"><a class="navbar-brand" href="<?php echo site_url() ?>">Travel Hero Admin</a></div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="<?php echo ($current_section == 'home') ? 'active' : '' ?>"><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="<?php echo ($current_section == 'quest') ? 'active' : '' ?>"><a href="<?php echo site_url('admin/questform') ?>"><i class="fa fa-edit"></i> Create Quest</a></li>
                <li class="<?php echo ($current_section == 'partner') ? 'active' : '' ?>"><a href="<?php echo site_url('admin/partnerform') ?>"><i class="fa fa-edit"></i> Partner</a></li>
                <li class="<?php echo ($current_section == 'quests') ? 'active' : '' ?>"><a href="<?php echo site_url('admin/questlist') ?>"><i class="fa fa-book"></i> Quests List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php if ($user_logged_in): ?>
                        <a  href="<?php echo site_url('my-account') ?>"><i class="icon-user icon-white"></i> My account</a>
                    </li><li>
                        <a  href="<?php echo site_url('logout') ?>">Logout</a>

                    <?php else: ?>
                        <a  href="<?php echo site_url('login') ?>">Login</a>
                    <?php endif ?>
                </li>
            </ul>
        </div>
    </div>
</div>

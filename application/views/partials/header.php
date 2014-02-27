<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header"><a class="navbar-brand" href="<?php echo site_url() ?>">Travel Hero</a></div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php echo ($current_section == 'home') ? 'active' : '' ?>"><a href="<?php echo site_url('ngo') ?>">Home</a></li>
                <li class="<?php echo ($current_section == 'page') ? 'active' : '' ?>"><a href="<?php echo site_url('quest') ?>">Quest</a></li>
                <li class="<?php echo ($current_section == 'another-page') ? 'active' : '' ?>"><a href="<?php echo site_url('#') ?>">Community</a></li>
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

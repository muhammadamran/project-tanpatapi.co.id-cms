<!-- begin #header -->
<div id="header" class="header navbar-default">
    <!-- begin navbar-header -->
    <div class="navbar-header">
        <!-- <a href="index.php" class="navbar-brand"><span class="navbar-logo" style="background: <?= $btnColor; ?>;"></span> -->
        <a href="index.php" class="navbar-brand"><span class="navbar-logo"></span>
            <div>
                <div style="margin-top: 5px;">
                    <b><?= $app_name; ?></b>
                </div>
                <div style="font-size: 9px;font-weight: 100;margin-top: -15px;">
                    <?= $company; ?>
                </div>
            </div>
        </a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- end navbar-header -->

    <!-- begin header-nav -->
    <ul class="navbar-nav navbar-right">
        <!-- <li class="navbar-form">
            <form action="" method="POST" name="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter keyword" />
                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </li> -->
        <!-- <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                <i class="fa fa-bell"></i>
                <span class="label">5</span>
            </a>
            <div class="dropdown-menu media-list dropdown-menu-right">
                <div class="dropdown-header">NOTIFICATIONS (5)</div>
                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <i class="fa fa-bug media-object bg-silver-darker"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
                        <div class="text-muted f-s-10">3 minutes ago</div>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
                        <i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading">John Smith</h6>
                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                        <div class="text-muted f-s-10">25 minutes ago</div>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
                        <i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading">Olivia</h6>
                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                        <div class="text-muted f-s-10">35 minutes ago</div>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <i class="fa fa-plus media-object bg-silver-darker"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading"> New User Registered</h6>
                        <div class="text-muted f-s-10">1 hour ago</div>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <i class="fa fa-envelope media-object bg-silver-darker"></i>
                        <i class="fab fa-google text-warning media-object-icon f-s-14"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading"> New Email From John</h6>
                        <div class="text-muted f-s-10">2 hour ago</div>
                    </div>
                </a>
                <div class="dropdown-footer text-center">
                    <a href="javascript:;">View more</a>
                </div>
            </div>
        </li> -->
        <li>
            <div style="margin-top: 8px;margin-left:10px">
                <button type="button" class="btn btn-dark-custom" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Local Time +07:00">
                    <i class="far fa-clock"></i>
                    <font id="todaysDate"></font>
                </button>
            </div>
        </li>
        <li>
            <div style="margin-top: 8px;margin-left:10px">
                <button type="button" onClick="showHideRA('divRA')" class="btn btn-dark-custom" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Activity">
                    <i class="fa-solid fa-calendar"></i>
                    Activity
                </button>
            </div>
        </li>
        <li class="dropdown navbar-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php if ($_SESSION['photo'] == NULL) { ?>
                    <?php if ($_SESSION['jk'] == 'Pria') { ?>
                        <img src="assets/apps/user/male.jpg" alt="Profile" />
                    <?php } elseif ($_SESSION['jk'] == 'Wanita') { ?>
                        <img src="assets/apps/user/female.jpg" alt="Profile" />
                    <?php } else { ?>
                        <img src="assets/apps/user/1.jpg" alt="Profile" />
                    <?php } ?>
                <?php } else { ?>
                    <img src="assets/apps/user/<?= $_SESSION['photo'] ?>" alt="Profile" />
                <?php } ?>
                <b class="caret" style="margin-top: 7px;"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">Log Out</a>
            </div>
        </li>
    </ul>
    <!-- end header-nav -->
</div>
<!-- end #header -->
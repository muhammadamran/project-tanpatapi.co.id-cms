<div id="sidebar" class="sidebar">
    <div data-scrollbar="true" data-height="100%">
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
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
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        <font style="text-transform: capitalize;"><?= $_SESSION['first'] ?> <?= $_SESSION['last'] ?></font>
                        <small>Front end developer</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                    <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub active">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="index.html">Dashboard v1</a></li>
                    <li><a href="index_v2.html">Dashboard v2</a></li>
                    <li class="active"><a href="index_v3.html">Dashboard v3</a></li>
                </ul>
            </li>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar-bg"></div>
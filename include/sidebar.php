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
                        <small><?= $_SESSION['email'] ?></small>
                        <small>Job<?= $_SESSION['job'] ?></small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa-solid fa-user-gear"></i> Profile</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-header">Main</li>
            <li>
                <a href="" target="_blank">
                    <i class="fa-solid fa-globe"></i>
                    <span>Website</span>
                </a>
            </li>
            <li class="nav-header">Navigation</li>
            <li class="<?= empty($_GET['m']) ? 'active' : '' ?>">
                <a href="index.php">
                    <i class="fa-solid fa-cubes-stacked"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'menu' ? 'active' : '' ?>">
                <a href="index.php?m=menu&s=index">
                    <i class="fa-solid fa-folder-plus"></i>
                    <span>Menu</span>
                </a>
            </li>
            <li class="has-sub <?= !empty($_GET['m']) && $_GET['m'] == 'content' ? 'active' : '' ?>">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa-solid fa-folder-tree"></i>
                    <span>Content</span>
                </a>
                <ul class="sub-menu">
                    <?php
                    $QueryMenu = $db->query("SELECT * FROM tb_menu ORDER BY id ASC");
                    foreach ($QueryMenu as $rowMenu) :
                        $R = $rowMenu['id'];
                    ?>
                        <li class="<?= $_GET['m'] == 'content' && !empty($_GET['s']) && $_GET['s'] == $R ? 'active' : '' ?>">
                            <a href="index.php?m=content&s=<?= $R; ?>">
                                <?= $rowMenu['menu']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'setting' ? 'active' : '' ?>">
                <a href="index.php?m=setting&s=index">
                    <!-- <i class="fa-solid fa-gears fa-beat-fade"></i> -->
                    <i class="fa-solid fa-gears"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'users' ? 'active' : '' ?>">
                <a href="index.php?m=users&s=index">
                    <i class="fa-solid fa-users-gear"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="nav-header">Point of Sale</li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'ch' ? 'active' : '' ?>">
                <a href="index.php?m=pos&s=index">
                    <i class="fa-solid fa-cash-register"></i>
                    <span>Pos</span>
                </a>
            </li>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar-bg"></div>
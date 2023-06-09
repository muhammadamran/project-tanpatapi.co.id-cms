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
                        <!-- <b class="caret pull-right"></b> -->
                        <font style="text-transform: capitalize;"><?= $_SESSION['first'] ?> <?= $_SESSION['last'] ?></font>
                        <!-- <small><?= $_SESSION['email'] ?></small> -->
                        <small>Job<?= $_SESSION['job'] ?></small>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-header">Main</li>
            <li>
                <a href="<?= $urlWeb; ?>" target="_blank">
                    <i class="fa-solid fa-globe icon-page-sidebar"></i>
                    <span>Website</span>
                </a>
            </li>
            <li class="nav-header">Navigation</li>
            <li class="<?= empty($_GET['m']) ? 'active' : '' ?>">
                <a href="index.php">
                    <i class="fa-solid fa-cubes-stacked icon-page-sidebar"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'menu' ? 'active' : '' ?>">
                <a href="index.php?m=menu&s=index">
                    <i class="fa-solid fa-folder-plus icon-page-sidebar"></i>
                    <span>Menu</span>
                </a>
            </li>
            <li class="has-sub <?= !empty($_GET['m']) && $_GET['m'] == 'content' ? 'active' : '' ?>">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa-solid fa-folder-tree icon-page-sidebar"></i>
                    <span>Content</span>
                </a>
                <ul class="sub-menu">
                    <?php
                    $QueryMenu = $db->query("SELECT * FROM tb_menu ORDER BY id ASC");
                    $Result    = mysqli_fetch_array($QueryMenu);
                    ?>
                    <?php if ($Result['id'] != NULL) { ?>
                        <?php
                        foreach ($QueryMenu as $rowMenu) :
                            $R = $rowMenu['id'];
                        ?>
                            <li class="<?= $_GET['m'] == 'content' && !empty($_GET['s']) && $_GET['s'] == $R |
                                            // 1
                                            $_GET['s'] == $R . '-' .  'menu' ||
                                            $_GET['s'] == $R . '-' .  'menu-u' ||
                                            // 2
                                            $_GET['s'] == $R . '-' .  'menu' ||
                                            $_GET['s'] == $R . '-' .  'menu-1' ||
                                            $_GET['s'] == $R . '-' .  'menu-1-u' ||
                                            $_GET['s'] == $R . '-' .  'menu-2' ||
                                            $_GET['s'] == $R . '-' .  'menu-2-u' ||
                                            // 3
                                            $_GET['s'] == $R . '-' .  'list' ||
                                            $_GET['s'] == $R . '-' .  'menu' ||
                                            // 4
                                            $_GET['s'] == $R . '-' .  'sweet' ||
                                            $_GET['s'] == $R . '-' .  'savory' ||
                                            // 5
                                            // 6
                                            $_GET['s'] == $R . '-' .  'promo' ||
                                            $_GET['s'] == $R . '-' .  'update'
                                            // 7
                                            // 8

                                            ? 'active' : '' ?>">
                                <?php
                                $nameMenu = str_replace("&", ' ', $rowMenu['menu']);
                                ?>
                                <a href="index.php?m=content&s=<?= $R; ?>&n=<?= $nameMenu; ?>">
                                    <?= $rowMenu['menu']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php } else { ?>
                        <li>
                            <a href="#">
                                No data available
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <!-- <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'setting' ? 'active' : '' ?>">
                <a href="index.php?m=setting&s=index">
                    <i class="fa-solid fa-gears icon-page-sidebar"></i>
                    <span>Setting</span>
                </a>
            </li> -->
            <li class="has-sub <?= !empty($_GET['m']) && $_GET['m'] == 'setting' ? 'active' : '' ?>">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa-solid fa-gears icon-page-sidebar"></i>
                    <span>Setting</span>
                </a>
                <ul class="sub-menu">
                    <li class="has-sub <?= !empty($_GET['s']) && $_GET['s'] == 'index' ? 'active' : '' ?>">
                        <a href="index.php?m=setting&s=index">Set Company Webiste</a>
                    </li>
                    <!-- <li class="has-sub <?= !empty($_GET['s']) && $_GET['s'] == 'images' ? 'active' : '' ?>">
                        <a href="index.php?m=setting&s=images">Set Images</a>
                    </li> -->
                </ul>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'users' ? 'active' : '' ?>">
                <a href="index.php?m=users&s=index">
                    <i class="fa-solid fa-users-gear icon-page-sidebar"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'message' ? 'active' : '' ?>">
                <a href="index.php?m=message&s=index">
                    <i class="fa-solid fa-envelope-open-text icon-page-sidebar"></i>
                    <span>Message</span>
                </a>
            </li>
            <li class="nav-header">Point of Sale</li>
            <!-- <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'pos' ? 'active' : '' ?>">
                <a href="index.php?m=pos&s=index">
                    <i class="fa-solid fa-cash-register icon-page-sidebar"></i>
                    <span>Pos System</span>
                </a>
            </li> -->
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa-solid fa-cash-register icon-page-sidebar"></i>
                    <span>Pos System
                        <span class="label label-theme">
                            Lock
                        </span>
                    </span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Customer Order</a></li>
                    <li><a href="#">Kitchen Order</a></li>
                    <li><a href="#">Counter Checkout</a></li>
                    <li><a href="#">Table Booking</a></li>
                    <li><a href="#">Menu Stock</a></li>
                </ul>
            </li>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar-bg"></div>
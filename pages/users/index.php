<title>Users <?= $title; ?></title>
<!-- begin #content -->
<div id="content" class="content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Users</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <div style="font-size: 12px;display: flex;">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- end page-header -->
    <div class="line-page"></div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-inverse" data-sortable-id="index-6">
                <div class="panel-heading">
                    <h4 class="panel-title">Manage Data</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- Alert -->
                    <?php if (isset($_GET["ResetPasswordSuccess"])) { ?>
                        <!-- Reset Password Success -->
                        <div class="note note-success m-b-15">
                            <div class="note-icon">
                                <i class="fa-solid fa-circle-check fa-fade"></i>
                            </div>
                            <div class="note-content">
                                <h4><b>Reset Password Success!</b></h4>
                                <p>
                                    Password has been updated! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET["ResetPasswordFailed"])) { ?>
                        <!-- Reset Password Failed -->
                        <div class="note note-danger m-b-15">
                            <div class="note-icon">
                                <i class="fa-solid fa-circle-xmark fa-fade"></i>
                            </div>
                            <div class="note-content">
                                <h4><b>Reset Password Failed!</b></h4>
                                <p>
                                    Password can't update! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET["ResetPasswordNM"])) { ?>
                        <!-- Reset Password Not Match -->
                        <div class="note note-info m-b-15">
                            <div class="note-icon">
                                <i class="fa-solid fa-question fa-fade"></i>
                            </div>
                            <div class="note-content">
                                <h4><b>Reset Password Not Match!</b></h4>
                                <p>
                                    Password Not Match, please try again! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET["UpdateSuccess"])) { ?>
                        <!-- Update Success -->
                        <div class="note note-success m-b-15">
                            <div class="note-icon">
                                <i class="fa-solid fa-circle-check fa-fade"></i>
                            </div>
                            <div class="note-content">
                                <h4><b>Update Success!</b></h4>
                                <p>
                                    Data has been updated! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET["UpdateFailed"])) { ?>
                        <!-- Update Failed -->
                        <div class="note note-danger m-b-15">
                            <div class="note-icon">
                                <i class="fa-solid fa-circle-xmark fa-fade"></i>
                            </div>
                            <div class="note-content">
                                <h4><b>Update Failed!</b></h4>
                                <p>
                                    Data can't update! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET["DeleteSuccess"])) { ?>
                        <!-- Delete Success -->
                        <div class="note note-success m-b-15">
                            <div class="note-icon">
                                <i class="fa-solid fa-circle-check fa-fade"></i>
                            </div>
                            <div class="note-content">
                                <h4><b>Delete Success!</b></h4>
                                <p>
                                    Data has been deleted! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET["DeleteFailed"])) { ?>
                        <!-- Delete Failed -->
                        <div class="note note-danger m-b-15">
                            <div class="note-icon">
                                <i class="fa-solid fa-circle-xmark fa-fade"></i>
                            </div>
                            <div class="note-content">
                                <h4><b>Delete Failed!</b></h4>
                                <p>
                                    Data can't delete! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End -->
                    <div style="margin-bottom: 15px;">
                        <!-- Add -->
                        <a href="#AddData" class="btn btn-secondary" data-toggle="modal" title="Add Data"><i class="fa-solid fa-circle-plus"></i>
                            <font class="f-action">Add Data</font>
                        </a>
                        <div class="modal fade" id="AddData">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header for-secondary">
                                        <h4 class="modal-title">Add Data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form action="pages/users/action.php" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-title">Upload Photo</h5>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <!-- Auto resize image file uploader -->
                                                                    <!-- <input type="file" name="upload" class="image-resize-filepond"> -->
                                                                    <input type="file" name="upload" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdEmail">Email <font style="color:red">*</font></label>
                                                            <input type="email" class="form-control" name="Email" id="IdEmail" placeholder="Email ..." required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdRole">Role</label>
                                                            <input type="text" class="form-control" name="Role" id="IdRole" placeholder="Role ..." value="admin" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IdFirstName">First Name <font style="color:red">*</font></label>
                                                            <input type="text" class="form-control" name="FirstName" id="IdFirstName" placeholder="First Name ..." required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IdMiddleName">Middle Name</label>
                                                            <input type="text" class="form-control" name="MiddleName" id="IdMiddleName" placeholder="Middle Name ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IdLastName">Last Name <font style="color:red">*</font></label>
                                                            <input type="text" class="form-control" name="LastName" id="IdLastName" placeholder="Last Name ..." required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdGender">Gender <font style="color:red">*</font></label>
                                                            <select class="form-control" name="Gender" id="IdGender" placeholder="Last Name ..." required>
                                                                <option value="">Select Gender</option>
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdTelepone">Telepone</label>
                                                            <input type="text" class="form-control" name="Telepone" id="IdTelepone" placeholder="Telepone ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IdDepartment">Department</label>
                                                            <input type="text" class="form-control" name="Department" id="IdDepartment" placeholder="Department ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IdJabatan">Jabatan</label>
                                                            <input type="text" class="form-control" name="Jabatan" id="IdJabatan" placeholder="Jabatan ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IdJob">Job <font style="color:red">*</font></label>
                                                            <input type="text" class="form-control" name="Job" id="IdJob" placeholder="Job ..." required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="IdAddress">Address <font style="color:red">*</font> </label>
                                                            <textarea type="text" class="form-control" name="Address" id="IdAddress" placeholder="Address ..." required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <hr>
                                                        <div class="form-group">
                                                            <i> Note: <font style="color:red">(*) Required Column</font></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                            <button type="submit" name="add_" class="btn btn-secondary"><i class="fas fa-save"></i> Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                    <div class="table-responsive">
                        <table id="TableDefault_L" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr style="text-transform: uppercase;text-align:center">
                                    <th width="1%" data-orderable="false"></th>
                                    <th width="1%" data-orderable="false"></th>
                                    <th class="text-nowrap">Username</th>
                                    <th class="text-nowrap">Full Name</th>
                                    <th class="text-nowrap">Role</th>
                                    <th class="text-nowrap">Contact</th>
                                    <th class="text-nowrap">Gender</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $dataTable = $db->query("SELECT * FROM tb_users ORDER BY id DESC");
                                if (mysqli_num_rows($dataTable) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($dataTable)) {
                                        $no++;
                                ?>
                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                            <td width="1%" class="with-img">
                                                <?php if ($row['photo'] == NULL) { ?>
                                                    <?php if ($row['jk'] == 'Pria') { ?>
                                                        <img src="assets/apps/user/male.jpg" class="img-rounded height-50" />
                                                    <?php } elseif ($row['jk'] == 'Wanita') { ?>
                                                        <img src="assets/apps/user/female.jpg" class="img-rounded height-50" />
                                                    <?php } else { ?>
                                                        <img src="assets/apps/user/1.jpg" class="img-rounded height-50" />
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <img src="assets/apps/user/<?= $row['photo'] ?>" class="img-rounded height-50" />
                                                <?php } ?>
                                            </td>
                                            <td><?= $row['username']; ?></td>
                                            <td><?= $row['first']; ?> <?= $row['middle']; ?> <?= $row['last']; ?></td>
                                            <td><?= $row['role']; ?></td>
                                            <td>
                                                <div class="td-table-field">
                                                    <div>
                                                        <i class="fa-solid fa-id-card-clip" id="icon-in-table"></i>
                                                    </div>
                                                    <div class="page-table-not-found" style="margin-left: 10px;">
                                                        <div>
                                                            <?= $row['email']; ?>
                                                        </div>
                                                        <div>
                                                            <?= $row['telp'] != NULL ? $row['telp'] : '<i style="color:red">Telp NULL</i>' ?>
                                                        </div>
                                                        <div>
                                                            <?= $row['job'] != NULL ? $row['job'] : '<i style="color:red">Job NULL</i>' ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="text-align:center"><?= $row['jk'] != NULL ? $row['jk'] : '<center><i style="color:red">NULL</i></center>' ?></td>
                                            <td style="text-align:center">
                                                <?php if ($row['username'] != $_SESSION['username']) { ?>
                                                    <div class="action-table">
                                                        <div style="margin-left: 5px;">
                                                            <a href="#resetPassword<?= $row['id'] ?>" class="btn btn-info" data-toggle="modal" title="Reset Password"><i class="fa-solid fa-lock"></i>
                                                                <font class="f-action">Reset Password</font>
                                                            </a>
                                                        </div>
                                                        <div style="margin-left: 5px;">
                                                            <a href="#updateData<?= $row['id'] ?>" class="btn btn-success" data-toggle="modal" title="Update Data"><i class="fas fa-edit"></i>
                                                                <font class="f-action">Update</font>
                                                            </a>
                                                        </div>
                                                        <div style="margin-left: 5px;">
                                                            <a href="#deleteData<?= $row['id'] ?>" class="btn btn-danger" data-toggle="modal" title="Delete Data"><i class="fas fa-trash"></i>
                                                                <font class="f-action">Delete</font>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="#" class="btn btn-info" title="My Profile"><i class="fa-solid fa-user-gear"></i>
                                                        <font class="f-action">My Profile</font>
                                                    </a>
                                                <?php } ?>
                                            </td>
                                        </tr>

                                        <!-- Reset Password -->
                                        <div class="modal fade" id="resetPassword<?= $row['id'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header for-info">
                                                        <h4 class="modal-title">Reset Password</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <form action="pages/users/action.php" method="POST">
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="IdNewPassword">New Password</label>
                                                                            <input type="password" class="form-control" name="NewPassword" id="IdNewPassword" placeholder="New Password ..." />
                                                                            <input type="hidden" name="IDUNIQ" value="<?= $row['id'] ?>">
                                                                            <input type="hidden" name="NAME" value="<?= $row['first']; ?> <?= $row['middle']; ?> <?= $row['last']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="IdConfirmPassword">Confirm Password</label>
                                                                            <input type="password" class="form-control" name="ConfirmPassword" id="IdConfirmPassword" placeholder="Confirm Password ..." />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                                            <button type="submit" name="reset_" class="btn btn-success"><i class="fas fa-edit"></i> Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Update Data -->

                                        <!-- Update Data -->
                                        <div class="modal fade" id="updateData<?= $row['id'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header for-update">
                                                        <h4 class="modal-title">Update Data</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <form action="pages/menu/action.php" method="POST">
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="IdKodeMenu">Kode Menu</label>
                                                                            <input type="text" class="form-control" name="KodeMenu" id="IdKodeMenu" placeholder="Kode Menu ..." value="<?= $row['kdmenu'] ?>" readonly />
                                                                            <input type="hidden" name="IDUNIQ" value="<?= $row['id'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="IdOrder">Order</label>
                                                                            <input type="text" class="form-control" name="Order" id="IdOrder" placeholder="Order ..." value="<?= $row['sorder'] ?>" readonly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <div class="form-group">
                                                                            <label for="IdMenu">Menu</label>
                                                                            <input type="text" class="form-control" name="Menu" id="IdMenu" placeholder="Menu ..." value="<?= $row['menu'] ?>" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="IdDescription">Description </label>
                                                                            <textarea type="text" class="form-control" name="Description" id="IdDescription" placeholder="Description ..."><?= $row['description'] ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                                            <button type="submit" name="update_" class="btn btn-success"><i class="fas fa-edit"></i> Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Update Data -->

                                        <!-- Delete Data -->
                                        <div class="modal fade" id="deleteData<?= $row['id'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header for-delete">
                                                        <h4 class="modal-title">Detele Data</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <form action="pages/menu/action.php" method="POST">
                                                        <div class="modal-body">
                                                            <h5 class="card-title">Are you sure you want to delete this data?</h5>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="IdKodeMenu">Kode Menu</label>
                                                                        <input type="text" class="form-control" name="KodeMenu" id="IdKodeMenu" placeholder="Kode Menu ..." value="<?= $row['kdmenu'] ?>" />
                                                                        <input type="hidden" name="IDUNIQ" value="<?= $row['id'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="IdOrder">Order</label>
                                                                        <input type="text" class="form-control" name="Order" id="IdOrder" placeholder="Order ..." value="<?= $row['sorder'] ?>" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="form-group">
                                                                        <label for="IdMenu">Menu</label>
                                                                        <input type="text" class="form-control" name="Menu" id="IdMenu" placeholder="Menu ..." value="<?= $row['menu'] ?>" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="IdDescription">Description </label>
                                                                        <textarea type="text" class="form-control" name="Description" id="IdDescription" placeholder="Description ..."><?= $row['description'] ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</button>
                                                            <button type="submit" class="btn btn-danger" name="delete_"><i class="fas fa-check-circle"></i> Yes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Delete Data -->
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="6">
                                            <div class="page-table-not-found">
                                                <div>
                                                    <img src="assets/apps/svg/search-animate.svg" style="width:300px" alt="">
                                                </div>
                                                <div>
                                                    <center>
                                                        <!-- <p class="font-not-found">Ups!... no results found</p> -->
                                                        <p class="font-not-found">No data available in table</p>
                                                    </center>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end #content -->
<title>Content - <?= $_GET['n']; ?> | <?= $title; ?></title>
<script src="assets/plugins/ckeditor/ckeditor.js"></script>
<!-- begin #content -->
<div id="content" class="content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Content</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <div style="font-size: 12px;display: flex;">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Content</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $_GET['n']; ?></li>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- end page-header -->
    <div class="line-page"></div>
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-xl-12">
            <!-- begin nav-tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="index.php?m=content&s=1&n=<?= $_GET['n']; ?>" class="nav-link active">
                        <span class="d-sm-none">Tab 1</span>
                        <span class="d-sm-block d-none"><?= $_GET['n']; ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?m=content&s=1-menu&n=<?= $_GET['n']; ?>" class="nav-link">
                        <span class="d-sm-none">Tab 2</span>
                        <span class="d-sm-block d-none">Manage Menu</span>
                    </a>
                </li>
            </ul>
            <!-- end nav-tabs -->
            <!-- begin tab-content -->
            <div class="tab-content">
                <!-- begin tab-pane -->
                <div class="tab-pane fade active show" id="default-tab-1">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-inverse" data-sortable-id="index-6">
                                <div class="panel-body">
                                    <!-- Alert -->
                                    <?php if (isset($_GET["AddSuccess"])) { ?>
                                        <!-- Add Success -->
                                        <div class="note note-success m-b-15">
                                            <div class="note-icon">
                                                <i class="fa-solid fa-circle-check fa-fade"></i>
                                            </div>
                                            <div class="note-content">
                                                <h4><b>Add Success!</b></h4>
                                                <p>
                                                    Data has been Added! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_GET["AddFailed"])) { ?>
                                        <!-- Add Failed -->
                                        <div class="note note-danger m-b-15">
                                            <div class="note-icon">
                                                <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                            </div>
                                            <div class="note-content">
                                                <h4><b>Add Failed!</b></h4>
                                                <p>
                                                    Data can't Add! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
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
                                    <?php if (isset($_GET["EnabledSuccess"])) { ?>
                                        <!-- Enabled Success -->
                                        <div class="note note-success m-b-15">
                                            <div class="note-icon">
                                                <i class="fa-solid fa-circle-check fa-fade"></i>
                                            </div>
                                            <div class="note-content">
                                                <h4><b>Enabled Success!</b></h4>
                                                <p>
                                                    Data has been enabled! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_GET["EnabledFailed"])) { ?>
                                        <!-- Enabled Failed -->
                                        <div class="note note-danger m-b-15">
                                            <div class="note-icon">
                                                <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                            </div>
                                            <div class="note-content">
                                                <h4><b>Enabled Failed!</b></h4>
                                                <p>
                                                    Data can't enabled! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_GET["DisabledSuccess"])) { ?>
                                        <!-- Disabled Success -->
                                        <div class="note note-success m-b-15">
                                            <div class="note-icon">
                                                <i class="fa-solid fa-circle-check fa-fade"></i>
                                            </div>
                                            <div class="note-content">
                                                <h4><b>Disabled Success!</b></h4>
                                                <p>
                                                    Data has been disabled! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_GET["DisabledFailed"])) { ?>
                                        <!-- Disabled Failed -->
                                        <div class="note note-danger m-b-15">
                                            <div class="note-icon">
                                                <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                            </div>
                                            <div class="note-content">
                                                <h4><b>Disabled Failed!</b></h4>
                                                <p>
                                                    Data can't disabled! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
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
                                                    <form action="pages/content/action.php" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IdTitle">Title <font style="color:red">*</font></label>
                                                                            <input type="text" class="form-control" name="Title" id="IdTitle" placeholder="Title ..." required />
                                                                            <input type="hidden" name="Page" id="page" value="<?= $_GET['n']; ?>" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IdSubtitle">Subtitle <font style="color:red">*</font></label>
                                                                            <input type="text" class="form-control" name="Subtitle" id="IdSubtitle" placeholder="Subtitle ..." required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="IdDescription">Description <font style="color:red">*</font> </label>
                                                                            <textarea type="text" class="ckeditor" id="editor1" name="Description" rows="20" placeholder="Description ..." required></textarea>
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
                                                            <button type="submit" name="add_signature_" class="btn btn-secondary"><i class="fas fa-save"></i> Add</button>
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
                                                    <th class="text-nowrap">Title & Subtitle</th>
                                                    <th class="text-nowrap">Description</th>
                                                    <th class="text-nowrap">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $dataTable = $db->query("SELECT * FROM tb_signature ORDER BY id DESC");
                                                if (mysqli_num_rows($dataTable) > 0) {
                                                    $no = 0;
                                                    while ($row = mysqli_fetch_array($dataTable)) {
                                                        $no++;
                                                ?>
                                                        <tr class="odd gradeX">
                                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                                            <td>
                                                                <div class="oke-icon">
                                                                    <!-- Icon -->
                                                                    <div class="elemen-bg">
                                                                        <i class="fa-solid fa-quote-left" style="font-size: 14px;"></i>
                                                                    </div>
                                                                    <!-- Text -->
                                                                    <div style="margin-left: 10px;">
                                                                        <div style="font-size: 14px;font-weight: 900;">
                                                                            <?= $row['title']; ?>
                                                                        </div>
                                                                        <div>
                                                                            <?= $row['subtitle']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <div class="action-table">
                                                                    <a href="#descModal<?= $row['id'] ?>" class="btn btn-secondary" data-toggle="modal" title="Description"><i class="fas fa-comment"></i>
                                                                        <font class="f-action"> Description</font>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <!-- <td style="text-align:center"><?= $row['jk'] != NULL ? $row['jk'] : '<center><i style="color:red">NULL</i></center>' ?></td> -->
                                                            <td style="text-align:center">
                                                                <div class="action-table">
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
                                                                    <?php if ($row['status'] == '1') { ?>
                                                                        <div style="margin-left: 5px;">
                                                                            <a href="#DisabledData<?= $row['id'] ?>" class="btn btn-enabled" data-toggle="modal" title="Enabled"><i class="fa-solid fa-toggle-on"></i>
                                                                                <font class="f-action"> Enabled</font>
                                                                            </a>
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div style="margin-left: 5px;">
                                                                            <a href="#EnabledData<?= $row['id'] ?>" class="btn btn-disabled" data-toggle="modal" title="Disabled"><i class="fa-solid fa-toggle-off"></i>
                                                                                <font class="f-action"> Disabled</font>
                                                                            </a>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!-- Description -->
                                                        <div class="modal fade" id="descModal<?= $row['id'] ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header for-secondary">
                                                                        <h4 class="modal-title">Description</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <fieldset>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="note note-gray-500 mb-0">
                                                                                        <div class="note-content" style="text-align: justify;">
                                                                                            <?= $row['description']; ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Description -->

                                                        <!-- Update Data -->
                                                        <div class="modal fade" id="updateData<?= $row['id'] ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header for-update">
                                                                        <h4 class="modal-title">Update Data</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <form action="pages/content/action.php" method="POST">
                                                                        <div class="modal-body">
                                                                            <fieldset>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdTitle">Title </label>
                                                                                            <input type="text" class="form-control" name="Title" id="IdTitle" placeholder="Title ..." value="<?= $row['title']; ?>" />
                                                                                            <input type="hidden" name="ID" id="ID" value="<?= $row['id']; ?>" />
                                                                                            <input type="hidden" name="Page" id="page" value="<?= $_GET['n']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdSubtitle">Subtitle </label>
                                                                                            <input type="text" class="form-control" name="Subtitle" id="IdSubtitle" placeholder="Subtitle ..." value="<?= $row['subtitle']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="IdDescription">Description </label>
                                                                                            <textarea type="text" class="ckeditor" id="editor2" name="Description" rows="20" placeholder="Description ..."><?= $row['description']; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                                                            <button type="submit" name="update_signature_" class="btn btn-success"><i class="fas fa-edit"></i> Update</button>
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
                                                                    <form action="pages/content/action.php" method="POST">
                                                                        <div class="modal-body">
                                                                            <h5 class="card-title">Are you sure you want to delete this data?</h5>
                                                                            <fieldset>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdTitle">Title </label>
                                                                                            <input type="text" class="form-control" name="Title" id="IdTitle" placeholder="Title ..." value="<?= $row['title']; ?>" />
                                                                                            <input type="hidden" name="ID" id="ID" value="<?= $row['id']; ?>" />
                                                                                            <input type="hidden" name="Page" id="page" value="<?= $_GET['n']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdSubtitle">Subtitle </label>
                                                                                            <input type="text" class="form-control" name="Subtitle" id="IdSubtitle" placeholder="Subtitle ..." value="<?= $row['subtitle']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="IdDescription">Description </label>
                                                                                            <textarea type="text" class="ckeditor" id="editor2" name="Description" rows="20" placeholder="Description ..."><?= $row['description']; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</button>
                                                                            <button type="submit" class="btn btn-danger" name="delete_signature_"><i class="fas fa-check-circle"></i> Yes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Delete Data -->

                                                        <!-- Enabled -->
                                                        <div class="modal fade" id="EnabledData<?= $row['id'] ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header for-enabled">
                                                                        <h4 class="modal-title">Dsisabled Data</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <form action="pages/content/action.php" method="POST">
                                                                        <div class="modal-body">
                                                                            <h5 class="card-title">Are you sure you want to enabled this data?</h5>
                                                                            <fieldset>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdTitle">Title </label>
                                                                                            <input type="text" class="form-control" name="Title" id="IdTitle" placeholder="Title ..." value="<?= $row['title']; ?>" />
                                                                                            <input type="hidden" name="ID" id="ID" value="<?= $row['id']; ?>" />
                                                                                            <input type="hidden" name="Page" id="page" value="<?= $_GET['n']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdSubtitle">Subtitle </label>
                                                                                            <input type="text" class="form-control" name="Subtitle" id="IdSubtitle" placeholder="Subtitle ..." value="<?= $row['subtitle']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="IdDescription">Description </label>
                                                                                            <textarea type="text" class="ckeditor" id="editor2" name="Description" rows="20" placeholder="Description ..."><?= $row['description']; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</button>
                                                                            <button type="submit" class="btn btn-enabled" name="enabled_signature_"><i class="fas fa-check-circle"></i> Yes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Disabled -->
                                                        <div class="modal fade" id="DisabledData<?= $row['id'] ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header for-disabled">
                                                                        <h4 class="modal-title">Dsisabled Data</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <form action="pages/content/action.php" method="POST">
                                                                        <div class="modal-body">
                                                                            <h5 class="card-title">Are you sure you want to disabled this data?</h5>
                                                                            <fieldset>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdTitle">Title </label>
                                                                                            <input type="text" class="form-control" name="Title" id="IdTitle" placeholder="Title ..." value="<?= $row['title']; ?>" />
                                                                                            <input type="hidden" name="ID" id="ID" value="<?= $row['id']; ?>" />
                                                                                            <input type="hidden" name="Page" id="page" value="<?= $_GET['n']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdSubtitle">Subtitle </label>
                                                                                            <input type="text" class="form-control" name="Subtitle" id="IdSubtitle" placeholder="Subtitle ..." value="<?= $row['subtitle']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="IdDescription">Description </label>
                                                                                            <textarea type="text" class="ckeditor" id="editor2" name="Description" rows="20" placeholder="Description ..."><?= $row['description']; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</button>
                                                                            <button type="submit" class="btn btn-disabled" name="disabled_signature_"><i class="fas fa-check-circle"></i> Yes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <tr>
                                                        <td colspan="4">
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
                <!-- end tab-pane -->
            </div>
            <!-- end tab-content -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->
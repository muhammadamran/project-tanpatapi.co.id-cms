<title>Setting <?= $title; ?></title>
<link href="assets/plugins/x-editable-bs4/dist/bootstrap4-editable/css/bootstrap-editable.css" rel="stylesheet" />
<link href="assets/plugins/x-editable-bs4/dist/inputs-ext/address/address.css" rel="stylesheet" />
<link href="assets/plugins/x-editable-bs4/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
<link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<!-- begin #content -->
<div id="content" class="content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Setting</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <div style="font-size: 12px;display: flex;">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Setting</li>
                            <li class="breadcrumb-item active" aria-current="page">Set Company Webiste</li>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title"><i class="fa-solid fa-building"></i> Set Company Website</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <!-- begin table-responsive -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div style="margin: 10px;">
                                    <!-- Alert -->
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
                                    <!-- End -->
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="user" class="table table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <th width="20%">Field Name</th>
                                        <th>Field Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="pages/setting/action.php" method="POST">
                                        <tr>
                                            <td class="bg-light">Title Tab</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="Title" id="IdTitle" placeholder="Enter Your Title" value="<?= $title; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Application Name</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="AppName" id="IdAppName" placeholder="Enter Your AppName" value="<?= $app_name; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Comapny Name</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="Company" id="IdCompany" placeholder="Enter Your Company" value="<?= $company; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Description</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="Description" id="IdDescription" placeholder="Enter Your Description" value="<?= $seodesc; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Tag</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="Tag" id="IdTag" placeholder="Enter Your Tag" value="<?= $tag; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">URL</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="URL" id="URL" placeholder="Enter Your URL" value="<?= $urlWeb; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Action</td>
                                            <td>
                                                <div style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_setting_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- Bg Page -->
                <div class="col-xl-6">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Tab 1</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Background Page</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your background page here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <!-- Alert -->
                                        <?php if (isset($_GET["UploadSuccessBgPage"])) { ?>
                                            <!-- Upload Success -->
                                            <div class="note note-success m-b-15">
                                                <div class="note-icon">
                                                    <i class="fa-solid fa-circle-check fa-fade"></i>
                                                </div>
                                                <div class="note-content">
                                                    <h4><b>Upload Success!</b></h4>
                                                    <p>
                                                        Data has been uploaded! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($_GET["UploadFailedBgPage"])) { ?>
                                            <!-- Upload Failed -->
                                            <div class="note note-danger m-b-15">
                                                <div class="note-icon">
                                                    <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                                </div>
                                                <div class="note-content">
                                                    <h4><b>Upload Failed!</b></h4>
                                                    <p>
                                                        Data can't upload! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- End -->
                                        <div class="row">
                                            <form action="pages/setting/action.php" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;">
                                                        <div class="lingkaran-bg">
                                                            <img src="assets/apps/bg-page/<?= $bg_page; ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 280px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Background Page</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_bg_page_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Bg Page -->
                <!-- Bg Footer Top -->
                <div class="col-xl-6">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Tab 1</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Background Footer Top</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your background footer top here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <!-- Alert -->
                                        <?php if (isset($_GET["UploadSuccessBgFooterTop"])) { ?>
                                            <!-- Upload Success -->
                                            <div class="note note-success m-b-15">
                                                <div class="note-icon">
                                                    <i class="fa-solid fa-circle-check fa-fade"></i>
                                                </div>
                                                <div class="note-content">
                                                    <h4><b>Upload Success!</b></h4>
                                                    <p>
                                                        Data has been uploaded! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($_GET["UploadFailedBgFooterTop"])) { ?>
                                            <!-- Upload Failed -->
                                            <div class="note note-danger m-b-15">
                                                <div class="note-icon">
                                                    <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                                </div>
                                                <div class="note-content">
                                                    <h4><b>Upload Failed!</b></h4>
                                                    <p>
                                                        Data can't upload! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- End -->
                                        <div class="row">
                                            <form action="pages/setting/action.php" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;">
                                                        <div class="lingkaran-bg">
                                                            <img src="assets/apps/bg-footer-top/<?= $bg_footer_top; ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 280px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Background Footer Top</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_bg_footer_top_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Bg Footer Top -->
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <!-- Icon -->
                <div class="col-xl-6">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Tab 1</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Icon</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your icon here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <!-- Alert -->
                                        <?php if (isset($_GET["UploadSuccessIcon"])) { ?>
                                            <!-- Upload Success -->
                                            <div class="note note-success m-b-15">
                                                <div class="note-icon">
                                                    <i class="fa-solid fa-circle-check fa-fade"></i>
                                                </div>
                                                <div class="note-content">
                                                    <h4><b>Upload Success!</b></h4>
                                                    <p>
                                                        Data has been uploaded! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($_GET["UploadFailedIcon"])) { ?>
                                            <!-- Upload Failed -->
                                            <div class="note note-danger m-b-15">
                                                <div class="note-icon">
                                                    <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                                </div>
                                                <div class="note-content">
                                                    <h4><b>Upload Failed!</b></h4>
                                                    <p>
                                                        Data can't upload! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- End -->
                                        <div class="row">
                                            <form action="pages/setting/action.php" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <br><br>
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;">
                                                        <div class="lingkaran">
                                                            <img src="assets/apps/icon/<?= $icon; ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 100px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Icon</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_icon_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Icon -->
                <!-- Logo -->
                <div class="col-xl-6">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Tab 1</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Logo</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your logo here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <!-- Alert -->
                                        <?php if (isset($_GET["UploadSuccessLogo"])) { ?>
                                            <!-- Upload Success -->
                                            <div class="note note-success m-b-15">
                                                <div class="note-icon">
                                                    <i class="fa-solid fa-circle-check fa-fade"></i>
                                                </div>
                                                <div class="note-content">
                                                    <h4><b>Upload Success!</b></h4>
                                                    <p>
                                                        Data has been uploaded! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($_GET["UploadFailedLogo"])) { ?>
                                            <!-- Upload Failed -->
                                            <div class="note note-danger m-b-15">
                                                <div class="note-icon">
                                                    <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                                </div>
                                                <div class="note-content">
                                                    <h4><b>Upload Failed!</b></h4>
                                                    <p>
                                                        Data can't upload! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- End -->
                                        <div class="row">
                                            <form action="pages/setting/action.php" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;">
                                                        <div class="lingkaran">
                                                            <img src="assets/apps/logo/<?= $logo; ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 100px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Logo</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_logo_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Logo -->
                <!-- Bg Login -->
                <div class="col-xl-12">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Tab 1</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Background Login</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your background login here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <!-- Alert -->
                                        <?php if (isset($_GET["UploadSuccessBgLogin"])) { ?>
                                            <!-- Upload Success -->
                                            <div class="note note-success m-b-15">
                                                <div class="note-icon">
                                                    <i class="fa-solid fa-circle-check fa-fade"></i>
                                                </div>
                                                <div class="note-content">
                                                    <h4><b>Upload Success!</b></h4>
                                                    <p>
                                                        Data has been uploaded! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($_GET["UploadFailedBgLogin"])) { ?>
                                            <!-- Upload Failed -->
                                            <div class="note note-danger m-b-15">
                                                <div class="note-icon">
                                                    <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                                </div>
                                                <div class="note-content">
                                                    <h4><b>Upload Failed!</b></h4>
                                                    <p>
                                                        Data can't upload! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- End -->
                                        <div class="row">
                                            <form action="pages/setting/action.php" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;">
                                                        <div class="lingkaran-bg">
                                                            <img src="assets/apps/bg-login/<?= $bg_login; ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 280px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Background Login</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_bg_login_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Bg Login -->
            </div>
        </div>
        <!-- Bg Header -->
        <div class="col-xl-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="d-sm-none">Tab 1</span>
                        <span class="d-sm-block d-none">
                            <div>
                                <h4 class="m-t-0 m-b-15">
                                    <div>
                                        <b>Background Header</b>
                                    </div>
                                    <div style="margin-top: 5px;margin-bottom: -15px;">
                                        <small style="color:#fff">Upload your background header here</small>
                                    </div>
                                </h4>
                            </div>
                        </span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="default-tab-1">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-inverse" data-sortable-id="index-6">
                                <!-- Alert -->
                                <?php if (isset($_GET["UploadSuccessBgHeader"])) { ?>
                                    <!-- Upload Success -->
                                    <div class="note note-success m-b-15">
                                        <div class="note-icon">
                                            <i class="fa-solid fa-circle-check fa-fade"></i>
                                        </div>
                                        <div class="note-content">
                                            <h4><b>Upload Success!</b></h4>
                                            <p>
                                                Data has been uploaded! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET["UploadFailedBgHeader"])) { ?>
                                    <!-- Upload Failed -->
                                    <div class="note note-danger m-b-15">
                                        <div class="note-icon">
                                            <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                        </div>
                                        <div class="note-content">
                                            <h4><b>Upload Failed!</b></h4>
                                            <p>
                                                Data can't upload! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!-- End -->
                                <div class="row">
                                    <form action="pages/setting/action.php" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                        <div class="col-sm-12">
                                            <div style="display: flex;justify-content:center;">
                                                <div class="lingkaran-bg">
                                                    <img src="assets/apps/bg-header/<?= $bg_header; ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 280px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <hr>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="IdTitle"><b>Upload New Background Header</b> </label>
                                                <input type="file" name="upload" class="form-control-upload" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                            <button type="submit" name="update_bg_header_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bg Header -->
        <!-- Bg Loader -->
        <div class="col-xl-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="d-sm-none">Tab 1</span>
                        <span class="d-sm-block d-none">
                            <div>
                                <h4 class="m-t-0 m-b-15">
                                    <div>
                                        <b>Loader</b>
                                    </div>
                                    <div style="margin-top: 5px;margin-bottom: -15px;">
                                        <small style="color:#fff">Upload your background loader here</small>
                                    </div>
                                </h4>
                            </div>
                        </span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="default-tab-1">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-inverse" data-sortable-id="index-6">
                                <!-- Alert -->
                                <?php if (isset($_GET["UploadSuccessLoader"])) { ?>
                                    <!-- Upload Success -->
                                    <div class="note note-success m-b-15">
                                        <div class="note-icon">
                                            <i class="fa-solid fa-circle-check fa-fade"></i>
                                        </div>
                                        <div class="note-content">
                                            <h4><b>Upload Success!</b></h4>
                                            <p>
                                                Data has been uploaded! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET["UploadFailedLoader"])) { ?>
                                    <!-- Upload Failed -->
                                    <div class="note note-danger m-b-15">
                                        <div class="note-icon">
                                            <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                        </div>
                                        <div class="note-content">
                                            <h4><b>Upload Failed!</b></h4>
                                            <p>
                                                Data can't upload! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!-- End -->
                                <div class="row">
                                    <form action="pages/setting/action.php" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                        <br><br>
                                        <div class="col-sm-12">
                                            <div style="display: flex;justify-content:center;">
                                                <div class="lingkaran">
                                                    <img src="assets/apps/loader/<?= $loader; ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 100px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="col-sm-12">
                                            <hr>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="IdTitle"><b>Upload New Loader</b> </label>
                                                <input type="file" name="upload" class="form-control-upload" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                            <button type="submit" name="update_loader_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loader -->
        <!-- Bg Footer -->
        <div class="col-xl-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="d-sm-none">Tab 1</span>
                        <span class="d-sm-block d-none">
                            <div>
                                <h4 class="m-t-0 m-b-15">
                                    <div>
                                        <b>Background Footer</b>
                                    </div>
                                    <div style="margin-top: 5px;margin-bottom: -15px;">
                                        <small style="color:#fff">Upload your background footer here</small>
                                    </div>
                                </h4>
                            </div>
                        </span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="default-tab-1">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-inverse" data-sortable-id="index-6">
                                <!-- Alert -->
                                <?php if (isset($_GET["UploadSuccessBgFooter"])) { ?>
                                    <!-- Upload Success -->
                                    <div class="note note-success m-b-15">
                                        <div class="note-icon">
                                            <i class="fa-solid fa-circle-check fa-fade"></i>
                                        </div>
                                        <div class="note-content">
                                            <h4><b>Upload Success!</b></h4>
                                            <p>
                                                Data has been uploaded! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET["UploadFailedBgFooter"])) { ?>
                                    <!-- Upload Failed -->
                                    <div class="note note-danger m-b-15">
                                        <div class="note-icon">
                                            <i class="fa-solid fa-circle-xmark fa-fade"></i>
                                        </div>
                                        <div class="note-content">
                                            <h4><b>Upload Failed!</b></h4>
                                            <p>
                                                Data can't upload! Record Time: <?= date('d F Y'); ?> <?= date('H:i A'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!-- End -->
                                <div class="row">
                                    <form action="pages/setting/action.php" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                        <div class="col-sm-12">
                                            <div style="display: flex;justify-content:center;">
                                                <div class="lingkaran-bg">
                                                    <img src="assets/apps/bg-footer/<?= $bg_footer; ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 280px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <hr>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="IdTitle"><b>Upload New Background Footer</b> </label>
                                                <input type="file" name="upload" class="form-control-upload" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                            <button type="submit" name="update_bg_footer_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bg Footer -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->
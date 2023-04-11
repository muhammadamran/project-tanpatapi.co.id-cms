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
                            <li class="breadcrumb-item active" aria-current="page">Images</li>
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
                        <div class="table-responsive">
                            <table id="user" class="table table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <th width="20%">Field Name</th>
                                        <th>Field Value</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bg-light">Title Tab</td>
                                        <td><a href="javascript:;" id="Title Tab" data-type="text" data-pk="1" data-title="Enter Title Tab">superuser </a></td>
                                        <td><span class="text-black-lighter">Simple text field </span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Firstname</td>
                                        <td><a href="javascript:;" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your Firstname"></a></td>
                                        <td><span class="text-black-lighter">Required text field, originally empty </span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Sex</td>
                                        <td><a href="javascript:;" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
                                        <td><span class="text-black-lighter">Select, loaded from js array. Custom display</span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Group</td>
                                        <td><a href="javascript:;" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group">Admin</a></td>
                                        <td><span class="text-black-lighter">Select, loaded from server. <strong>No buttons</strong> mode </span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Error While Loading</td>
                                        <td><a href="javascript:;" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active </a></td>
                                        <td><span class="text-black-lighter">Error when loading list items</span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Plan vacation?</td>
                                        <td><a href="javascript:;" id="vacation" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-title="When you want vacation to start?">25.02.2013</a></td>
                                        <td><span class="text-black-lighter">Datepicker </span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Date of birth</td>
                                        <td><a href="javascript:;" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a></td>
                                        <td><span class="text-black-lighter">Date field (combodate) </span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Setup event</td>
                                        <td><a href="javascript:;" id="event" data-type="combodate" data-template="D MMM YYYY HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time"></a></td>
                                        <td><span class="text-black-lighter">Datetime field (combodate)</span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Meeting start</td>
                                        <td><a href="javascript:;" id="meeting_start" data-type="datetime" data-pk="1" data-url="/post" data-placement="right" data-title="Set date & time">15/03/2013 12:45</a></td>
                                        <td><span class="text-black-lighter">Bootstrap datetime</span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Comments</td>
                                        <td>
                                            <a href="javascript:;" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-original-title="Enter comments">awesome<br />user!</a>
                                        </td>
                                        <td>
                                            <span class="text-black-lighter">
                                                Textarea. Buttons below. Submit by <i>ctrl+enter</i>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Type State</td>
                                        <td><a href="javascript:;" id="state" data-type="typeaheadjs" data-pk="1" data-placement="right" data-title="Start typing State.."></a></td>
                                        <td><span class="text-black-lighter">Twitter typeahead.js</span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Fresh fruits</td>
                                        <td><a href="javascript:;" id="fruits" data-type="checklist" data-value="1,2" data-title="Select fruits"></a></td>
                                        <td><span class="text-black-lighter">Checklist</span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Tags</td>
                                        <td><a href="javascript:;" id="tags" data-type="select2" data-pk="1" data-title="Enter tags">html, javascript </a></td>
                                        <td><span class="text-black-lighter">Select2 (tags mode) </span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Country</td>
                                        <td><a href="javascript:;" id="country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a></td>
                                        <td><span class="text-black-lighter">Select2 (dropdown mode)</span></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-light">Address</td>
                                        <td><a href="javascript:;" id="address" data-type="address" data-pk="1" data-title="Please, fill address"></a></td>
                                        <td><span class="text-black-lighter">Your custom input, several fields</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <!-- end panel -->
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="alert alert-secondary">
                        <button class="close" data-dismiss="alert">&times;</button>
                        <div class="f-s-14 m-b-10"><i class="fa fa-info-circle"></i> <b>Picture Website</b> Please upload your file here.</div>
                        Please make sure you upload the appropriate file in the field below.
                    </div>
                </div>
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
                                        <div class="panel-body">
                                            <!-- Alert -->
                                            <?php if (isset($_GET["UpdateSuccessIcon"])) { ?>
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
                                            <?php if (isset($_GET["UpdateFailedIcon"])) { ?>
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
                                            <div class="row">
                                                <form action="pages/setting/action.php" method="POST" style="width: 100%;">
                                                    <div class="col-sm-12">
                                                        <div style="display: flex;justify-content:center;">
                                                            <img src="assets/apps/icon/<?= $icon; ?>" alt="Icon" style="width:150px">
                                                        </div>
                                                    </div>
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
                                        <div class="panel-body">
                                            <!-- Alert -->
                                            <?php if (isset($_GET["UpdateSuccessLogo"])) { ?>
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
                                            <?php if (isset($_GET["UpdateFailedLogo"])) { ?>
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
                                            <div class="row">
                                                <form action="pages/setting/action.php" method="POST" style="width: 100%;">
                                                    <div class="col-sm-12">
                                                        <div style="display: flex;justify-content:center;">
                                                            <img src="assets/apps/logo/<?= $logo; ?>" alt="Logo" style="width:150px">
                                                        </div>
                                                    </div>
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
                </div>
                <!-- End Logo -->
                <!-- Loader -->
                <div class="col-xl-12">
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
                                                <small style="color:#fff">Upload your loader here</small>
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
                                        <div class="panel-body">
                                            <!-- Alert -->
                                            <?php if (isset($_GET["UpdateSuccessLoader"])) { ?>
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
                                            <?php if (isset($_GET["UpdateFailedLoader"])) { ?>
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
                                            <div class="row">
                                                <form action="pages/setting/action.php" method="POST" style="width: 100%;">
                                                    <div class="col-sm-12">
                                                        <div style="display: flex;justify-content:center;">
                                                            <img src="assets/apps/loader/<?= $loader; ?>" alt="Loader" style="width:150px">
                                                        </div>
                                                    </div>
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
                </div>
                <!-- End Loader -->
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end #content -->
<title>Message <?= $title; ?></title>
<script src="assets/plugins/ckeditor/ckeditor.js"></script>
<!-- begin #content -->
<div id="content" class="content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Message</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <div style="font-size: 12px;display: flex;">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="#">Message</a></li>
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
                    <a href="#" class="nav-link active">
                        <span class="d-sm-none">Tab 1</span>
                        <span class="d-sm-block d-none">Message</span>
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
                                    <div class="table-responsive">
                                        <table id="TableDefault_L" class="table table-striped table-bordered table-td-valign-middle">
                                            <thead>
                                                <tr style="text-transform: uppercase;text-align:center">
                                                    <th width="1%" data-orderable="false"></th>
                                                    <th class="text-nowrap">Full Name</th>
                                                    <th class="text-nowrap">Title</th>
                                                    <th class="text-nowrap">Message</th>
                                                    <th class="text-nowrap">Telephone</th>
                                                    <th class="text-nowrap">Email</th>
                                                    <th class="text-nowrap">Address</th>
                                                    <!-- <th class="text-nowrap">Action</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $dataTable = $db->query("SELECT * FROM tb_subscribe ORDER BY id DESC");
                                                if (mysqli_num_rows($dataTable) > 0) {
                                                    $no = 0;
                                                    while ($row = mysqli_fetch_array($dataTable)) {
                                                        $no++;
                                                ?>
                                                        <tr class="odd gradeX">
                                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                                            <!-- Users -->
                                                            <td>
                                                                <div class="oke-icon">
                                                                    <!-- Icon -->
                                                                    <div class="elemen-bg">
                                                                        <i class="fa-solid fa-user" style="font-size: 14px;"></i>
                                                                    </div>
                                                                    <!-- Text -->
                                                                    <div style="margin-left: 10px;">
                                                                        <div style="font-size: 14px;font-weight: 900;">
                                                                            <?= $row['name'] != NULL ? $row['name'] : '<center><i style="color:red">NULL</i></center>' ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!-- Title -->
                                                            <td>
                                                                <div class="oke-icon">
                                                                    <!-- Icon -->
                                                                    <div class="elemen-bg">
                                                                        <i class="fa-solid fa-quote-left" style="font-size: 14px;"></i>
                                                                    </div>
                                                                    <!-- Text -->
                                                                    <div style="margin-left: 10px;">
                                                                        <div style="font-size: 14px;font-weight: 900;">
                                                                            <?= $row['title'] != NULL ? $row['title'] : '<center><i style="color:red">NULL</i></center>' ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!-- Message -->
                                                            <td style="text-align:center">
                                                                <div class="action-table">
                                                                    <a href="#descModal<?= $row['id'] ?>" class="btn btn-secondary" data-toggle="modal" title="Message"><i class="fa-solid fa-envelope-open-text"></i>
                                                                        <font class="f-action"> Message</font>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <!-- Telephone -->
                                                            <td>
                                                                <div class="oke-icon">
                                                                    <!-- Icon -->
                                                                    <div class="elemen-bg-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Telephone">
                                                                        <img src="assets/icon/telephone.png" style="width: 20px;">
                                                                    </div>
                                                                    <!-- Text -->
                                                                    <div style="margin-left: 10px;">
                                                                        <a href="tel:<?= $row['phone'] != NULL ? $row['phone'] : '#' ?>" target="_blank" style="font-size: 14px;font-weight: 900;">
                                                                            <?= $row['phone'] != NULL ? $row['phone'] : '<center><i style="color:red">NULL</i></center>' ?>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!-- Email -->
                                                            <td>
                                                                <div class="oke-icon">
                                                                    <!-- Icon -->
                                                                    <div class="elemen-bg-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Email">
                                                                        <img src="assets/icon/email.png" style="width: 20px;">
                                                                    </div>
                                                                    <!-- Text -->
                                                                    <div style="margin-left: 10px;">
                                                                        <a href="mailto:<?= $row['email'] != NULL ? $row['email'] : '#' ?>" target="_blank" style="font-size: 14px;font-weight: 900;">
                                                                            <?= $row['email'] != NULL ? $row['email'] : '<center><i style="color:red">NULL</i></center>' ?>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!-- Address -->
                                                            <td style="text-align:center">
                                                                <div class="action-table">
                                                                    <a href="#addressModal<?= $row['id'] ?>" class="btn btn-secondary" data-toggle="modal" title="Location"><i class="fa-solid fa-location-dot"></i>
                                                                        <font class="f-action"> Location</font>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!-- Message -->
                                                        <div class="modal fade" id="descModal<?= $row['id'] ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header for-secondary">
                                                                        <h4 class="modal-title">Message</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <fieldset>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="note note-gray-500 mb-0">
                                                                                        <div class="note-content" style="text-align: justify;">
                                                                                            <?= $row['message']; ?>
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
                                                        <!-- End Message -->

                                                        <!-- Address -->
                                                        <div class="modal fade" id="addressModal<?= $row['id'] ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header for-secondary">
                                                                        <h4 class="modal-title">Address</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <fieldset>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="note note-gray-500 mb-0">
                                                                                        <div class="note-content" style="text-align: justify;">
                                                                                            <?= $row['location_users']; ?>
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
                                                        <!-- End Address -->

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
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="IdTitle">Title </label>
                                                                                            <input type="text" class="form-control" name="Title" id="IdTitle" placeholder="Title ..." value="<?= $row['title']; ?>" />
                                                                                            <input type="hidden" name="ID" id="ID" value="<?= $row['id']; ?>" />
                                                                                            <input type="hidden" name="Page" id="page" value="<?= $_GET['n']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="IdDescription">Description </label>
                                                                                            <textarea type="text" class="ckeditor" id="editor2" name="Description" rows="20" placeholder="Description ..."><?= $row['description']; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Social Media -->
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdTelephone">Telephone </label>
                                                                                            <input type="number" class="form-control" name="Telephone" id="IdTelephone" placeholder="Telephone: 62xxx ..." value="<?= $row['telephone']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdWhatsapp">Whatsapp </label>
                                                                                            <input type="number" class="form-control" name="Whatsapp" id="IdWhatsapp" placeholder="Whatsapp: 62xxx ..." value="<?= $row['whatsapp']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdInstagram">Instagram </label>
                                                                                            <input type="text" class="form-control" name="Instagram" id="IdInstagram" placeholder="@username ..." value="<?= $row['instagram']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="IdEmail">Email </label>
                                                                                            <input type="email" class="form-control" name="Email" id="IdEmail" placeholder="username@domain.xxx ..." value="<?= $row['email']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End Social Media -->
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="IdAddress">Address </label>
                                                                                            <textarea type="text" class="form-control" name="Address" id="IdAddress" placeholder="Address ..."><?= $row['address']; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                                                            <button type="submit" name="update_contact_" class="btn btn-success"><i class="fas fa-edit"></i> Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Update Data -->
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
                <!-- end tab-pane -->
            </div>
            <!-- end tab-content -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->
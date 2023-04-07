<title>Content - <?= $_GET['n']; ?> | <?= $title; ?></title>
<script src="assets/plugins/ckeditor/ckeditor.js"></script>
<?php
$Qdata = $db->query("SELECT * FROM tb_signature_menu WHERE id='" . $_GET['id'] . "'");
$row   = mysqli_fetch_array($Qdata);
?>
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
                            <li class="breadcrumb-item" aria-current="page"><?= $_GET['n']; ?></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Data</li>
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
                    <a href="index.php?m=content&s=1&n=<?= $_GET['n']; ?>" class="nav-link">
                        <span class="d-sm-none">Tab 1</span>
                        <span class="d-sm-block d-none"><?= $_GET['n']; ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?m=content&s=1-menu&n=<?= $_GET['n']; ?>" class="nav-link active">
                        <span class="d-sm-none">Tab 2</span>
                        <span class="d-sm-block d-none">Manage Menu</span>
                    </a>
                </li>
            </ul>
            <!-- end nav-tabs -->
            <!-- begin tab-content -->
            <div class="tab-content" style="padding: 0px;">
                <!-- begin tab-pane -->
                <div class="tab-pane fade active show" id="default-tab-1">
                    <div class="row">
                        <div class="col-sm-12">

                            <!-- begin alert -->
                            <div class="alert alert-update fade show">
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <i class="fas fa-edit"></i> Update Data
                            </div>
                            <!-- end alert -->
                            <div class="panel-body">
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
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="IdPrice">Price </label>
                                                        <input type="text" class="form-control" name="Price" id="rupiah" placeholder="Price ..." value="<?= $row['prices']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="IdSequence">Sequence </label>
                                                        <input type="number" class="form-control" name="Sequence" id="IdSequence" placeholder="Sequence ..." max="3" value="<?= $row['rorder']; ?>" />
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
                                        <button type="submit" name="update_signature_menu_" class="btn btn-success"><i class="fas fa-edit"></i> Update</button>
                                    </div>
                                </form>
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
<script type="text/javascript">
</script>
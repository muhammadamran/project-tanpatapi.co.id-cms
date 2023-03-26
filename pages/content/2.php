<?php
$QContent = $db->query("SELECT * FROM tb_menu WHERE id='" . $_GET['s'] . "'");
$RContent = mysqli_fetch_array($QContent);
$R        = $RContent['id'];
?>
<title><?= $RContent['menu']; ?> - Content <?= $title; ?></title>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item">Content</li>
        <li class="breadcrumb-item active"><?= $RContent['menu']; ?></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header mb-3">
        <div class="page-header-c">
            <div class="page-header-icon">
                <i class="fa-solid fa-folder-tree"></i>
            </div>
            <div class="page-header-text">
                <?= $RContent['menu']; ?>
            </div>
        </div>
    </h1>
    <!-- end page-header -->
    <div class="line-page"></div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-inverse" data-sortable-id="index-6">
                <div class="panel-heading">
                    <h4 class="panel-title">Analytics Details</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end #content -->
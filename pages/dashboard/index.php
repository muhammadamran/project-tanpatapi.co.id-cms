<title>Dashboard <?= $title; ?></title>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header mb-3">
        <div class="page-header-c">
            <div class="page-header-icon">
                <i class="fa-solid fa-cubes-stacked"></i>
            </div>
            <div class="page-header-text">
                Dashboard
            </div>
        </div>
    </h1>
    <!-- end page-header -->
    <div class="line-page"></div>
    <!-- begin daterange-filter -->
    <div class="d-sm-flex align-items-center mb-3">
        <a href="#" class="btn btn-inverse mr-2 text-truncate" id="daterange-filter">
            <i class="fa fa-calendar fa-fw text-white-transparent-5 ml-n1"></i>
            <span>1 Jun 2019 - 7 Jun 2019</span>
            <b class="caret"></b>
        </a>
        <div class="text-muted f-w-600 mt-2 mt-sm-0">compared to <span id="daterange-prev-date">24 Mar-30 Apr 2019</span></div>
    </div>
    <!-- end daterange-filter -->
</div>
<!-- end #content -->
<title>Menu <?= $title; ?></title>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item active">Menu</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header mb-3">
        <div class="page-header-c">
            <div class="page-header-icon">
                <i class="fa-solid fa-folder-plus"></i>
            </div>
            <div class="page-header-text">
                Menu
            </div>
        </div>
    </h1>
    <!-- end page-header -->
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
                <div class="table-responsive">
                    <table class="table table-valign-middle table-panel mb-0">
                        <thead>
                            <tr>
                                <th>Source</th>
                                <th>Total</th>
                                <th>Trend</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><label class="label label-danger">Unique Visitor</label></td>
                                <td>13,203 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
                                <td>
                                    <div id="sparkline-unique-visitor"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="label label-warning">Bounce Rate</label></td>
                                <td>28.2%</td>
                                <td>
                                    <div id="sparkline-bounce-rate"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="label label-success">Total Page Views</label></td>
                                <td>1,230,030</td>
                                <td>
                                    <div id="sparkline-total-page-views"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="label label-primary">Avg Time On Site</label></td>
                                <td>00:03:45</td>
                                <td>
                                    <div id="sparkline-avg-time-on-site"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="label label-default">% New Visits</label></td>
                                <td>40.5%</td>
                                <td>
                                    <div id="sparkline-new-visits"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="label label-inverse">Return Visitors</label></td>
                                <td>73.4%</td>
                                <td>
                                    <div id="sparkline-return-visitors"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end #content -->
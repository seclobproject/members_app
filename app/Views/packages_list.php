<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Packages</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Members</h3>
                            <a class="btn btn-app" href="<?php echo route_to('package/add') ?>">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="package_list" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>GST Amount</th>
                                        <th>Users</th>
                                        <th>Add-on Users</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($packages as $item) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $item['package_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['package_amount']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['package_gst_excluded']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['users']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['add_on_users']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['status'] === 1 ? 'Active' : 'Inactive'; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>GST Amount</th>
                                        <th>Users</th>
                                        <th>Add-on Users</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $('#package_list').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            // 'ajax': {
            //     'url': 'api/packages/list'
            // },
            // 'columns': [
            //     { data: 'package_name' }
            // ]
        });
    });
</script>
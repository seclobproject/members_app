<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Member Profile</h1>
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
                <div class="col-md-3">
                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Sponsor ID</strong>

                            <p class="text-muted">
                                SST374894
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Sponsor Name</strong>

                            <p class="text-muted">Secure T</p>

                            <hr>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Users</h3> -->
                            <a class="btn btn-app" href="<?php echo route_to('member/add') ?>">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="user_list" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Package</th>
                                        <th>Status</th>
                                        <th>Add-On Package</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($members as $item) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $item['name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['phone']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['email']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['address']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['package_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['addOn_users']; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Package</th>
                                        <th>Status</th>
                                        <th>Add-On Package</th>
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
        $('#user_list').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
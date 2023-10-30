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
                            <!-- <h3 class="card-title">Members</h3> -->
                            <div class="row">
                                <div class="col-md-11"></div>
                                <div class="col-md-1">
                                    <a class="btn btn-primary" href="<?php echo route_to('package/add') ?>">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
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
                                        <th>Actions</th>
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
                                            <td>
                                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-edit"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-edit"><i class="fas fas fa-trash"></i></a>
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
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>

                            <!-- <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>First name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>fgfgfg</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>First name</th>
                                    </tr>
                                </tfoot>
                            </table> -->
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
    $(document).ready(function () {
        $('#package_list').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            // "processing": true,
            // "serverSide": true,
            // "crossDomain": true,
            // 'ajax': {
            //     'url': '/packages'
            // },
            // 'columns': [
            //     { data: 'package_name' }
            // ],
            // method: 'GET',
            // dataType: 'json',
            // success: function (data) {
            //     console.log('data>>',data)
            //     // Call this function when the API request succeeds
            //     //populateTable(data);
            // },
            // error: function () {
            //     // Handle errors here
            // }
        });
        // $('#package_list').on('change', 'input', function () {
        //     var row = $(this).closest('tr');
        //     var total = 0;
        //     $('input', row).each(function () {
        //         //total += Number($(this).val());
        //     });
        //     $('.total', row).text(total);
        // });
        // $('#example').dataTable({
        //     "processing": true,
        //     "serverSide": true,
        //     //     ajax: function (d, cb) {
        //     //     fetch('/packages')
        //     //         .then(response => response.json())
        //     //         .then(data => cb(data));
        //     // },
        //     "ajax": {
        //         "url": "<?=site_url('packages')?>",
        //         "dataType": "json",
        //         "type": 'GET',
        //         "error": function (e) {
        //             alert(e);
        //         },
        //         "success": function (e) {
        //             console.log('>>', e);
        //             return JSON.stringify(e)
        //         },
        //         // "data": function (d) {
        //         //     console.log('hhh>>>', JSON.stringify(d));
        //         //     return JSON.stringify(d);
        //         // }
        //     },
        //     "columns": [
        //         { "data": "package_name" },
        //     ]
        // });
    });
</script>
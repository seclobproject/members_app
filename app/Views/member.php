<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1>Member</h1> -->
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <!-- <li class="breadcrumb-item active">General Form</li> -->
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Member</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action='<?php echo route_to('member/save') ?>' method="post" name="member_add" id="member_add"
              accept-charset="utf-8">
              <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
              <?= csrf_meta() ?>
              <div class="card-body">
                <div class="form-group">
                  <label for="sponsorId">Sponsor ID</label>
                  <input type="text" class="form-control" id="sponsorId" name="sponsorId" placeholder="Sponsor ID"
                    value="<?php echo $sponsor_id ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="sponsorName">Sponsor Name</label>
                  <input type="text" class="form-control" id="sponsorName" name="sponsorName" placeholder="Sponsor Name"
                    value="<?php echo $sponsor_name ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="name">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="package">Choose the Package</label>
                  <select class="custom-select rounded-0" id="package" name="package">
                    <option value="">Select</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="addOn">Add-on Users</label>
                  <input type="number" class="form-control" id="add_on" name="add_on" placeholder="Add-on package">
                </div>
                <!-- 
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../jquery-validator/dist/jquery.validate.js"></script>
<script>
  $(document).ready(function () {
    $('#member_add').validate({
      rules: {
        name: 'required',
        phone: 'required',
        address: 'required',
        email: {
          required: true,
          email: true,//add an email rule that will ensure the value entered is valid email id.
          maxlength: 255,
        },
      },
      messages: {
        name: 'Name is required',
        phone: 'Phone is required',
        address: 'Address is required',
        email: 'Enter a valid email',
      },
    });
    $.ajax({
      type: "GET",
      url: "/packages",
      dataType: "json",
      contentType: "application/json",
      success: function (res) {
        $.each(res, function (data, value) {
          $("#package").append($("<option></option>").val(value.id).html(value.package_name));
        })
      }

    });
  });
</script>
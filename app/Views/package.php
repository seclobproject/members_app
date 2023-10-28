<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Package</h1>
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
              <h3 class="card-title">Add Package</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo route_to('package/save') ?>" method="post" accept-charset="utf-8" id="plan_form">
              <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
              <?= csrf_meta() ?>
              <div class="card-body">
                <div class="form-group">
                  <label for="planName">Plan Name</label>
                  <input type="text" class="form-control" id="planName" name="planName" placeholder="Plan Name">
                </div>
                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount">
                </div>
                <div class="form-group">
                  <label for="amount">GST Excluded Amount 18%</label>
                  <input type="number" class="form-control" id="amount_gst" name="amount_gst" placeholder="Amount 18% GST"
                    readonly>
                </div>
                <div class="form-group">
                  <label for="users">Users Pin</label>
                  <input type="number" class="form-control" id="users" name="users" placeholder="Users">
                </div>
                <div class="form-group">
                  <label for="addOnUsers">Add-on Users Pin</label>
                  <input type="number" class="form-control" id="add_on" name="add_on" placeholder="Add-on Users">
                </div>
              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" id="submitBtn" name="submitBtn" class="btn btn-primary submitBtn">Submit</button>
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
    $('#amount').change(function () {
      //$('#amountGst').addClass
      var amount = $('#amount').val();
      var gst = amount / 1.18;
      var gst_deducted = Math.round(gst * 100) / 100;
      $('#amount_gst').val(gst_deducted);

    });
    $('.submitBtn').click(function () {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('form#feedInput').submit(function (e) {

      // var form = $(this);
      // e.preventDefault();
      // $.ajax({
      //   type: "POST",
      //   url: "<?php echo site_url('dashboard/post_feed_item'); ?>",
      //   data: form.serialize(), // <--- THIS IS THE CHANGE
      //   dataType: "html",
      //   success: function (data) {
      //     $('#feed-container').prepend(data);
      //   },
      //   error: function () { alert("Error posting feed."); }
      // });

    });
  });
</script>
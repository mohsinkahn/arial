<?php require_once('header.php') ?>


<div class="page-content">
    <div class="container-fluid">

        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title text-black">Report</h6>
                </div>
                <div class="col-md-4">
                    <div class="float-end d-none d-md-block">
                        <a href="admin_dashboard.php" class="btn btn-primary">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">all products scanned with expiry</h4>

                        <div class="p-2">
                        <div id="chart" dir="ltr"></div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- end row -->


    </div>
</div>

<!-- delete modal -->
<div class="modal fade bs-example-modal-lg2" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="row">

                        <div class="col-md-12">
                            <h6>Are You Sure Want To Delete this?</h6>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="btn-group " role="group" aria-label="Basic example">
                        <a href="#" type="submit" class="btn btn-primary">Save</a>
                        <a href="#" type="button" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- end modal -->

<?php require_once('footer.php') ?>
<?php require_once('header.php') ?>

<style>
    .unlock {
        display: none;
    }
</style>

<div class="page-content">
    <div class="container-fluid">

        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title text-black">Dashboard</h6>
                </div>
                <div class="col-md-4">
                    <div class="float-end d-none d-md-block">
                        <a href="report.php" class="btn btn-primary">Report</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">


            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="mt-0 header-title">Products table detail</h4> -->
                        <div class="row mar-bottom-10">
                            <div class="col-md-5">
                                <h4 class="mt-0 header-title">Date range</h4>
                                <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container='#datepicker6'>
                                    <input type="text" class="form-control" name="start" placeholder="Start Date" />
                                    <input type="text" class="form-control" name="end" placeholder="End Date" />
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h4 class="mt-0 header-title">Category</h4>
                                <select name="" id="" class="form-select">
                                    <option value="">Select Category</option>
                                    <option value="">lorem</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <h4 class="mt-0 header-title">Search</h4>
                                <a href="#" class="btn btn-primary w-100" style="padding:11px;">
                                    <i class="dripicons-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-2 scan">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Barcode No</th>
                                            <th>Category</th>
                                            <th>Mfg Date</th>
                                            <th>Exp Date</th>
                                            <th>Quantity</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>
                                                Potato pancake
                                            </td>
                                            <td>
                                                30343435565777800
                                            </td>
                                            <td>
                                                Canned Goods
                                            </td>
                                            <td>
                                                12/12/2022
                                            </td>
                                            <td>
                                                12/12/2023
                                            </td>
                                            <td>
                                                1
                                            </td>

                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg2">
                                                    <i class="ti ti-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg4">
                                                    <i class="ti ti-pencil-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Potato pancake
                                            </td>
                                            <td>
                                                30343435565777800
                                            </td>
                                            <td>
                                                Canned Goods
                                            </td>
                                            <td>
                                                12/12/2022
                                            </td>
                                            <td>
                                                12/12/2023
                                            </td>
                                            <td>
                                                1
                                            </td>

                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg2">
                                                    <i class="ti ti-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg4">
                                                    <i class="ti ti-pencil-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Potato pancake
                                            </td>
                                            <td>
                                                30343435565777800
                                            </td>
                                            <td>
                                                Canned Goods
                                            </td>
                                            <td>
                                                12/12/2022
                                            </td>
                                            <td>
                                                12/12/2023
                                            </td>
                                            <td>
                                                1
                                            </td>

                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg2">
                                                    <i class="ti ti-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg4">
                                                    <i class="ti ti-pencil-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Potato pancake
                                            </td>
                                            <td>
                                                30343435565777800
                                            </td>
                                            <td>
                                                Canned Goods
                                            </td>
                                            <td>
                                                12/12/2022
                                            </td>
                                            <td>
                                                12/12/2023
                                            </td>
                                            <td>
                                                1
                                            </td>

                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg2">
                                                    <i class="ti ti-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg4">
                                                    <i class="ti ti-pencil-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Potato pancake
                                            </td>
                                            <td>
                                                30343435565777800
                                            </td>
                                            <td>
                                                Canned Goods
                                            </td>
                                            <td>
                                                12/12/2022
                                            </td>
                                            <td>
                                                12/12/2023
                                            </td>
                                            <td>
                                                1
                                            </td>

                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg2">
                                                    <i class="ti ti-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg4">
                                                    <i class="ti ti-pencil-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Potato pancake
                                            </td>
                                            <td>
                                                30343435565777800
                                            </td>
                                            <td>
                                                Canned Goods
                                            </td>
                                            <td>
                                                12/12/2022
                                            </td>
                                            <td>
                                                12/12/2023
                                            </td>
                                            <td>
                                                1
                                            </td>

                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg2">
                                                    <i class="ti ti-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg4">
                                                    <i class="ti ti-pencil-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Potato pancake
                                            </td>
                                            <td>
                                                30343435565777800
                                            </td>
                                            <td>
                                                Canned Goods
                                            </td>
                                            <td>
                                                12/12/2022
                                            </td>
                                            <td>
                                                12/12/2023
                                            </td>
                                            <td>
                                                1
                                            </td>

                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg2">
                                                    <i class="ti ti-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg4">
                                                    <i class="ti ti-pencil-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Potato pancake
                                            </td>
                                            <td>
                                                30343435565777800
                                            </td>
                                            <td>
                                                Canned Goods
                                            </td>
                                            <td>
                                                12/12/2022
                                            </td>
                                            <td>
                                                12/12/2023
                                            </td>
                                            <td>
                                                1
                                            </td>

                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg2">
                                                    <i class="ti ti-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg4">
                                                    <i class="ti ti-pencil-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

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


<!-- edit modal -->
<div class="modal fade bs-example-modal-lg4" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="example-text-input" class="col-form-label">Product Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="example-text-input" class="col-form-label">Barcode No</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="example-text-input" class="col-form-label">Category</label>
                            <select name="" id="" class="form-select">
                                <option value="">Select</option>
                                <option value="">
                                    Baby Product</option>
                                <option value="">Bevarages</option>
                                <option value="">Canned Goods</option>
                                <option value="">Condiments</option>
                                <option value="">Cooking & Baking</option>
                                <option value="">Meat & Fish</option>
                                <option value="">Healthy & Beauty</option>
                                <option value="">Household & Cleaning</option>
                                <option value="">Pantry</option>
                                <option value="">Snacks</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="example-text-input" class="col-form-label">Mfg Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="example-text-input" class="col-form-label">Exp Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="example-text-input" class="col-form-label">Quantity</label>
                            <input type="text" class="form-control">
                        </div>
                        <!-- <div class="col-md-4 js-select">
                            <select class="vodiapicker">
                                <option value="en" class="test" data-thumbnail="assets/images/baby">English</option>
                                <option value="au" data-thumbnail="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/NYCS-bull-trans-B.svg/480px-NYCS-bull-trans-B.svg.png">Engllish (AU)</option>
                                <option value="uk" data-thumbnail="https://glot.io/static/img/c.svg?etag=ZaoLBh_p">Chinese (Simplified)</option>
                                <option value="cn" data-thumbnail="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/NYCS-bull-trans-D.svg/2000px-NYCS-bull-trans-D.svg.png">German</option>
                                <option value="de" data-thumbnail="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/MO-supp-E.svg/600px-MO-supp-E.svg.png">Danish</option>
                                <option value="dk" data-thumbnail="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/267px-F_icon.svg.png">French</option>
                                <option value="fr" data-thumbnail="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2000px-Google_%22G%22_Logo.svg.png">Greek</option>
                                <option value="gr" data-thumbnail="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/4H_Emblem.svg/1000px-4H_Emblem.svg.png">Italian</option>
                            </select>

                            <div class="lang-select">
                                <button class="btn-select" value=""></button>
                                <div class="b">
                                    <ul id="a"></ul>
                                </div>
                            </div>
                        </div> -->

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
<!-- end -->

<!-- <script>
    //test for iterating over child elements
    var langArray = [];
    $('.vodiapicker option').each(function() {
        var img = $(this).attr("data-thumbnail");
        var text = this.innerText;
        var value = $(this).val();
        var item = '<li><img src="' + img + '" alt="" value="' + value + '"/><span>' + text + '</span></li>';
        langArray.push(item);
    })

    $('#a').html(langArray);

    //Set the button value to the first el of the array
    $('.btn-select').html(langArray[0]);
    $('.btn-select').attr('value', 'en');

    //change button stuff on click
    $('#a li').click(function() {
        var img = $(this).find('img').attr("src");
        var value = $(this).find('img').attr('value');
        var text = this.innerText;
        var item = '<li><img src="' + img + '" alt="" /><span>' + text + '</span></li>';
        $('.btn-select').html(item);
        $('.btn-select').attr('value', value);
        $(".b").toggle();
        //console.log(value);
    });

    $(".btn-select").click(function() {
        $(".b").toggle();
    });

    //check local storage for the lang
    var sessionLang = localStorage.getItem('lang');
    if (sessionLang) {
        //find an item with value of sessionLang
        var langIndex = langArray.indexOf(sessionLang);
        $('.btn-select').html(langArray[langIndex]);
        $('.btn-select').attr('value', sessionLang);
    } else {
        var langIndex = langArray.indexOf('ch');
        console.log(langIndex);
        $('.btn-select').html(langArray[langIndex]);
        //$('.btn-select').attr('value', 'en');
    }
</script> -->

<?php require_once('footer.php') ?>
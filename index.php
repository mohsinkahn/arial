<?php require_once('header.php') ?>

<style>
    .lock {
        display: none;
    }
    #display {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                border: 4px solid #ccc;
                font-size: 40px;
                border-radius: 8px;
                padding: 7px;
                height: 75px;

            }    
</style>


<div class="page-content">
    <div class="container-fluid">

        <!-- <div class="card p-3">

            <h4 class="mt-0 header-title mb-0 text-center">Chasedei Kaduri Jweish Food Bank</h4>
        </div> -->



        <div class="row">
            <div class="col-xl-4 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Change quantity of item before scanning</h4>
                        <div class="calculator">
                    <div id="display"></div>
                    <table id="calcu">
                        <tbody>
                            <tr>
                                <td>
                                    <button>7</button>
                                </td>
                                <td>
                                    <button>8</button>
                                </td>
                                <td>
                                    <button>9</button>
                                </td>
                                <!-- <td>
                                    <button>-</button>
                                </td> -->
                            </tr>
                            <tr>
                                <td>
                                    <button>4</button>
                                </td>
                                <td>
                                    <button>5</button>
                                </td>
                                <td>
                                    <button>6</button>
                                </td>
                                <!-- <td>
                                    <button>+</button>
                                </td> -->
                            </tr>
                            <tr>
                                <td>
                                    <button>1</button>
                                </td>
                                <td>
                                    <button>2</button>
                                </td>
                                <td>
                                    <button>3</button>
                                </td>
                                <!-- <td>
                                    <button>=</button>
                                </td> -->
                            </tr>
                            <tr>
                                <td>
                                    <button>0</button>
                                </td>
                                <td>
                                    <button>c</button>
                                </td>
                                <td>
                                    <button><</button>
                                </td>
                                <!-- <td>
                                    <button>/</button>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
                    <script>
                        function handler(event) {
                            const value = event.target.innerText
                            const display = document.getElementById("display")

                            switch (value) {
                                case "c":
                                    display.innerText = ""
                                    break

                                case "<":
                                    display.innerText = display.innerText.slice(0, -1)
                                    break
                                      
                                case "=":
                                    display.innerText = eval(display.innerText)
                                    break

                                default:
                                    display.innerText += value
                            }
                        }

                        Array
                            .from(
                                document.getElementsByTagName("td")
                            )
                            .forEach(
                                (td) => {
                                    td.addEventListener("click", handler)
                                }
                            )
                    </script>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card mini-stats">
                    <div class="p-4 mini-stats-content">
                    </div>
                    <div class="mx-3">
                        <div class="card mb-0 border p-3 mini-stats-desc">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mt-0 mb-3">item location</h6>
                                </div>
                                <div>
                                    <!-- <input type="text" class="form-control" placeholder="Exp:A16"> -->
                                    <h6 class="mt-0 mb-3">A16</h6>
                                </div>
                            </div>
                            <!-- <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p> -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">item scanned</h4>
                        <div class="p-2">
                            <div class="no-event d-flex align-center flex-direction" style="height:285px">
                                <img src="assets/images/get.jpeg" class="img-responsive w-230 m-auto mt-3" alt="">
                                <p class="font-bold text-center flex-2 mt-4 font-bold">Getfilte Fish <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mini-stats">
                    <div class="p-4 mini-stats-content">
                    </div>
                    <div class="mx-3">
                        <div class="card mb-0 border p-3 mini-stats-desc">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mt-0 mb-3">Barcode Scanned</h6>
                                </div>
                                <div>
                                    <input type="text" class="form-control" placeholder="Exp:000988756644">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="mt-0 header-title">Recent scan</h4>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn btn-primary mar-bottom-8">Undo <i class="fa fa-undo"></i> </a>
                            </div>
                        </div>
                        <div class="p-2 scan">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Barcode</th>
                                            <th>Quantity</th>
                                            <th>Expiry</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>Meal Supplement</td>
                                            <td>34325254554363</td>
                                            <td>2</td>
                                            <td>jun,2023</td>
                                            <td>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Meal Supplement</td>
                                            <td>34325254554363</td>
                                            <td>2</td>
                                            <td>jun,2023</td>
                                            <td>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Meal Supplement</td>
                                            <td>34325254554363</td>
                                            <td>1</td>
                                            <td>jun,2023</td>
                                            <td>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Potato pancake</td>
                                            <td>34325254554363</td>
                                            <td>1</td>
                                            <td>jun,2023</td>
                                            <td>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Potato pancake</td>
                                            <td>34325254554363</td>
                                            <td>1</td>
                                            <td>jun,2023</td>
                                            <td>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Getfilte Fish</td>
                                            <td>34325254554363</td>
                                            <td>1</td>
                                            <td>jun,2023</td>
                                            <td>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Getfilte Fish</td>
                                            <td>34325254554363</td>
                                            <td>1</td>
                                            <td>jun,2023</td>
                                            <td>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Getfilte Fish</td>
                                            <td>34325254554363</td>
                                            <td>1</td>
                                            <td>jun,2023</td>
                                            <td>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Potato pancake</td>
                                            <td>34325254554363</td>
                                            <td>1</td>
                                            <td>jun,2023</td>
                                            <td>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="card mini-stats">
                    <div class="p-4 mini-stats-content">

                    </div>
                    <div class="mx-3">
                        <div class="card mb-0 border p-3 mini-stats-desc">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" style="color:white;">Submit All </a>
                                <a href="#" class="btn btn-danger  mar-left-1" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg2">Delete All</a>
                                <a href="#" class="btn btn-pink  mar-left-1" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg3">Category Editor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
       
      

    </div>
</div>

<!--  Modal submit -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Expire Date</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="row">
                        <!-- <div class="col-md-6">
                        <label for="example-text-input" class=" col-form-label">Select Category</label>
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
                        </div> -->
                        <div class="col-md-12">
                            <label for="example-text-input" class=" col-form-label">Select Expire Date</label>
                            <input class="form-control mar-bottom-4" type="month">
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
<!-- /.modal -->

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

<div class="modal fade bs-example-modal-lg3" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Select From Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive mb-0 ">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <ul class="ks-cboxtags justify-content-center">
                                                    <li>
                                                        <input type="checkbox" id="ba" value=""><label for="ba">
                                                            <img src="assets/images/baby-removebg-preview.png" alt="">
                                                            Bevarages</label>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="ks-cboxtags justify-content-center">
                                                    <li>
                                                        <input type="checkbox" id="bev" value=""><label for="bev">
                                                            <img src="assets/images/beverage-removebg-preview.png" alt="">
                                                            Bevarages</label>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="ks-cboxtags justify-content-center">
                                                    <li>
                                                        <input type="checkbox" id="can" value=""><label for="can">
                                                            <img src="assets/images/canned-removebg-preview.png" alt="">
                                                            Canned Goods</label>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="ks-cboxtags justify-content-center">
                                                    <li>
                                                        <input type="checkbox" id="con" value=""><label for="con">
                                                            <img src="assets/images/cond-removebg-preview.png" alt="">
                                                            Condiments</label>
                                                    </li>
                                                </ul>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <ul class="ks-cboxtags justify-content-center">
                                                    <li>
                                                        <input type="checkbox" id="coo" value=""><label for="coo">
                                                            <img src="assets/images/cook-removebg-preview.png" alt="">
                                                            Cooking & Baking</label>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="ks-cboxtags justify-content-center">
                                                    <li>
                                                        <input type="checkbox" id="mea" value=""><label for="mea">
                                                            <img src="assets/images/meat-removebg-preview.png" alt="">
                                                            Meat & Fish</label>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="ks-cboxtags justify-content-center">
                                                    <li>
                                                        <input type="checkbox" id="hea" value=""><label for="hea">
                                                            <img src="assets/images/health-removebg-preview.png" alt="">
                                                            Health & Beauty</label>
                                                    </li>
                                                </ul>
                                            </td>

                                            <td>
                                                <ul class="ks-cboxtags justify-content-center">
                                                    <li>
                                                        <input type="checkbox" id="hou" value=""><label for="hou">
                                                            <img src="assets/images/house-removebg-preview.png" alt="">
                                                            Household & Cleaning</label>
                                                    </li>
                                                </ul>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <ul class="ks-cboxtags justify-content-center">
                                                    <li>
                                                        <input type="checkbox" id="pan" value=""><label for="pan">
                                                            <img src="assets/images/pantry-removebg-preview.png" alt="">
                                                            Pantry</label>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="ks-cboxtags justify-content-center">
                                                    <li>
                                                        <input type="checkbox" id="sna" value=""><label for="sna">
                                                            <img src="assets/images/snack-removebg-preview.png" alt="">
                                                            Snacks</label>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td></td>
                                            <td></td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <!-- <ul class="ks-cboxtags justify-content-center">
                                <li>
                                    <input type="checkbox" id="all" value=""><label for="all">All Day</label>
                                </li>
                            </ul> -->
                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <div class="btn-group " role="group" aria-label="Basic example">
                    <a href="#" type="submit" class="btn btn-primary">Save</a>
                    <a href="#" type="button" class="btn btn-secondary">Cancel</a>

                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script>
    // Function that display value
    function dis(val) {
        document.getElementById("result").value += val
    }

    function myFunction(event) {
        if (event.key == '0' || event.key == '1' ||
            event.key == '2' || event.key == '3' ||
            event.key == '4' || event.key == '5' ||
            event.key == '6' || event.key == '7' ||
            event.key == '8' || event.key == '9' ||
            event.key == '+' || event.key == '-' ||
            event.key == '*' || event.key == '/')
            document.getElementById("result").value += event.key;
    }

    var cal = document.getElementById("calcu");
    cal.onkeyup = function(event) {
        if (event.keyCode === 13) {
            console.log("Enter");
            let x = document.getElementById("result").value
            console.log(x);
            solve();
        }
    }

    // Function that evaluates the digit and return result
    function solve() {
        let x = document.getElementById("result").value
        let y = math.evaluate(x)
        document.getElementById("result").value = y
    }

    // Function that clear the display
    function clr() {
        document.getElementById("result").value = ""
        // result.innerText = result.innerText.slice(0, -1)
    }
</script>
<?php require_once('footer.php') ?>
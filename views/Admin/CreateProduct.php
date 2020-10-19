
<!doctype html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:34:01 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../templates/dashboard/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../../templates/dashboard/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../../templates/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../../templates/dashboard/assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../templates/dashboard/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../../templates/dashboard/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../../templates/dashboard/assets/css/google-roboto-300-700.css" rel="stylesheet" />
    <style>
        .control-label{position:0};

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="white" data-image="">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="./index.php" class="simple-text">
                    START ORGANIC
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="./index.php" class="simple-text">
                    SO
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="../../templates/dashboard/assets/img/faces/avatar.jpg" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            Admin
                        </a>
                    </div>
                </div>
                <ul class="nav">
                  <li class="nav-item   ">
                    <a class="nav-link" href="./index.php">
                      <i class="material-icons">dashboard</i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./Product.php">
                      <i class="material-icons">table_view</i>
                      <p>All Products</p>
                    </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="./CreateProduct.php">
                      <i class="material-icons">add_box</i>
                      <p>Add Product</p>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="./orderManage.php">
                      <i class="material-icons">list_alt</i>
                      <p>Order Manage</p>
                    </a>
                  </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Create New Product </a>
                    </div>

                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <form id="createProduct" class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                                    <div class="card-header card-header-icon" data-background-color="purple">
                                        <i class="material-icons">playlist_add</i>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">Create New Product</h4>
                                        <div style="margin-left:10%; width:80%">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Product Name<small>*</small></label>
                                                <input class="form-control" id="name" type="text" required="true" />
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Price<small>*</small></label>
                                                <input class="form-control" id="price" type="number" required="true" />
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Discount<small>*</small></label>
                                                <input class="form-control" id="discount" type="number"  value="0"/>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Amount<small>*</small></label>
                                                <input class="form-control" id="amount" type="number" required="true" />
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Description</label>
                                                <textarea class="form-control" id="desc"  rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                            <div class="row">
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <legend>Product Image</legend>
                                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail">
                                                        <img src="../../templates/dashboard/assets/img/image_placeholder.jpg" alt="...">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                    <div>
                                                        <span class="btn btn-rose btn-round btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" id="inputImg" />
                                                        </span>
                                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 checkbox-radios">
                                                <legend>Product Type</legend>
                                                <div class="radio">
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="prodType" value="Vegetables" required> Vegetables
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="prodType" value="Fruits" required> Fruits
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="prodType" value="Dried" required> Dried
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="prodType" value="Juice" required> Juice
                                                    </label>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                        <div class="card-footer text-center">
                                            <button type="reset" class="btn btn-default btn-fill" id="reset">Reset</button>
                                            <button type="submit" class="btn btn-success btn-fill" id="submit">Create</button>
                                        </div>
                                        </div>
                                       
                                    </div>
                                </form>

                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../../templates/dashboard/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../../templates/dashboard/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../templates/dashboard/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../templates/dashboard/assets/js/material.min.js" type="text/javascript"></script>
<script src="../../templates/dashboard/assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../../templates/dashboard/assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../../templates/dashboard/assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="../../templates/dashboard/assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="../../templates/dashboard/assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="../../templates/dashboard/assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="../../templates/dashboard/assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="../../templates/dashboard/assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="../../templates/dashboard/assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="../../templates/dashboard/assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!-- Select Plugin -->
<script src="../../templates/dashboard/assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="../../templates/dashboard/assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="../../templates/dashboard/assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../../templates/dashboard/assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="../../templates/dashboard/assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="../../templates/dashboard/assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../../templates/dashboard/assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../../templates/dashboard/assets/js/demo.js"></script>
<script type="text/javascript">

    function setFormValidation(id) {
        $(id).validate({
            errorPlacement: function(error, element) {
                $(element).parent('div').addClass('has-error');
            }
        });
    }

    $(document).ready(function() {
        setFormValidation('#createProduct');

        $('#createProduct').on('submit', function(event){
            //event.preventDefault();
            var file_data = $('#inputImg').prop('files')[0]; 
            var name = $("#name").val();
            var price = $("#price").val();
            var discount = $("#discount").val();
            var amount = $("#amount").val();
            var desc = $("#desc").val();
            var prodType = $("input[name='prodType']:checked").val();
            var formData = new FormData();
            formData.append('inputImg', file_data);
            formData.append('name', name);
            formData.append('price', price);
            formData.append('discount', discount);
            formData.append('amount', amount);
            formData.append('desc', desc);
            formData.append('prodType', prodType);
            formData.append('action', 'create');
            $.ajax({
				url:"control.php",
				method:"POST",
				data:formData,
				success:function(data)
				{
					if(data == 1){
                        demo.showSwal('success-message');
                        $("#reset").click();
                    }
                    else if (data == 0){
                        demo.showSwal('error');
                    }
                },
                cache: false,
                contentType: false,
                processData: false
			});
        });

    });
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:34:01 GMT -->
</html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ISHLAW</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index2.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ISHLAW</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/ava.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ishmael Nyaribo</a>
          <a href="#" class="d-block">System Adminstrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="../../index2.php" class="nav-link active">
                
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

                <i class="right fas fa-angle-left"></i>
              </p>

            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index2.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="far fa-file-word"></i>
              <p>
                Files
                
              </p>
            </a>
          </li>
          <li class="">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Accounts
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clients
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-users"></i>
                  <p>New Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Client Profile</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-user-circle"></i>
                  <p>Personal Profile</p>
                </a>
              </li>
                  </ul>
          </li>
          <li class="">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Tasks
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

                      <li class="">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-header">Quick Links</li>
                    <li class="nav-item">
            <a href="../../advanced.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                New Matter
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                New Task
                
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Filing Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Filing Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
       <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Create New Category</h3>

              <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                    class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                    class="fas fa-times"></i></button>
              </div> -->
            </div>
            <!-- /.card-header -->
            <?php

  $conn =new PDO("mysql:host=localhost;dbname=ishfinal","root","");
  if(isset($_POST['submit'])){
    $File =$_POST['nme'];
    $Who =$_POST['by'];
    $CaseN =$_POST['case'];
    $Client =$_POST['client'];
    $Physical =$_POST['location'];
    $Priority =$_POST['prio'];
    $status =$_POST['stat'];
    $Date =$_POST['dat'];
    $Parties =$_POST['parties'];
    $name =$_FILES['myFile']['name'];
    $type =$_FILES['myFile']['type'];
    $data = file_get_contents($_FILES['myFile']['tmp_name']);
    $stmt = $conn->prepare("insert into blb values('',?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt ->bindParam(1,$name);
    $stmt ->bindParam(2,$type);
    $stmt ->bindParam(3,$data);
    $stmt ->bindParam(4,$Parties);
    $stmt ->bindParam(5,$CaseN);
    $stmt ->bindParam(6,$Client);
    $stmt ->bindParam(7,$Who);
    $stmt ->bindParam(8,$Physical);
     $stmt ->bindParam(9,$Priority);
  $stmt ->bindParam(10,$status);
    $stmt ->bindParam(11,$File);
    $stmt ->bindParam(12,$Date);
    
    
    $stmt -> execute();
  }


  ?>
            <form method="POST" enctype="multipart/form-data" id="exe">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Select Filing category</option>
                        <option>Litigation</option>
                        <option>Conveyancing</option>
                        <option>Criminal Law</option>
                        <option>Foreign Law</option>
                        <option>Family Law</option>

                      </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Parties</label>
                      <input type="text" name="parties" class="form-control" id="parties" placeholder="Please Enter parties">

                    </div>
                    <!-- /.form-group -->
                  </div>

                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>File Name</label>
                      <input type="text" name="nme" class="form-control" id="file" placeholder="Enter file name">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Case Number</label>
                      <input type="Text" class="form-control" id="case" name="case" placeholder="Please Enter case Number">

                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

 
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Client</label>
                      <input type="Text" class="form-control"  name="client" id="client" placeholder="Please Enter client Name">

                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Filed By:</label>
                      <div class="select2-purple">
                        <input type="Text" class="form-control" id="by" name="by" placeholder="Enter Name">
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Physical Location</label>
                      <input type="Text" class="form-control" name="location" id="location" placeholder="Please Enter Physical Location">

                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="form-group">
                    <label>Priority</label>
                    <select id="priority" name="prio" class="form-control select2" style="width: 100%;">
                      <option selected="selected">Select Priority</option>
                      <option value="Urgent">Urgent</option>
                      <option value="incoming">Incoming</option>
                      <option value="others">Others</option>

                    </select>
                  </div>
                  <!-- /.col -->
                </div>

                <!-- /.form-group -->
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Status</label>
                      <input type="text" class="form-control" id="stat" name="stat" placeholder="Enter Case Status">

                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="Date" class="form-control" id="date" name="dat" placeholder="Please Select Date">

                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label>Select File:</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="myFile" id="myFile">
                            <!-- <label class="custom-file-label" for="exampleInputFilxe">Choose file</label> -->
                          </div>
                        </div>
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>


<!-- 
            <script type="text/javascript">
              const form = document.getElementById('exe');
              form.addEventListener('submit', function (e) {
                e.preventDefault();
                var selectedFile = document.getElementById('myFile').files[0];
                var filedBy = document.getElementById('by').value;
                var clientName = document.getElementById('client').value;
                var caseNumber = document.getElementById('case').value;
                var status = document.getElementById('stat').value;
                var priority = document.getElementById('priority').value;
                var physicalLocation = document.getElementById('location').value;
                var parties = document.getElementById('parties').value;
                var fileName = selectedFile.name;
                var description = "";
                var version = "";
                var folderId = 2;
                var data = new FormData;
                data.append("document", selectedFile);
                data.append("name", filedBy);
                data.append("description", `client: ${clientName}, case: ${caseNumber}, status: ${status}, parties: ${parties}`);
                data.append("version", 1);
                data.append("PhysicalLocation", physicalLocation);
                data.append("Priority", priority);
                data.append("FolderId", folderId);
                console.log(data)
                // make API call to submit file
                fetch('http://18.118.17.69:4000/files/api/v1/file_categories', {
                  method: 'POST',
                  body: data
                }).then(function (response) {
                  if (response.status === 200) {
                    alert("File upload successful");
                  }
                  else
                  {
                    window.alert("failure");
                  }
                })
              })
            </script>
 -->          </div>
        </form>
      </div>
          <!-- /.content-wrapper -->
          <footer class="main-footer">
    Copyright &copy;<script>//document.write(new Date().getFullYear());</script> All rights reserved
    <div class="float-right d-none d-sm-block">
      
  </footer>
    
          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="../../plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="../../plugins/moment/moment.min.js"></script>
        <script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
        <!-- date-range-picker -->
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Bootstrap Switch -->
        <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- Page script -->
        <script>
          $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservationdate').datetimepicker({
              format: 'L'
            });
            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
              timePicker: true,
              timePickerIncrement: 30,
              locale: {
                format: 'MM/DD/YYYY hh:mm A'
              }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
              {
                ranges: {
                  'Today': [moment(), moment()],
                  'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                  'This Month': [moment().startOf('month'), moment().endOf('month')],
                  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
              },
              function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
              }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
              format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function (event) {
              $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            });

            $("input[data-bootstrap-switch]").each(function () {
              $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });

          })
        </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ISHLAW</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">
    <!-- Navbar -->
   
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../forms/adv.php" class="nav-link">Create New File</a>
      </li>
      
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Records.." title="Type in a name">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
    </ul>

    <!-- SEARCH FORM -->
    
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
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
            <a href="../forms/advanced.html" class="nav-link">
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
              <h1>Client File Documents</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Client File</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <!-- /.row -->
          <div class="row">
            <div class="col-md-12">
              <table id="table" class="table table-hover text-nowrap">
                <thead>
                  <tr>
                                        <th>Client</th>
                    <th>Case Number</th>
                    <th>Parties</th>
                    <th>Filed By</th>
                    <th>Status</th>
                    <th>Filing date</th>
                    <th>Physical location</th>
                    <th>Priority</th>
                    <th>File</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
                <?php
                $conn =new PDO("mysql:host=localhost;dbname=ishfinal","root","");
                $stat = $conn ->prepare("select *  from blb");
                $stat -> execute();
                while($row= $stat-> fetch()){

?>
<tr>    

                 <td> <?php echo $row['Client']?></td>
                 <td> <?php echo $row['CaseN']?></td>
                <td> <?php echo $row['Parties']?></td>
                <td> <?php echo $row['Who']?></td>

                 <td> <?php echo $row['status']?></td>
                 <td> <?php echo $row['Date']?></td>
                <td> <?php echo $row['Physical']?></td>
                <td> <?php echo $row['Priority']?></td>
                 



 
                 <td> <?php echo "<a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a>"?></td>


      
</tr>    

<?php
}
?>


                



                
              </table>
              <!-- <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Upload File</h3>
              </div>
              <div class="card-body">
                <div id="actions" class="row">
                  <div class="col-lg-6">
                    <div class="btn-group w-100">
                      <span class="btn btn-success col fileinput-button">
                        <i class="fas fa-plus"></i>
                        <span>Add files</span>
                      </span>
                      <button type="submit" class="btn btn-primary col start">
                        <i class="fas fa-upload"></i>
                        <span>Start upload</span>
                      </button>
                      <button type="reset" class="btn btn-warning col cancel">
                        <i class="fas fa-times-circle"></i>
                        <span>Cancel upload</span>
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center">
                    <div class="fileupload-process w-100">
                      <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table table-striped files" id="previews">
                  <div id="template" class="row mt-2">
                    <div class="col-auto">
                        <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                    </div>
                    <div class="col d-flex align-items-center">
                        <p class="mb-0">
                          <span class="lead" data-dz-name></span>
                          (<span data-dz-size></span>)
                        </p>
                        <strong class="error text-danger" data-dz-errormessage></strong>
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                          <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                        </div>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                      <div class="btn-group">
                        <button class="btn btn-primary start">
                          <i class="fas fa-upload"></i>
                          <span>Start</span>
                        </button>
                        <button data-dz-remove class="btn btn-warning cancel">
                          <i class="fas fa-times-circle"></i>
                          <span>Cancel</span>
                        </button>
                        <button data-dz-remove class="btn btn-danger delete">
                          <i class="fas fa-trash"></i>
                          <span>Delete</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </.card-body
              <div class="card-footer">
                Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for more examples and information about the plugin.
              </div>
            </div> -->
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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
  <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
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
    // BS-Stepper Init
    // document.addEventListener('DOMContentLoaded', function () {
    //   window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    // });

    // window.onload = function () {
    //   fetch('http://18.118.17.69:4000/files/api/v1/file_categories').then(response => response.json()).then(data => {
    //     console.log(data);
    //     var table = document.getElementById("table");
    //     for (var i = 0; i < data.length; i++) {
    //       // create a new row
    //       var row = table.insertRow(table.length);
    //       // create cells
    //       var fileDetails = data[i].description.split(", ");
    //       if (fileDetails.length === 4) {
    //         var a = document.createElement('a');
    //         var link = document.createTextNode("Download");
    //         a.appendChild(link);
    //         a.title = "Download";
    //         a.href = `http://18.118.17.69:4000/files/api/v1/documents/${data[i].id}/document`;
    //         var cell0 = row.insertCell(0);
    //         cell0.appendChild(a);
    //         var cell1 = row.insertCell(0);
    //         cell1.innerHTML = data[i].updatedAt.split("T")[0];
    //         var cell2 = row.insertCell(0);
    //         var cell3 = row.insertCell(0);
    //         cell3.innerHTML = data[i].name;
    //         var cell4 = row.insertCell(0);
    //         var cell5 = row.insertCell(0);
    //         var cell6 = row.insertCell(0);
    //         cell2.innerHTML = fileDetails[2].split(": ")[1];
    //         cell4.innerHTML = fileDetails[3].split(": ")[1];
    //         cell5.innerHTML = fileDetails[1].split(": ")[1];
    //         cell6.innerHTML = fileDetails[0].split(": ")[1];
    //         var cell7 = row.insertCell(0);
    //         cell7.innerHTML = data[i].path.split("/")[1];
    //       }

    //     }
    //   })
    // }

    // button.addEventListener("click", function () {
    //   alert("did something");
    // });
    // function getDocuments() {
    //   fetch('https://ishlaw.scalum.co.ke/files/api/v1/documents').then(function (response) {
    //     if (response.status === 200) {
    //       alert("File found successful");
    //     }
    //   })
    // }

    // // DropzoneJS Demo Code Start
    // Dropzone.autoDiscover = false;

    // // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    // var previewNode = document.querySelector("#template");
    // previewNode.id = "";
    // var previewTemplate = previewNode.parentNode.innerHTML;
    // previewNode.parentNode.removeChild(previewNode);

    // var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    //   url: "https://ishlaw.scalum.co.ke/files/api/v1/file_categories", // Set the url
    //   thumbnailWidth: 80,
    //   thumbnailHeight: 80,
    //   parallelUploads: 20,
    //   previewTemplate: previewTemplate,
    //   autoQueue: false, // Make sure the files aren't queued until manually added
    //   previewsContainer: "#previews", // Define the container to display the previews
    //   clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    // });

    // myDropzone.on("addedfile", function(file) {
    //   // Hookup the start button
    //   file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
    // });

    // // Update the total progress bar
    // myDropzone.on("totaluploadprogress", function(progress) {
    //   document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
    // });

    // myDropzone.on("sending", function(file) {
    //   // Show the total progress bar when upload starts
    //   document.querySelector("#total-progress").style.opacity = "1";
    //   // And disable the start button
    //   file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
    // });

    // // Hide the total progress bar when nothing's uploading anymore
    // myDropzone.on("queuecomplete", function(progress) {
    //   document.querySelector("#total-progress").style.opacity = "0";
    // });

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
   document.querySelector("#actions .start").onclick = function () {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
    };
    document.querySelector("#actions .cancel").onclick = function () {
      myDropzone.removeAllFiles(true);
    };
  // DropzoneJS Demo Code End


  </script>
</body>

</html>
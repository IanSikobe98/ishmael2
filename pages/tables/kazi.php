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
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="tr.css"> -->

        <script    src='https://cdn.jsdelivr.net/npm/rrule@2.6.4/dist/es5/rrule.min.js'></script>
<script src="https://jakubroztocil.github.io/rrule/dist/es5/rrule-tz.min.js"></script>

<!-- the rrule-to-fullcalendar connector. must go AFTER the rrule lib -->
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/rrule@5.2.0/main.global.min.js'></script>
 <!-- <script type="text/javascript" src="http://localhost/ishfinal/Calender/modi.js"></script> -->

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../forms/tasks.php" class="nav-link">Create New Tasks</a>
      </li>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a task.." title="Type in a name">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
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
            <a href="../advanced.php" class="nav-link">
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tasks</h1>
          </div>


          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active">Tasks</li>
              <li class="breadcrumb-item"><a href="events.php">View Events</a></li>




            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Assigned Tasks</h3>
                
                
                  </div>
                </div>
              </div>
    



<style type="text/css">
 .content-table{
 	border-collapse:collapse;
 	margin: 25px 0;
 	font-size: 0.9em;
 	min-width:1800px;
 	border-radius: 5px 5px 0 0;
 	overflow: hidden;
 	box-shadow:  0 0 20px rgba(0,0,0,0.15);
 }
  .content-table thead tr{

  background-color:#009879;
  color:#ffffff;
  text-align: left;
  font-weight: bold;
    }
    .content-table th,
    .content-table td{
    	padding: 12px 15px;
    }
    .content-table tbody tr{

    border-bottom: 1px solid #dddddd;
    }	
    .content-table tbody tr:nth-of-type(even){


    	background-color: #f3f3f3; 
    }
    .content-table tbody tr:last-of-type{

    	border-bottom: 2px solid #009879;
    }
    .content-table tbody tr.active-row{


    	font-weight: bold;
    	color:#009879; 
    }

       

      
 

</style>
<div class="card-body table-responsive p-0">
                <table id="myTable" class="content-table">

            <thead>
                <tr>
            <th>Task</th>
            <th>Activity</th>
	 	    <th>Assigned To</th>
	 	    <th>Client Name</th>
	 	    <th>Due Date</th>
        <th>How To</th>
	 	    <th>Task Priority</th>
	 	    <th>Task Progress/Notes</th>
        <th>Comments</th>
	 	    <th>Task Status</th>
	 	    
	 	    
	 	    
                </tr>
            </thead>
           <?php
/*
            $link = mysqli_connect("127.0.0.1", "root", "", "ishlaw");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}  
               //search
               //if (isset($_POST['username']) || isset($_POST['email'])) {
           
              $ReadSql = "SELECT tid,title,start,status,description,User,Priority,clino FROM tasks";


                

	
      $result=mysqli_query($link,$ReadSql);
      if (mysqli_num_rows($result) < 1) {
                   echo "Error! No Records";
                   exit();
                }


 	  
	   	while($row=mysqli_fetch_array($result)){
?>
	   		<tr class="active">
	   		<td><?php echo $row['tid'];?></td>
	   		<td><?php echo $row['title'];?></td>
	   		<td><?php echo $row['User'];?></td>
	   		<td><?php echo $row['clino'];?></td>
            <td><?php echo $row['start'];?></td>
            <td><?php echo $row['Priority'];?></td>
            <td><?php echo $row['description'];?></td>
            <td><?php echo $row['status'];?></td>
	   		


	   		</tr>
*/
	  ?>
<script type="text/javascript">
	var script = document.createElement('script');
script.src = "{https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js}";
document.getElementsByTagName('head')[0].appendChild(script); 
$.getJSON('http://localhost/ishfinal/API/nonrecta.php', function(data)  {
	  			console.log(data);
	  			var items = [];
var student = ''; 

	  			var daco;
          for(var i in data) {
            // items.push(data[i].rrule);
 daco = data[i].start;
daco = daco.split('-').join('/');
daco = formatDate (daco);             
        



                            student += '<tr>'; 
                            
                            student += '<td>NRD' +  
                                data[i].tid + '</td>';

                                student += '<td>' +  
                                data[i].title + '</td>'; 

                                student += '<td>' +  
                                data[i].User + '</td>'; 

                                student += '<td>' +  
                                data[i].clino + '</td>';


                                student += '<td>' +  
                                daco + '</td>';

                                student += '<td>' +  
                                data[i].hotodo + '</td>';


                                student += '<td>' +  
                                data[i].Priority + '</td>'; 

                                student += '<td>' +  
                                data[i].description + '</td>'; 

                                student += '<td>' +  
                                data[i].comment + '</td>'; 

                                student += '<td>' +  
                                data[i].status + '</td>'; 

                            //     student += '<td>' +  
                            //     cars[1][j] + '</td>'; 
  
                            // student += '<td>' +  
                            //    dates[j][k].toLocaleDateString() + '</td>'; 

                            // student += '<td>' +  
                            //     '<button id= "btn'+p+'" onclick="myFunction(this.id)"  name='+ cars[1][j]+' value= '+ cars[1][j]+'>'+'edit'+'</button>' + '</td>';

                            student += '</tr>'; 

}
  $('#myTable').append(student); 

// onclick="myFunction()"

// }
// const rule = rrule.rrulestr(
//   "DTSTART:20210104\nFREQ=DAILY;INTERVAL=1;UNTIL=20210303\nEXDATE:20210203"
//   // "DTSTART;TZID=America/Denver:20181101T190000;\n"
//   // + "RRULE:FREQ=WEEKLY;BYDAY=MO,WE,TH;INTERVAL=1;COUNT=3"
// )
// console.log(rule.all());

		  // var str = ""
		  // for (var item of items) {
		  //   str += "<option>" + item + "</option>"
		  // }
		  // document.getElementById("policyid").innerHTML = str;
	  		
			

	    });
function formatDate (input) {
  var datePart = input.match(/\d+/g),
  year = datePart[0].substring(0), // get only two digits
  month = datePart[1], day = datePart[2];

  return month+'/'+day+'/'+year;
}
</script>
	   		<script type="text/javascript" >
        var script = document.createElement('script');
script.src = "{https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js}";
document.getElementsByTagName('head')[0].appendChild(script); 
$.getJSON('http://localhost/ishfinal/API/recta.php', function(data)  {
          console.log(data);
          var items = [];

          for(var i in data) {
            items.push(data[i].rrule);
                  }
console.log(items);

var dates=[];

var tno = [];
var titles=[];
var clino = [];
var start = [];
var prior =[];
var status =[];
var user = [];
var descri = [];
var hotodo= [];
var comment =[];

for (var i in items){
const rule = rrule.rrulestr(items[i])

dates.push(rule.all());
// dates.push(data[i].title)

tno.push(data[i].tno);
titles.push(data[i].title);
user.push(data[i].User);
clino.push(data[i].clino);
start.push(data[i].start);
prior.push(data[i].Priority);
status.push(data[i].status);
descri.push(data[i].description);
hotodo.push(data[i].hotodo);
comment.push(data[i].comment);


}
var cars =[dates,tno,titles,user,clino,start,prior,status,descri,hotodo,comment];
console.log(cars);
console.log(dates);
console.log(cars[0][1][0]);
console.log(cars[1][1]);
console.log("hi");

// for(var i = 0; i < cars.length; i++) {
var car = cars[0];
var student = ''; 
var p=0;
for(var j = 0; j < car.length; j++) {
    var cube = car[j];
    for(var k = 0; k < cube.length; k++) {
       console.log("cube[" + j + "][" + k + "] = " + dates[j][k].toLocaleDateString());
       console.log("cube[" + j + "][" + k + "] = " + cars[1][j]);

       console.log(" ");
       console.log(" ");
                            student += '<tr>'; 
                            student += '<td>RD' +  p +
                                cars[1][j] + '</td>'; 

                             student += '<td>' +  
                                cars[2][j] + '</td>'; 

                                student += '<td>' +  
                                cars[3][j] + '</td>'; 
                                

                            student += '<td>' +  
                                cars[4][j] + '</td>'; 

                            student += '<td>' +  
                               dates[j][k].toLocaleDateString() + '</td>'; 
                                
                                student += '<td>' +  
                                cars[9][j] + '</td>';
                                
                                student += '<td>' +  
                                cars[6][j] + '</td>'; 

                                student += '<td>' +  
                                cars[8][j] + '</td>';

                                student += '<td>' +  
                                cars[10][j] + '</td>'; 


                                 student += '<td>' +  
                                cars[7][j] + '</td>';


                                 

                                







  
                            // student += '<td>' +  
                            //    dates[j][k].toLocaleDateString() + '</td>'; 

                            // student += '<td>' +  
                            //     '<button id= "btn'+p+'" onclick="myFunction(this.id)"  name='+ cars[1][j]+' value= '+ cars[1][j]+'>'+'edit'+'</button>' + '</td>';

                            student += '</tr>'; 

p++;
    }
}
  $('#myTable').append(student); 

// onclick="myFunction()"

// }
// const rule = rrule.rrulestr(
//   "DTSTART:20210104\nFREQ=DAILY;INTERVAL=1;UNTIL=20210303\nEXDATE:20210203"
//   // "DTSTART;TZID=America/Denver:20181101T190000;\n"
//   // + "RRULE:FREQ=WEEKLY;BYDAY=MO,WE,TH;INTERVAL=1;COUNT=3"
// )
// console.log(rule.all());

      // var str = ""
      // for (var item of items) {
      //   str += "<option>" + item + "</option>"
      // }
      // document.getElementById("policyid").innerHTML = str;
        
      

      });  
        </script>
</table>
</div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      </section>
  </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2020-2021 <a href="#">ISHLAW</a>.</strong> All rights
    reserved.
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
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
	 	
</body>	

</html>
<?php
require 'core.inc.php';
require '../init.php';
function mysqli_result($res,$row=0,$col=0){ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}

if(loggedin() ) {
      //  echo "You are Logged In";
} else {
   header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>D.M.S</title>

    <!-- Bootstrap core CSS -->

    <link href="../CSS/bootstrap.min2.css" rel="stylesheet">

    <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../CSS/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../CSS/custom1.css" rel="stylesheet">
    <link href="../CSS/icheck/flat/green.css" rel="stylesheet">


    <script src="../js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="home.html" class="site_title"><i class="fa fa-laptop"></i> <span>D.M.S</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                
                <!--            <img src="upload/$url" alt="..." class="img-circle profile_img">-->

 <?php
$url = getuserfield('url');
echo '<div class="profile_pic">';

//echo '<div class="img-circle profile_img">';
echo "<img src='upload/$url' alt='...' class='img-circle profile_img'/></div>    ";
//$imageURL = 'upload/'.$pics['url'];
?>

                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <?php 
                            $name = getuserfield('name');
                            echo "<h2>$name</h2>   ";
                            ?>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

  <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="year4.php"><i class="fa fa-home"></i> Home </a>
                                    <ul class="nav child_menu" style="display: none">
                                           <li><a href="year4.php">Profile</a>
                                        </li>

                                    </ul>
                                </li>

                                </li>
                                <li><a><i class="fa fa-book"></i> Courses <span class="fa fa-chevron-down"></span></a>
                                  <ul class="nav child_menu" style="display:none">


                                      <a><i class="fa fa-table"></i>Register Courses<span class="fa fa-chevron-down"></span></a>

                                        <li><a href="y4_1stsemester.php">1st Semester</a></li>
                                          <li><a href="y4_2ndsemester.php">2nd Semester</a></li>
                                        </li>

                                        <a><i class="fa fa-table"></i>View Registerd Courses<span class="fa fa-chevron-down"></span></a>

                                        <li><a href="study_table.html"><i class="fa fa-calendar-o"></i> Study Timetable <!-- <span class="fa fa-chevron-down"></span>--></a>

                                        <li><a href="exam_table.html"><i class="fa fa-calendar"></i> Examination Timetable <!-- <span class="fa fa-chevron-down"></span>--></a>

                                  </ul>

                                </li>

                                <li><a><i class="fa fa-book"></i> Results <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li class="current-page"><a href="year4result.php">View Results</a>
                                        </li>
                                        <li><a href="cgpa.html"><i class="fa fa-line-chart"></i>View CGPA</a>


                                    </ul>
                                </li>







                                <li><a href="election.html"><i class="fa fa-bars"></i> Election </a></li>

                                <li><a href="contact_lec.html"><i class="fa fa-envelope-o"></i> Contact Lecturer(s) </a></li>

                                <li><a href="contact_admin.html"><i class="fa fa-envelope-o"></i> Contact Admin</a></li>

                            </ul>
                        </div>
                        <div class="menu_section">

                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a href="logout.php" data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div> 

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt=""><?php echo getuserfield('name');?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="profile.php">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Edit User Info</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Edit <small>User Info</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                                        <div class="profile_img">


<?php
include '../init.php';
$name = getuserfield('name');

$regnum = getuserfield('regnum');
$targetDir = "upload/";


$pull="select * from student  where name='$name'";
$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
$extension = @end(explode(".", $_FILES["file"]["name"]));
if(isset($_POST['pupload'])){
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/JPG")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        /*echo '<div class="plus">';
        echo "Uploaded Successully";
        /*echo '</div>';echo"<br/><b><u>Image Details</u></b><br/>";

        echo "Name: " . $_FILES["file"]["name"] . "<br/>";
        echo "Type: " . $_FILES["file"]["type"] . "<br/>";
        echo "Size: " . ceil(($_FILES["file"]["size"] / 1024)) . " KB";*/

        if (file_exists("upload/" . $_FILES["file"]["name"]))
        {
        unlink("upload/" . $_FILES["file"]["name"]);
        }
        else{
            $pic=$_FILES["file"]["name"];
            $conv=explode(".",$pic);
            $ext=$conv['1'];

$filename = basename("upload/". $name.".".$ext);
$targetFilePath = $targetDir . $filename;
            //move_uploaded_file($_FILES["file"]["tmp_name"],"upload/". $regnum.".".$ext);
            move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
            /*echo "Stored in as: " . "upload/".$name.".".$ext;*/
            $url=$name.".".$ext;

            $query="update student set url='$url', lastUpload=now() where regnum='$regnum'";
            if($upl=$link->query($query)){
            /*echo "<br/>Saved to Database successfully";*/
            }
         }
    }
}else{
 echo "File Size Limit Crossed 200 KB Use Picture Size less than 200 KB";
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
<?php
$res=$link->query($pull);
$pics=$res->fetch_assoc();
echo '<div class="avatar-view">';
echo "<img src='upload/$pics[url]' alt='profile picture' /></div>";
//$imageURL = 'upload/'.$pics['url'];
?>
<!--
<div class="avatar_view">
<img src="<?php echo $imageURL; ?>"/></div>

<img src="<?php echo $imageURL; ?>"/>-->
<input type="file" name="file" />
<input type="submit" name="pupload" value="Upload"/>
</form>
                

                                        </div>
                                            <?php 
                                            $name = getuserfield('name');
                                            echo "<h3>$name</h3>   ";
                                            ?>

                                        <ul class="list-unstyled user_data">
                                            <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo getuserfield('city');?>
                                            </li>

                                            <li>
                                                <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                                            </li>

                                        </ul>

                                        <!--<a href="edit.php" class="btn btn-success" name="edit"> <i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                                        <br />-->

                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12">

                                        <div class="profile_title">
                                            <div class="col-md-6">
                                                <h2>Edit User Info</h2>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- start of user-activity-graph -->
                                       <!-- <div id="graph_bar" style="width:100%; height:280px;"></div>-->
                                        <!-- end of user-activity-graph -->

                                        <div class="" >
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                                </div>
                                                <div >
                                                   
<?php
include '../init.php';
//Catch Post Data and Process
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $bio  = $_POST['Bio'];
    $password  = $_POST['password'];
    $city  = $_POST['city'];    

$regnum = getuserfield('regnum');
    //Check if content is present
    if(!empty($email) && !empty($password)){

        //Update DB
        $q = "UPDATE student SET city='$city', password='$password', email='$email', Bio='$bio', lastUpload=now() WHERE regnum='$regnum'";
         $result = mysqli_query($link, $q);
        //Create Debug Message
        if(!$result){
            die("Failed to update database check query string or input values.");
        }
        $level = getuserfield('level');
        if ($level == '100') {
        header('Location: year1.php');
        } else if ($level == '200') {
        header('Location: year2.php');
        } else if ($level == '300') {
        header('Location: year3.php');
        } else if ($level == '400') {
        header('Location: year4.php');
        }
        exit;
    }else{
        //Create Empty Error Message
        $error = "Error! No Changes Made";
    }
}
?>
<form action="" method="POST">
 
   <?php if(isset($error) != NULL):?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>

  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="LGA, State, Country">
  </div>
    

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="<?php echo getuserfield('email');?>">
  </div>    

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter New Password Here">
  </div>

<div class="form-group">
    <label for="Bio">Bio</label>
    <textarea type="text" class="form-control" rows="5" name="Bio" id="bio"></textarea>
  </div>
    <button type="submit" name="submit">Update Info</button>
</form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer content -->
                <!--<footer>
                    <div class="">
                        <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                            <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>-->
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="../js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="../js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="../js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="../js/icheck/icheck.min.js"></script>

    <script src="../js/custom.js"></script>

    <!-- image cropping -->
    <script src="../js/cropping/cropper.min.js"></script>
    <script src="../js/cropping/main.js"></script>

    
    <!-- daterangepicker -->
    <script type="text/javascript" src="../js/moment.min.js"></script>
    <script type="text/javascript" src="../js/datepicker/daterangepicker.js"></script>
    <!-- moris js -->
    <script src="../js/moris/raphael-min.js"></script>
    <script src="../js/moris/morris.js"></script>
    <script>
        $(function () {
            var day_data = [
                {
                    "period": "Jan",
                    "Hours worked": 80
                },
                {
                    "period": "Feb",
                    "Hours worked": 125
                },
                {
                    "period": "Mar",
                    "Hours worked": 176
                },
                {
                    "period": "Apr",
                    "Hours worked": 224
                },
                {
                    "period": "May",
                    "Hours worked": 265
                },
                {
                    "period": "Jun",
                    "Hours worked": 314
                },
                {
                    "period": "Jul",
                    "Hours worked": 347
                },
                {
                    "period": "Aug",
                    "Hours worked": 287
                },
                {
                    "period": "Sep",
                    "Hours worked": 240
                },
                {
                    "period": "Oct",
                    "Hours worked": 211
                }
    ];
            Morris.Bar({
                element: 'graph_bar',
                data: day_data,
                xkey: 'period',
                hideHover: 'auto',
                barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                ykeys: ['Hours worked', 'sorned'],
                labels: ['Hours worked', 'SORN'],
                xLabelAngle: 60
            });
        });
    </script>
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <!-- /datepicker -->
</body>

</html>
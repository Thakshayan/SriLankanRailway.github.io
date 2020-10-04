<?php
ob_start();
session_start();
if (!$_SESSION['userRail']){
    header('location:404.php');
}
include_once 'autoloader.php';
include_once 'includes/Complain.inc.php';
$cmplnssObj = new Complain(null,null,null);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin DashBoard</title>
    <link rel="icon" href="images/logo_title.png">
    <style>
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }

      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

      @-webkit-keyframes sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
          -webkit-transform: scale(1.0);
          opacity: 0;
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
      }
    </style>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/common.js" type="text/javascript"></script>
  </head>
  <body class="app">
    <div id='loader'>
      <div class="spinner"></div>
    </div>

    <script>
      window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
          loader.classList.add('fadeOut');
        }, 300);
      });
    </script>

    <!-- @App Content -->
    <!-- =================================================== -->
    <div>
      <!-- #Left Sidebar ==================== -->
      <div class="sidebar">
        <div class="sidebar-inner">
          <!-- ### $Sidebar Header ### -->
          <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
              <div class="peer peer-greed">
                <a class="sidebar-link td-n" href="home.php">
                  <div class="peers ai-c fxw-nw">
                    <div class="peer">
                      <div class="logo">
                        <img src="images/logo.png" alt="" width="70">
                      </div>
                    </div>
                    <div class="peer peer-greed">
                      <h5 class="lh-1 mB-0 logo-text">Srilanka Railway</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="peer">
                <div class="mobile-toggle sidebar-toggle">
                  <a href="" class="td-n">
                    <i class="ti-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- ### $Sidebar Menu ### -->
          <ul class="sidebar-menu scrollable pos-r">
             <?php
                if($_SESSION['usertype'] == "admin"){
            ?>
            <li class="nav-item mT-30 actived">
              <a class="sidebar-link" href="index.php">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-home"></i>
                </span>
                <span class="title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="addnewstation.php">
                <span class="icon-holder">
                  <i class="c-brown-500 ti-pencil"></i>
                </span>
                <span class="title">Add New Station</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="addNewTrain.php">
                <span class="icon-holder">
                  <i class="c-brown-500 ti-pencil"></i>
                </span>
                <span class="title">Add New Train</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="viewStation.php">
                <span class="icon-holder">
                  <i class="c-deep-orange-500 ti-layout-list-thumb"></i>
                </span>
                <span class="title">View Station</span>
              </a>
            </li>
              
            <li class="nav-item">
              <a class='sidebar-link' href="viewTrains.php">
                <span class="icon-holder">
                  <i class="c-deep-orange-500 ti-layout-list-thumb"></i>
                </span>
                <span class="title">View Trains</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="viewComplain.php">
                <span class="icon-holder">
                  <i class="c-brown-500 ti-email"></i>
                </span>
                <span class="title">View Complains</span>
              </a>
            </li>

            <li class="nav-item">
              <a class='sidebar-link' href="viewSuggestion.php">
                <span class="icon-holder">
                  <i class="c-deep-purple-500 ti-comment-alt"></i>
                </span>
                <span class="title">View Suggestion</span>
              </a>
            </li>
              
            
            <?php
                }
              else{
            ?>
            <li class="nav-item mT-30 actived">
              <a class="sidebar-link" href="index.php">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-home"></i>
                </span>
                <span class="title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="passedTrain.php">
                <span class="icon-holder">
                  <i class="c-purple-500 ti-map"></i>
                </span>
                <span class="title">Change Train Location</span>
              </a>
            </li>
            <?php      
              }
            ?>
          </ul>
        </div>
      </div>

      <!-- #Main ============================ -->
      <div class="page-container">
        <!-- ### $Topbar ### -->
        <div class="header navbar">
          <div class="header-container">
            <ul class="nav-left">
              <li>
                <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                  <i class="ti-menu"></i>
                </a>
              </li>
              <li class="search-input">
                <input class="form-control" type="text" placeholder="Search...">
              </li>
            </ul>
            <ul class="nav-right">
            
            <?php
                if($_SESSION['usertype'] == "admin"){
            ?>
                
              <li class="notifications dropdown">
                <span class="counter bgc-blue" id="ntfyCnt">0</span>
                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                  <i class="ti-email"></i>
                </a>

                <ul class="dropdown-menu">
                  <li class="pX-20 pY-15 bdB">
                    <div class="checkbox checkbox-circle checkbox-info peers ai-c mB-15" style='float:right'>
                      <input type="checkbox" class="peer" onclick="updateSeenCnt()">
                      <label for="inputCall1" class=" peers peer-greed js-sb ai-c">
                        <span class="peer peer-greed">Mark All As Seen</span>
                      </label>
                    </div>
                    <i class="ti-email pR-10"></i>
                    <span class="fsz-sm fw-600 c-grey-900">Complains</span>
                  </li>
     
                  <div id = "viewCmp"></div>


                  <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="viewComplain.php" class="c-grey-600 cH-blue fsz-sm td-n">View All Complains <i class="fs-xs ti-angle-right mL-10"></i></a>
                    </span>
                  </li>
                </ul>
              </li>
            <?php
                }
            ?>
              <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                  <div class="peer mR-10">
                    <img class="w-2r bdrs-50p" src="images/download.jpg" alt="">
                  </div>
                  <div class="peer">
                      <span class="fsz-sm c-grey-900"><b><?php echo $_SESSION['userRailname'];?></b></span>
                  </div>
                </a>
                <ul class="dropdown-menu fsz-sm">
                  <li>
                    <a href="changepass.php" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-settings mR-10"></i>
                      <span>Change Password</span>
                    </a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="logout.php" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-power-off mR-10"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <script type="text/javascript">
            function updateDataCount(){
              $('#ntfyCnt').load('realupdate/getCnt.php');
              $('#viewCmp').load('realupdate/get3Cmp.php');
            }
            updateDataCount(); //set the datacount as soon as the page is loaded
            setInterval( "updateDataCount()", 4000 ); //update the datacount every 4 seconds
        </script>
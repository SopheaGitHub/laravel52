@extends('layouts.app')

@section('content')
<style type="text/css">


/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  /*padding: 20px 0 10px 0;*/
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}

.profile-usertitle .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.social {
    text-align: center;
    padding-top: 20px;
    padding-bottom: 10px;
}

.social .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}

.social .bottom .btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }

.padding-fixed-top {
    height: 60px;
}

</style>
<div class="padding-fixed-top"></div>
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="avatar">
                        <img alt="" src="http://lorempixel.com/100/100/people/9/">
                    </div>
                    <div class="info">
                        <div class="profile-usertitle-name">
                            <a target="_blank" href="http://scripteden.com/">Script Eden</a>
                        </div>
                        <div class="desc">Passionate designer</div>
                        <div class="desc">Curious developer</div>
                        <div class="desc">Tech geek</div>
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <!-- <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div> -->
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                            <i class="fa fa-home"></i>
                            Overview </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                            <i class="fa fa-btn fa-user"></i>
                            About </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                            <i class="fa fa-phone-square"></i>
                            Contact </a>
                        </li>
                        <!-- <li>
                            <a href="#" target="_blank">
                            <i class="glyphicon glyphicon-ok"></i>
                            Tasks </a>
                        </li> -->
                        <!-- <li>
                            <a href="#">
                            <i class="glyphicon glyphicon-flag"></i>
                            Help </a>
                        </li> -->
                    </ul>
                </div>
                <!-- END MENU -->
                <div class="social">
                    <div class="bottom">
                        <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" rel="publisher"
                           href="https://plus.google.com/+ahmshahnuralam">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" rel="publisher"
                           href="https://plus.google.com/shahnuralam">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                            <i class="fa fa-behance"></i>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
               Some user related content goes here...
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

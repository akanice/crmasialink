<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Deviet CRM<?=@$title?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="Mosaddek" name="author" />
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/jquery-ui.min.css')?>" rel="stylesheet"/>
	<link href="<?=base_url('assets/img/favicon.ico')?>" rel="shortcut icon">
    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="<?=base_url('assets/css/light-bootstrap-dashboard.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/chosen.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/admin-custom.css')?>" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="<?=base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/pe-icon-7-stroke.css')?>" rel="stylesheet">

	<script src="<?=base_url('assets/js/jquery.min.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/jquery-ui.min.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/bootstrap.min.js')?>" type="text/javascript"></script>

	<script src="<?=base_url('assets/js/jquery.validate.min.js')?>"></script>
	<script src="<?=base_url('assets/js/moment.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap-datetimepicker.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap-selectpicker.js')?>"></script>
	<script src="<?=base_url('assets/js/bootstrap-checkbox-radio-switch-tags.js')?>"></script>
	<script src="<?=base_url('assets/js/chartist.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap-notify.js')?>"></script>
    <script src="<?=base_url('assets/js/chosen.jquery.min.js')?>"></script>
	<script src="<?=base_url('assets/js/sweetalert2.js')?>"></script>
	<script src="<?=base_url('assets/ckeditor/ckeditor.js')?>"></script>
	<script src="<?=base_url('assets/ckeditor/config.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery-jvectormap.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.bootstrap.wizard.min.js')?>"></script>
	<script src="<?=base_url('assets/js/bootstrap-table.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.datatables.js')?>"></script>
    <script src="<?=base_url('assets/js/fullcalendar.min.js')?>"></script>
	<script src="<?=base_url('assets/js/light-bootstrap-dashboard.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.sharrre.js')?>"></script>
	<script src="<?=base_url('assets/js/angular.min.js')?>"></script>
	<script src="<?=base_url('assets/js/toastr.min.js')?>"></script>
	<script>
		var site_url = '<?=site_url()?>';
		var user_id = '<?=$this->session->userdata('adminid')?>';
		localStorage.setItem("notifications" + user_id, 0);
	</script>
	<script src="<?=base_url('assets/js/ajax_widget.js')?>"></script>
	<script src="<?=base_url('assets/js/notification.js')?>"></script>
	<!-- ie8 fixes -->
    <!--[if lt IE 9]>
       <script src="<?=base_url('assets/js/excanvas.js')?>"></script>
       <script src="<?=base_url('assets/js/respond.js')?>"></script>
    <![endif]-->
    <script type="text/javascript">
        function gotoHref(e){
            window.location.href = e.href;
        }
    </script>
</head>
<body class="hold-transition pace-done skin-black" ng-app="locnuoc_crm">
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?=base_url('/assets/img/full-screen-image-3.jpg')?>">
		<div class="logo">
			<a href="#" class="logo-text">
				CRM Asialink
			</a>
		</div>
		<div class="logo logo-mini">
			<a href="#" class="logo-text">
				ASL
			</a>
		</div>
		
		<div class="sidebar-wrapper ps-container ps-theme-default ps-active-y" id="nml-sidebar">
			<div class="user">
				<div class="photo">
					<img src="<?=base_url('assets/js/default-avatar.jpg')?>">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" class="collapsed">
						akanice
						<b class="caret"></b>
					</a>
					<div class="collapse" id="collapseExample" aria-expanded="false">
						<ul class="nav">
							<li><a href="<?=base_url('admin/profile')?>">My Profile</a></li>
							<li><a href="#">Edit Profile</a></li>
							<li><a href="<?=base_url('admin/logout')?>">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<?php /*if(($this->session->userdata('admingroup') == 1)){*/ $suffix_uri = $this->uri->segment(2); $suffix_uri3 = $this->uri->segment(3)?>
			<ul class="nav">
				<li>
					<a href="<?=base_url('admin')?>">
						<i class="pe-7s-graph"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="<?php if (($suffix_uri == '') or ($suffix_uri == 'users') or ($suffix_uri == 'usergroups') or ($suffix_uri == 'salary') or ($suffix_uri == 'products')) echo 'active';?>">
					<a data-toggle="collapse" href="#componentsExamples">
						<i class="pe-7s-plugin"></i>
						<p>Quản lý chung
						   <b class="caret"></b>
						</p>
					</a>
					<div class="collapse <?php if (($suffix_uri == '') or ($suffix_uri == 'users') or ($suffix_uri == 'usergroups') or ($suffix_uri == 'salary')) echo 'in';?>" id="componentsExamples">
						<ul class="nav">
							<li class="<?php if ($suffix_uri == '') echo 'active'?>"><a href="<?=base_url('admin/')?>">Thống kê sơ bộ</a></li>
							<li class="<?php if ($suffix_uri == 'users') echo 'active'?>"><a href="<?=base_url('admin/users')?>">Quản lý nhân viên</a></li>
							<li class="<?php if ($suffix_uri == 'usergroups') echo 'active'?>"><a href="<?=base_url('admin/usergroups')?>">Quản lý nhóm nhân viên</a></li>
							<!--<li class="<?php if ($suffix_uri == 'salary') echo 'active'?>"><a href="<?=base_url('admin/salary')?>">Quỹ lương</a></li>-->
							<li class="<?php if ($suffix_uri == 'products') echo 'active'?>"><a href="<?=base_url('admin/products')?>">Dữ liệu tour</a></li>
						</ul>
					</div>
				</li>
				
				<li class="<?php if (($suffix_uri == 'customers') or ($suffix_uri == 'qrcode')) echo 'active';?>">
					<a data-toggle="collapse" href="#formsExamples" aria-expanded="false">
						<i class="pe-7s-note2"></i>
						<p>Quản lý khách hàng
						   <b class="caret"></b>
						</p>
					</a>
					<div class="collapse <?php if (($suffix_uri == 'customers') or ($suffix_uri == 'qrcode') or ($suffix_uri == 'orders') or ($suffix_uri == 'accessories')) echo 'in';?>" id="formsExamples">
						<ul class="nav">
							<li class="<?php if ($suffix_uri == 'customers') echo 'active'?>"><a href="<?=base_url('admin/customers')?>">Danh sách khách hàng</a></li>
							<li class="<?php if ($suffix_uri == 'qrcode') echo 'active'?>"><a href="<?=base_url('admin/qrcode')?>">Mã QR Code</a></li>
							<li class="<?php if ($suffix_uri == 'orders') echo 'active'?>"><a href="<?=base_url('admin/orders')?>">Quản lý đơn hàng</a></li>
						</ul>
					</div>
				</li>
				
				<li class="<?php if ($suffix_uri == 'campaign') echo 'active';?>">
					<a data-toggle="collapse" href="#tablesExamples">
						<i class="pe-7s-news-paper"></i>
						<p>Sự kiện - Chiến dịch
						   <b class="caret"></b>
						</p>
					</a>
					<div class="collapse <?php if ($suffix_uri == 'campaign') echo 'in';?>" id="tablesExamples">
						<ul class="nav">
							<li class="<?php if ($suffix_uri == 'campaign') echo 'active'?>"><a href="<?=base_url('admin/campaign')?>">Quản lý sự kiện</a></li>
						</ul>
					</div>
				</li>
				
				<li>
					<a href="#">
						<i class="pe-7s-graph1"></i>
						<p>Khác</p>
					</a>
				</li>
				<li>
					<br><br>
				</li>
			</ul>
			<?php  ?>
		</div>
		<div class="sidebar-background" style="background-image: url('/assets/img/full-screen-image-3.jpg') "></div>
	</div>
	
	<div class="main-panel ps-container ps-theme-default ps-active-y navbarfixed" id="content-scroll">
		<nav class="navbar navbar-default navbar-fixed">
			<div class="container-fluid">
				<div class="navbar-minimize">
					<button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
						<i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
						<i class="fa fa-navicon visible-on-sidebar-mini"></i>
					</button>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"></a>
				</div>
				<div class="collapse navbar-collapse">

					<form class="navbar-form navbar-left navbar-search-form" role="search">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
							<input type="text" value="" class="form-control" placeholder="Search...">
						</div>
					</form>

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?=site_url()?>" target="_blank">
								<i class="fa fa-home"></i>
								<p>Visit site</p>
							</a>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-gavel"></i>
								<p class="hidden-md hidden-lg">
									Actions
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?=base_url('admin/products/add')?>">Tạo sản phẩm mới</a></li>
								<li><a href="<?=base_url('admin/news/add')?>">Tạo bài viết mới</a></li>
								<li><a href="<?=base_url('admin/pages/add')?>">Tạo trang mới</a></li>
								<li class="divider"></li>
								<li><a href="#">Another Action</a></li>
							</ul>
						</li>

						<li class="dropdown" ng-controller="notificationCtrl">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="notification">{{notifications.length}}</span>
								<p class="hidden-md hidden-lg">
									Notifications
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li class="header" ng-if="notifications.length > 0">Bạn có {{notifications.length}} thông báo mới</li>
								<li class="header" ng-if="notifications.length == 0">Chưa có thông báo mới</li>
								<li ng-repeat="notification in notifications">
									<a href="javascript:void()" ng-click="readNotification(notification.id, notification.order_id)">
										<i class="fa fa-users text-aqua"></i> {{notification.from_user.lastname + ' ' + notification.from_user.firstname + ' ' + notification.content}}
									</a>
								</li>
							</ul>
						</li>

						<li class="dropdown dropdown-with-icons">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-list"></i>
								<p class="hidden-md hidden-lg">
									More
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu dropdown-with-icons">
								<li>
									<a href="#">
										<i class="pe-7s-mail"></i> Messages
									</a>
								</li>
								<li>
									<a href="#">
										<i class="pe-7s-help1"></i> Help Center
									</a>
								</li>
								<li>
									<a href="#">
										<i class="pe-7s-tools"></i> Settings
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">
										<i class="pe-7s-lock"></i> Lock Screen
									</a>
								</li>
								<li>
									<a href="<?=base_url('admin/logout')?>" class="text-danger">
										<i class="pe-7s-close-circle"></i>
										Log out
									</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>
<script>
	$('#nml-sidebar').perfectScrollbar();
	$('#content-scroll').perfectScrollbar();
</script>
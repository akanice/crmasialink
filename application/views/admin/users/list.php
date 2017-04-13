<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content clearfix">
						<h3 class="page-title">
							Quản lý nhân viên
						</h3>
						<ul class="breadcrumb pull-left">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li>
								<a href="<?=base_url('admin/users')?>">Quản lý nhân viên</a>
							</li>
							<li class="active">
								Thêm mới nhân viên
							</li>
						</ul>
						<div class="body collapse in pull-right" style="margin: 0 0 15px">
							<a href="<?=site_url('admin/users/add')?>" class="btn btn-info btn-fill btn-wd">Thêm mới</a>
						</div>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
            </div>
        </div>

	<div class="row">
		<?php foreach($group_sale as $item) {?>
			<div class="col-md-4">
				<div class="card card-user">
					<div class="image">
						<img src="../../assets/img/full-screen-image-3.jpg" alt="...">
					</div>
					<div class="content">
						<div class="author">
							<a href="#">
								<img class="avatar border-gray" src="<?=base_url($item->avatar)?>" alt="...">
								<h4 class="title"><?=$item->lastname?> <?=$item->firstname?><br>
									<small><i class="pe-7s-phone"></i> <?=$item->phone?></small>
								</h4><br>
							</a>
						</div>
						<p class="description text-center">
							<a href="<?=base_url('admin/users/viewlog/'.$item->id)?>" class="btn btn-success btn-fill">Xem log</a>  <a href="<?=base_url('admin/users/view/'.$item->id)?>" class="btn btn-primary btn-fill">Thông tin</a>
						</p>
					</div>
					<hr>
					<div class="text-center">
						<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
						<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
						<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
					</div>
				</div>
			</div>
		<?php }?>
		</div>
	</div>
</div>
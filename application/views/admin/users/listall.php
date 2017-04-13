<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<h3 class="page-title">
							Quản lý người dùng
						</h3>
						<ul class="breadcrumb">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li class="active">
								Quản lý người dùng
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
            </div>
        </div>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Danh sách nhân viên</h4>
					</div>
					<div class="content">
						<div class="body collapse in" style="margin: 0 0 15px">
							<a href="<?=site_url('admin/users/add')?>" class="btn btn-info btn-fill btn-wd">Thêm mới</a>
						</div>
						<div class="widget red">
							<div class="widget-title">
								<h4>Danh sách nhân viên</h4>
							</div>
							<div class="widget-body">
								<table class="table table-striped table-bordered" id="sample_1">
									<thead>
										<tr>
											<th>ID</th>
											<th style="text-align:center">Họ</th>
											<th style="text-align:center">Tên</th>
											<th style="text-align:center">Điện thoại</th>
											<th style="text-align:center">Chức vụ</th>
											<th style="text-align:center">Ảnh đại diện</th>
											<th style="text-align:center">Hành động</th>
										</tr>
									</thead>
									<form method="GET" action="<?=@$base?>">
										<tr>
											<td></td>
											<td><input type="text" class="form-control" placeholder="Họ" name="lastname" value="<?=@$lastname?>"></td>
											<td><input type="text" class="form-control" placeholder="Tên" name="firstname" value="<?=@$firstname?>"></td>
											<td></td>
											<td><input type="text" class="form-control" placeholder="Chức vụ" name="group_id" value="<?=@$group_id?>"></td>
											<td></td>
											<td style="text-align: center"><button type="submit" class="btn btn-default">Tìm kiếm</button></td>
										</tr>
									</form>
									<tbody>
									<?php if($list) foreach ($list as $item){ ?>
										<tr class="odd gradeX">
											<td><?=@$item->id?></td>
											<td><?=@$item->lastname?></td>
											<td><?=@$item->firstname?></td>
											<td><?=@$item->phone?></td>
											<td>
												<?php if (($item->group_id == 2) or ($item->group_id == 3) or ($item->group_id == 4)) {echo 'Sales';} else {echo 'Kỹ thuật';} ?>
											</td>
											<td><img src="<?=base_url(@$item->avatar)?>" class="img-circle" width="36px" alt="ảnh đại diện - <?=@$item->firstname?>"></td>
											<td style="text-align: center">
												<a href="<?=@base_url('admin/users/viewlog/'.$item->id)?>" class="btn btn-success btn-fill btn-sm"><i class="fa fa-pencil"></i> Xem log</a>
												<a href="<?=@base_url('admin/users/edit/'.$item->id)?>" class="btn btn-primary btn-fill btn-sm"><i class="fa fa-pencil"></i> Sửa</a>
												<a href="<?=@base_url('admin/users/delete/'.$item->id)?>" class="btn btn-danger btn-fill btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" ><i class="fa fa-trash"></i> Xóa</a>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
							<div class="dataTables_paginate paging_bootstrap">
								<ul class="pagination"><?php echo $page_links?></ul>
							</div>
						</div>
					</div>
				</div><!-- /.box-body -->
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

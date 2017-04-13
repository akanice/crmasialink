<div class="content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<h3 class="page-title">
							Quản lý nhóm thành viên
						</h3>
						<ul class="breadcrumb">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li class="active">
								Quản lý nhóm thành viên
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
					<div class="content">
						<div class="body collapse in" style="margin: 0 0 15px">
							<a href="<?=site_url('admin/usergroups/add')?>" class="btn btn-info btn-fill btn-wd">Thêm mới</a>
						</div>
						<div class="widget red">
							<div class="widget-title">
								<h4>Quản lý nhóm thành viên</h4>
							</div>
							<div class="box-body table-responsive">
								<table id="example2" class="table table-bordered table-hover">
									<thead>
									<tr>
										<th width='5%'>ID</th>
										<th width='60%'>Tên</th>
										<th width='35%'>Hành động</th>
									</tr>
									</thead>
									<form method="GET" action="<?=@$base?>">
										<tr>
											<td width='5%'></td>
											<td width='60%'><input type="text" class="form-control" placeholder="Name" name="name" value="<?=@$name?>"></td>
											<td width='25%' style="text-align: center"><button type="submit" class="btn btn-default">Tìm kiếm</button></td>
										</tr>
									</form>
									<tbody>
									<?php if($list) foreach ($list as $item){ ?>
										<tr class="odd gradeX">
											<td><?=@$item->id?></td>
											<td><?=@$item->name?></td>
											<td style="text-align: center"><a href="<?=@base_url('admin/usergroups/edit/'.$item->id)?>"><i class="fa fa-pencil"></i> Sửa</a> | <a href="<?=@base_url('admin/usergroups/delete/'.$item->id)?>" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash"></i> Xóa</a></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
								<div class="dataTables_paginate paging_bootstrap">
									<ul class="pagination"><?php echo $page_links?></ul>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<h3 class="page-title">
							Quản lý sự kiện
						</h3>
						<ul class="breadcrumb">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li class="active">
								Quản lý sự kiện
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
							<a href="<?=site_url('admin/campaign/add')?>" class="btn btn-info btn-fill btn-wd">Thêm mới</a>
						</div>
						<div class="widget red">
							<div class="widget-title">
								<h4>Quản lý sự kiện</h4>
							</div>
							<div class="widget-body">
								<table id="example2" class="table table-bordered table-hover">
									<thead>
									<tr>
										<th>Id</th>
										<th>Tên</th>
										<th>Ngày bắt đầu</th>
										<th>Ngày kết thúc</th>
										<th>Chi phí dự tính</th>
										<th>Tình trạng</th>
										<th>Hành động</th>
									</tr>
									</thead>
									<form method="GET" action="<?=@$base?>">
										<tr>
											<td></td>
											<td><input type="text" class="form-control" placeholder="Tên" name="name" value="<?=@$name?>"></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td style="text-align: center"><button type="submit" class="btn btn-default">Tìm kiếm</button></td>
										</tr>
									</form>
									<tbody>
									<?php if($list) foreach ($list as $item){ ?>
										<tr class="odd gradeX">
											<td><?=@$item->id?></td>
											<td><?=@$item->name?></td>
											<td><?=date('m/d/Y',@$item->create_date)?></td>
											<td><?=date('m/d/Y',@$item->end_date)?></td>
											<td><?=number_format($item->total_price,0,',','.')?></td>
											<td><?=@$item->status?></td>
											<td style="text-align: center"><a href="<?=@base_url('admin/campaign/edit/'.$item->id)?>"><i class="fa fa-pencil"></i> Sửa</a> | <a href="<?=@base_url('admin/campaign/delete/'.$item->id)?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" ><i class="fa fa-trash"></i> Xóa</a></td>
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
                </div><!-- /.box -->
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

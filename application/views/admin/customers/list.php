<div class="content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<h3 class="page-title">
							Quản lý khách hàng
						</h3>
						<ul class="breadcrumb">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li class="active">
								Quản lý khách hàng
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
							<a href="<?=site_url('admin/customers/add')?>" class="btn btn-info btn-fill btn-wd">Thêm mới</a>
						</div>
						<div class="widget red">
							<div class="widget-title">
								<h4>Quản lý khách hàng</h4>
							</div>
							<div class="widget-body">
								<table id="example2" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th>Họ</th>
											<th>Tên</th>
											<!--<th>Email</th>-->
											<th>Địa chỉ</th>
											<th>Số điện thoại</th>
											<th>Loại</th>
											<th>Hành động</th>
										</tr>
									</thead>
									<form method="GET" action="<?=@$base?>">
										<tr>
											<td></td>
											<td><input type="text" class="form-control" placeholder="Họ" name="lastname" value="<?=@$lastname?>"></td>
											<td><input type="text" class="form-control" placeholder="Tên" name="firstname" value="<?=@$firstname?>"></td>
											<!--<<td><input type="text" class="form-control" placeholder="Email" name="email" value="<?=@$email?>"></td>-->
											<td><input type="text" class="form-control" placeholder="Địa chỉ" name="address" value="<?=@$address?>"></td>
											<td></td>
											<td>
												<select class="form-control" name="type">
													<option value="new">New</option>
													<option value="old">Old</option>
													<option value="lead">Lead</option>
													<option value="caring">Caring</option>
													<option value="reject">Reject</option>
												</select>
											</td>
											<td style="text-align: center"><button type="submit" class="btn btn-default">Tìm kiếm</button></td>
										</tr>
									</form>
									<tbody>
									<?php if($list) foreach ($list as $item){ ?>
										<tr class="odd gradeX">
											<td><?=@$item->id?></td>
											<td><?=@$item->lastname?></td>
											<td><?=@$item->firstname?></td>
											<!--<<td><?=@$item->email?></td>-->
											<td><?=@$item->address?></td>
											<td><?=@$item->phone?></td>
											<td><?=@ucfirst($item->type)?></td>
											<td style="text-align: center">
												<div class="btn-group">
													<button type="button" class="btn btn-primary btn-fill btn-sm">Action</button>
													<button type="button" class="btn btn-primary btn-fill btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="<?=@base_url('admin/customers/edit/'.$item->id)?>"><i class="fa fa-pencil"></i> Sửa</a></li>
														<li><a href="<?=@base_url('admin/customers/delete/'.$item->id)?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" ><i class="fa fa-trash"></i> Xóa</a></li>
														<li><a href="<?=@base_url('admin/orders/add/'.$item->alias)?>"><i class="fa fa-plus"></i> Tạo đơn hàng</a></li>
													</ul>
												</div>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
								<div class="dataTables_paginate paging_bootstrap">
									<ul class="pagination"><?php echo $page_links?></ul>
								</div>
							</div>
						</div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->

<div class="modal fade" id="editQrcodePopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Gán mã QRCode cho khách hàng</h4>
            </div>
			<form class="form-horizontal" method="POST" onsubmit="assignQrCode(event)">
            <div class="modal-body">
                <div class="form-group">
					<label class="col-sm-3 control-label" for="qr_number">Số QRCode</label>
					<div class="col-sm-9">
						<input type="number" name="qr_number" id="qr_number" />
						<input type="hidden" name="customerId" id="customerId" />
					</div>
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Lưu lại</button>
            </div>
            </form>
        </div>
    </div>
</div>

</div><!-- ./wrapper -->

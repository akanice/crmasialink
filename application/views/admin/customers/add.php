<div class="content">
	<div class="container-fluid">
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
							<li>
								<a href="<?=base_url('admin/customers')?>">Quản lý khách hàng</a>
							</li>
							<li class="active">
								Thêm mới khách hàng
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
						<h4 class="title">Tạo mới khách hàng</h4>
					</div>
					<div class="content">
						<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
							<div class="form-group">
								<label class="col-md-2 control-label">Ảnh đại diện </label>
								<div class="col-md-5"><input type="file" class="form-control" name="avatar"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Họ tên</label>
								<div class="col-md-3"><input type="text" class="form-control" name="lastname" placeholder="Họ" required=""/></div>
								<div class="col-md-3"><input type="text" class="form-control" name="firstname" placeholder="Tên" required=""/></div>
								<div class="col-md-4"><input type="text" class="form-control" name="id_card" placeholder="CMND" /></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Tình trạng hôn nhân</label>
								<div class="col-md-6">
									<select class="form-control" name="marital_status">
										<option value="single">Độc thân</option>
										<option value="married">Đã thành hôn</option>
										<option value="divorced">Ly dị</option>
										<option value="seperated">Ly thân</option>
										<option value="widow">Góa phụ / Góa chồng</option>
										<option value="widower">Góa vợ</option>
										<option value="engaged">Đã đính hôn</option>
									</select>
								</div>
								<div class="col-md-4">
									<select class="form-control" name="gender">
										<option value="0">-- Giới tính --</option>
										<option value="male">Nam</option>
										<option value="female">Nữ</option>
										<option value="other">N/A</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Email </label>
								<div class="col-md-4"><input type="email" class="form-control" name="email" placeholder="nguyenvana@gmail.com" required=""/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Ngày sinh </label>
								<div class="col-md-4"><input type="text" class="form-control datepicker" name="birthday" id="birthday"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Số điện thoại </label>
								<div class="col-md-4"><input type="text" class="form-control" name="phone"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Nghề nghiệp</label>
								<div class="col-md-4"><input type="text" class="form-control" name="career"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Địa chỉ thường trú </label>
								<div class="col-md-6"><input type="text" class="form-control" name="address"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Nguyên quán/Hộ khẩu</label>
								<div class="col-md-6"><input type="text" class="form-control" name="address2"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Nơi công tác</label>
								<div class="col-md-6"><input type="text" class="form-control" name="workplace"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Loại khách hàng</label>
								<div class="col-md-4">
									<select class="form-control" name="type">
										<option value="new">Mới</option>
										<option value="old">Cũ</option>
										<option value="lead">Tiềm năng</option>
										<option value="caring">Đang chăm sóc</option>
										<option value="reject">Đã từ chối</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Ghi chú</label>
								<div class="col-md-10"><textarea class="form-control ckeditor" name="note"/></textarea></div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<input type="submit" class="btn btn-primary btn-fill btn-wd" name="submit" value="Lưu lại">
									<a href="javascript:window.history.go(-1);" class="btn btn-default btn-fill">Hủy</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
    </section>
</aside>
</div>
<script type="text/javascript">
$('.datepicker').datetimepicker({
	format: 'DD/MM/YYYY',
	icons: {
		time: "fa fa-clock-o",
		date: "fa fa-calendar",
		up: "fa fa-chevron-up",
		down: "fa fa-chevron-down",
		previous: 'fa fa-chevron-left',
		next: 'fa fa-chevron-right',
		today: 'fa fa-screenshot',
		clear: 'fa fa-trash',
		close: 'fa fa-remove'
	}
});
	$(document).ready(function () {
        $("#birthday").datepicker({ dateFormat: 'd/m/yy' });
        $(".chosen-select").chosen();
    });
</script>

<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<h3 class="page-title">
							Quản lý dữ liệu tour
						</h3>
						<ul class="breadcrumb">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li>
								<a href="<?=base_url('admin/products')?>">Quản lý dữ liệu tour</a>
							</li>
							<li class="active">
								Thêm mới dữ liệu tour
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
						<h4 class="title">Tạo mới dữ liệu tour</h4>
					</div>
					<div class="content">
						<form role="form" method="POST" enctype="multipart/form-data" action="" class="form-horizontal">
							<div class="form-group">
								<label class="col-md-2 control-label">Tên tour *</label>
								<div class="col-md-10"><input type="text" class="form-control" name="name" required=""/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Giá tour</label>
								<div class="col-md-10"><input type="text" class="form-control" name="price" /></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Color</label>
								<div class="col-md-10"><input type="text" class="form-control" name="color" /></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Số ngày</label>
								<div class="col-md-2"><input type="text" class="form-control" name="duration" /></div>
								<div class="col-md-8"><span style="line-height:40px">ngày</span></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Lịch trình</label>
								<div class="col-md-10"><textarea class="ckeditor form-control" name="itinerary"></textarea></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Trải nghiệm đặc biệt</label>
								<div class="col-md-10"><textarea class="ckeditor form-control" name="description"></textarea></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Ảnh đại diện</label>
								<div class="col-md-5"><input type="file" class="form-control" name="image"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Hiển thị</label>
								<div class="col-md-5">
									<select name="display" class="form-control">
										<option value="1" selected>Có</option>
										<option value="0">Không</option>
									</select>
								</div>
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
	</div>
</div>
<script src="<?=  base_url('assets/js/jquery-ui.min.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".chosen-select").chosen();
    });
</script>
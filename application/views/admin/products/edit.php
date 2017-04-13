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
						<h4 class="title">Cập nhật dữ liệu tour</h4>
					</div>
					<div class="content">
						<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
                            <div class="form-group">
								<label class="col-md-2 control-label">Tên tour *</label>
								<div class="col-md-10"><input type="text" class="form-control" name="name" required="" value="<?=@$products->name?>"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Giá tour</label>
								<div class="col-md-10"><input type="text" class="form-control" name="price" value="<?=@$products->price?>"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Color</label>
								<div class="col-md-10"><input type="text" class="form-control" name="color" value="<?=@$products->color?>"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Số ngày</label>
								<div class="col-md-2"><input type="text" class="form-control" name="duration" value="<?=@$products->duration?>"/></div>
								<div class="col-md-8"><span style="line-height:40px">ngày</span></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Lịch trình</label>
								<div class="col-md-10"><textarea class="ckeditor form-control" name="itinerary"><?=@$products->itinerary?>"</textarea></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Trải nghiệm đặc biệt</label>
								<div class="col-md-10"><textarea class="ckeditor form-control" name="description"><?=@$products->description?></textarea></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Ảnh đại diện</label>
								<div class="col-md-5"><input type="file" class="form-control" name="image"/></div>
								<div class="col-md-5"><img src="<?=base_url($products->image)?>" width="80px"></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Hiển thị</label>
								<div class="col-md-5">
									<select name="display" class="form-control">
										<option value="1" <?php if ($products->display == 1) echo 'selected';?>>Có</option>
										<option value="0" <?php if ($products->display == 0) echo 'selected';?>>Không</option>
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
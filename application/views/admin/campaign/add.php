<div class="content">
	<div class="container-fluid">
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
							<li>
								<a href="<?=base_url('admin/campaign')?>">Quản lý sự kiện</a>
							</li>
							<li class="active">
								Thêm mới sự kiện
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
						<h4 class="title">Tạo mới sự kiện</h4>
					</div>
					<div class="content">
						<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
							<div class="form-group">
								<label class="col-md-2 control-label">Tên sự kiện *</label>
								<div class="col-md-8"><input type="text" class="form-control" name="name" required=""/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Ngày bắt đầu</label>
								<div class="col-md-2"><input type="text" class="form-control datepicker" name="create_date" value="<?=date('d/m/Y',time())?>"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Ngày kết thúc</label>
								<div class="col-md-2"><input type="text" class="form-control datepicker" name="end_date"/></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Mô tả</label>
								<div class="col-md-10"><textarea type="text" class="ckeditor form-control" name="description"/></textarea></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Chi phí bao gồm</label>
								<div class="col-md-10"><textarea type="text" class="ckeditor form-control" name="pricing_array"/></textarea></div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Tổng chi phí</label>
								<div class="col-md-10"><input class="form-control" name="total_price"></div>
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
<script type="text/javascript">
    $('#implement_date').datetimepicker({
      language: 'pt-BR',
    });
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
</script>
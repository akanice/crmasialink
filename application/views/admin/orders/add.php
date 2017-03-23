<aside class="right-side">
    <section class="content-header">
        <h1>
            Quản lý đơn hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('admin')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="<?=site_url('admin/orders')?>">Quản lý đơn hàng</a></li>
            <li class="active">Thêm mới đơn hàng</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content" ng-app="locnuoc">
        <div class="row" style="margin-left: -15px">
            <!-- left column -->
			<form role="form" method="POST" action="">
				<div class="col-md-12 col-sm-12">
					<!-- general form elements -->
					<div>
						<p><b>Tên khách hàng: </b><?=$customer->lastname.', '.$customer->firstname?><br>
						<b>Email: </b><?=$customer->email?><br>
						<b>Số điện thoại: </b><?=$customer->phone?></p>
					</div>
					<div class="box box-success box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Thêm mới đơn hàng</h3>
						</div>
						<div class="box-body">
                            <div class="form-group row-fluid">
                                <label class="col-md-2">Gán mã khách hàng</label>
                                <div class="col-md-4">
									<input type="text" class="form-control" name="code_pax" placeholder="EU7020">
								</div>
								<label class="col-md-2">Mã GEG (nếu có)</label>
                                <div class="col-md-4">
									<input type="text" class="form-control" name="geg_code" placeholder="V1050">
								</div>
                            </div>
							<div class="form-group row-fluid">
                                <label class="col-md-2">Nguồn khách</label>
                                <div class="col-md-10">
									<input type="text" class="form-control" name="source" placeholder="khách gọi điện, giới thiệu, GEG,...">
								</div>
                            </div>
                            <div class="form-group row-fluid">
                                <label class="col-md-2">Ghi chú</label>
                                <div class="col-md-10">
									<textarea class="form-control ckeditor" name="note"/>
										<p>- Số khách dự kiến theo đoàn: </p>
										<p>- Yêu cầu thêm</p>
									</textarea>
								</div>
                            </div>
                        </div>
						<div class="box-footer">
							<input type="submit" class="btn btn-primary" name="submit" value="Lưu lại">
							<a href="javascript:window.history.go(-1);" class="btn btn-default">Hủy</a>
						</div>
					</div>
				</div>
			</form>
        </div>
    </section>
</aside>
</div>
<script src="<?=base_url('assets/js/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js')?>"></script>
<link href="<?=base_url('assets/js/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css')?>" rel="stylesheet" />
<script type="text/javascript">
    $('#implement_date').datetimepicker({
      language: 'pt-BR',
    });
</script>


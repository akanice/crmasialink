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
				<div class="col-md-8 col-sm-6">
					<!-- general form elements -->
					<div class="box box-success box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Thêm mới đơn hàng</h3>
						</div>
						<div class="box-body">
                            <div class="form-group row-fluid">
                                <label class="col-md-2">Ngày thực hiện:</label>
                                <div class="col-md-5">
									<div class="input-groups input-append date" id="implement_date">
										<span class="add-on pull-right"><i data-time-icon="fa fa-clock-o" data-date-icon="fa fa-calendar"></i></span>
										<input type="text" data-format="dd/MM/yyyy hh:mm:ss" class="form-control" name="implement_date" required=""/>
									</div>
								</div>
                            </div>
							<div class="form-group row-fluid">
                                <label class="col-md-2">Giảm giá đơn hàng:</label>
                                <div class="col-md-3">
									<input type="number" class="form-control" id="sale_number" name="sale_number"/>
								</div>
								<div class="col-md-2">
									<select name="sale_type" class="form-control">
										<option value="0">% đơn hàng</option>
										<option value="1">ngàn đồng</option>
									</select>
								</div>
                            </div>
                            <div class="form-group row-fluid">
                                <label class="col-md-2">Ghi chú </label>
                                <div class="col-md-10"><textarea class="form-control" name="note"/></textarea></div>
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


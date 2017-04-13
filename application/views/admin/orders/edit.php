<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<h3 class="page-title">
							Quản lý đơn hàng
						</h3>
						<ul class="breadcrumb">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li>
								<a href="<?=base_url('admin/orders')?>">Quản lý đơn hàng</a>
							</li>
							<li class="active">
								Thêm mới đơn hàng
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
						<h4 class="title">Tạo mới đơn hàng</h4>
					</div>
					<div class="content">
						<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
							<div>
								<p><b>Tên khách hàng: </b><?=$customer->lastname.', '.$customer->firstname?> / 
								<b>Email: </b><?=$customer->email?> / 
								<b>Số điện thoại: </b><?=$customer->phone?></p>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Gán mã khách hàng:</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="code_pax" placeholder="KH001" value="<?=@$order->code_pax?>">
								</div>
								<label class="col-sm-2 control-label">Mã GEG (nếu có):</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="geg_code" placeholder="EU7020" value="<?=@$order->geg_code?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Ngày liên hệ:</label>
								<div class="col-sm-4">
									<input type="text" class="form-control datepicker" name="contact_date" placeholder="" value="<?=date('d/m/Y',$order->contact_date);?>">
								</div>
								<label class="col-sm-2 control-label">Nguồn khách:</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="source" placeholder="khách gọi điện, giới thiệu, GEG,..." value="<?=@$order->source?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Mã vé:</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="ticket_code" placeholder="" value="<?=@$order->geg_code?>">
								</div>
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-4">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Tình trạng thanh toán:</label>
								<div class="col-sm-4">
									<select class="form-control" name="payment_status" id="payment_status">
										<option value="owe">Chưa thanh toán</option>
										<option value="deposit">Đặt cọc</option>
										<option value="paid">Đã thanh toán</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">Tiền đặt cọc</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="deposit" id="deposit" disabled>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Yêu cầu thêm:</label>
								<div class="col-sm-10">
									<textarea class="form-control ckeditor" name="extra_requirement"/>
										<p></p>
										<p></p>
									</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Ghi chú:</label>
								<div class="col-sm-10">
									<textarea class="form-control ckeditor" name="note"/>
										<p>- Số khách dự kiến theo đoàn: </p>
									</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<input type="submit" class="btn btn-primary btn-fill btn-wd" name="submit" value="Lưu lại">
									<a href="javascript:window.history.go(-1);" class="btn btn-default">Hủy</a>
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
<script src="<?=base_url('assets/js/jquery.min.js')?>" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$('#payment_status').on('change', function() {
			if (this.value == 'deposit') {
				$('#deposit').prop('disabled', false);
			} else if (this.value == 'owe') {
				$('#deposit').attr('disabled', true);
			} else {}
		})
	});
</script>


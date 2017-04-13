<div class="content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<div class="widget red">
							<h2 class="page-header">
								<i style="" class="pe-7s-plane"></i> Công ty Asialinktravel - deviet.vn
								<small class="pull-right">Ngày tạo: <?=@date('d/m/Y', $order->create_date)?></small>
							</h2>
						</div>
						<div class="row clearfix">
							<div class="col-sm-4 invoice-col">
								Từ:
								<address>
								<strong>Công ty Asialinktravel</strong><br>
								73 Lý Nam Đế<br>
								Hoàn Kiếm, Hà Nội<br>
								Phone: 012 345 6789<br>
								Email: chauau@deviet.vn
								</address>
							</div>
							<div class="col-sm-4 invoice-col">
								<b>Hóa đơn #<?=$order->id?></b><br>
								<br>
								<b>Mã hóa đơn:</b> <?=$order->order_code?><br>
								<b>Ngày tạo:</b> <?=@date('d/m/Y', $order->create_date)?><br>
								<b>Ngày thực hiện:</b> <?=@date('d/m/Y', $order->implement_date)?><br>
								<b>Người tạo đơn:</b> <?=@$staff->lastname?> <?=@$staff->firstname?>
							</div>
							<div class="col-sm-4 invoice-col">
								&nbsp;
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<table class="table table-striped table-invoice">
									<thead>
										<tr>
											<th>ID</th>
											<th>Tên tour</th>
											<th>Mã khách hàng</th>
											<th>Mã GEG</th>
											<th>Phí Visa (vnd)</th>
											<th>Giá tour (vnd)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?=$product_result->id?></td>
											<td><?=$product_result->name?></td>
											<td><?=$order->code_pax?></td>
											<td><?=$order->geg_code?></td>
											<td><?=number_format($product_result->price,0,',','.')?></td>
											<td><?=number_format($product_result->price,0,',','.')?></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
						<br>
						<div class="row">
							<!-- accepted payments column -->
							<div class="col-xs-6">
								<p class="lead">Phương thức thanh toán:</p>
								<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
									Chuyển khoản qua ngân hàng
								</p>
							</div>
							<!-- /.col -->
							<div class="col-xs-6">
								<p class="lead">Ngày chốt đơn: <?=@date('d/m/Y', $order->complete_date)?></p>

								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<th>Thuế VAT</th>
												<td>10% (đã cộng)</td>
											</tr>
											<tr>
												<th>Shipping:</th>
												<td>Free</td>
											</tr>
											<tr>
												<th style="width:50%">Tổng cộng:</th>
												<td><?=number_format($product_result->price,0,',','.')?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /.col -->
						</div>
						<div class="row no-print">
							<div class="col-xs-12">
								<a href="javascript:window.print()" target="_blank" class="btn btn-fill btn-default"><i class="fa fa-print"></i> Print</a>
								<button type="button" class="btn btn-success btn-fill pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
								<button type="button" class="btn btn-primary btn-fill pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<a href="javascript:window.history.go(-1);" target="_blank" class="pull-right btn btn-fill btn-info btn-wd"><i class="fa fa-arrow-left"></i> Quay lại</a>
			</div>
		</div>
	</div>
</div>
<!--
<script src="<?=  base_url('assets/js/jquery-ui.min.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#implement_date").datepicker({ dateFormat: 'd/m/yy' });
    });
</script>
-->

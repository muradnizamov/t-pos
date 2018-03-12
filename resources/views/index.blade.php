@extends('layouts.app')

@section('body')
<div id="content">
	<div class="row">
		<div class="col-md-3">
			<div class=" ">				
			<p style="color: #c12323;font-weight: bold;">@lang('custom.docType'): <span id="docType">@lang('custom.retailSalesFee') </span></p>
			<p style="color: #c12323;font-weight: bold;">@lang('custom.docStatus'): <span id="docStatus">@lang('custom.closed') </span></p>
			<h2><span id="appStatus" data-status="retail"> @lang('custom.retail')  </span> <span id="productQuantity" class="">1</span>X</h2>
				<div class="col-sm-10">
					<input type="text"  autofocus  id="quantity" class="barcode" placeholder="@lang('custom.barcode')">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class=" ">
				<label for="customer" class="col-md-2 col-form-label">@lang('custom.customer')</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="customer" placeholder="@lang('custom.customer')">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-2">@lang('custom.cardNumber')</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="cardNumber" placeholder="@lang('custom.cardNumber')">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-2">@lang('custom.bonus')</label>
				<div class="col-md-5">
					<input disabled type="text" class="form-control" id="assignedBonus" placeholder="@lang('custom.bonus')">  
				</div>
				<div class="col-md-5">
					<input disabled type="text" class="form-control" id="assignedBonusMoneyEq" placeholder="@lang('custom.bonusEq')">
				</div>
			</div>
		</div>
	</div>
	<div class="row table-row">
		<div class="col-md-9 table-md">
			<div id="product-list" class="ps-container" style="border:1px solid #a0a0a0;border-left:none; background: #fff;height: 316px; overflow:scroll; min-height: 278px;margin-top: 20px;">
                <table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable1" style="margin-bottom: 0px; padding: 0px;">
                    <thead class="tableFloatingHeaderOriginal">
                        <tr style=" background: #f9f9f9;">
                            <th >@lang('custom.delivery')</th>
                            <th >@lang('custom.op') </th>
                            <th >@lang('custom.barcode')</th>
                            <th >@lang('custom.matDesc')</th>                           
                            <th >@lang('custom.unit')</th>                           
                            <th >@lang('custom.unitPrice')</th>                           
                            <th >Adet</th>                           
                            <th >%</th>                           
                            <th >@lang('custom.amount')</th>                           
                            <th >@lang('custom.sellerCode')</th>                           
                            <th >@lang('custom.serialNumber')</th>                           
                            <th >@lang('custom.returnCode')</th>   
                        </tr>
                    </thead>                    
                    <tbody style="">
                    	@foreach($basket as $b)                    		
                    	 <tr data-id="{{$b->sp_no}}" product-id="{{$b->sp_urunkod}}">
                    		<td style="text-align: center;"><input type="checkbox" checked=""></td>
                    		<td></td>
                    		<td>{{ $b->sp_urunkod }}</td>
                    		<td>{{ $b->sp_urunadi }}</td>
                    		<td>{{ $b->sp_birim }}</td>
                    		<td>{{ $b->sp_urunfiyat }}</td>
                    		<td>{{ $b->sp_adet }}</td>
                    		<td>{{ $b->sp_kdv }}</td>
                    		<td>{{ $b->sp_tutar }}</td>
                    		<td></td>
                    		<td></td>
                    		<td></td>
                    	</tr>
                    	@endforeach                    	
                    </tbody>
                </table>
                <div style="clear:both;"></div>

            </div>
		</div>
		<div class="col-md-3" style="background: #fff;margin-top: -120px">
			<h2>Toplamlar</h2>
			<div class="">
				<label for="" class="col-md-4">@lang('custom.brutTotal')</label>
				<div class="col-md-8">
					<input disabled type="text" class="form-control" id="brutTotal" placeholder="@lang('custom.brutTotal')">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">@lang('custom.total')</label>
				<div class="col-md-8">
					<input disabled  type="text" class="form-control" id="subtotal" placeholder="@lang('custom.total')">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">@lang('custom.discount')</label>
				<div class="col-md-8">
					<input disabled  type="text" class="form-control" id="discount" placeholder="@lang('custom.discount')">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">@lang('custom.vat')</label>
				<div class="col-md-8">
					<input disabled type="text" class="form-control" id="tax" placeholder="@lang('custom.vat')">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">@lang('custom.rounding')</label>
				<div class="col-md-8">
					<input disabled type="text" class="form-control" id="rounding"" placeholder="@lang('custom.rounding')">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">@lang('custom.amount')</label>
				<div class="col-md-8">
					<input disabled type="text" class="form-control" id="total"" placeholder="@lang('custom.amount')">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">@lang('custom.payed')</label>
				<div class="col-md-8">
					<input disabled type="text" class="form-control" id="payed"" placeholder="@lang('custom.payed')">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">@lang('custom.change')</label>
				<div class="col-md-8">
					<input disabled type="text" class="form-control" id="change" placeholder="@lang('custom.change')"">
				</div>
			</div>
			<div class="">
				<label for=""> @lang('custom.messageFromCenter')</label>				
				<textarea disabled class="form-control" style="resize:none"></textarea>				
			</div>
		</div>
	</div>
	<div class="row" style="background: #f3f3f3;padding-top: 8px;">
		<div class="col-md-4 frequentlyUsedButtons">
			<button class="btn btn-default" data-barcode="39435483" data-name="PHILIPS HTS 484">PHILIPS HTS 484</button>
			<button class="btn btn-default" data-barcode="39435483" data-name="Remington 564">Remington HTS 484</button>
			<button class="btn btn-default" data-barcode="39435483" data-name="PHILIPS HTS 484">PHILIPS HTS 484</button>
			<button class="btn btn-default" data-barcode="39435483" data-name="PHILIPS HTS 484">PHILIPS HTS 484</button>
			<button class="btn btn-default" data-barcode="39435483" data-name="PHILIPS HTS 484">PHILIPS HTS 484</button>
			<button class="btn btn-default">ÜRÜN 2</button>
			<button class="btn btn-default">ÜRÜN 1</button>	
			<button class="btn btn-default">ÜRÜN 1</button>
			<button class="btn btn-default">ÜRÜN 1</button>
			<button class="btn btn-default">ÜRÜN 1</button>
			<button class="btn btn-default">ÜRÜN 1</button>
			<button class="btn btn-default">ÜRÜN 1</button>
			<button class="btn btn-default">ÜRÜN 1</button>
			<button class="btn btn-default">ÜRÜN 1</button>
			<button class="btn btn-default">ÜRÜN 1</button>
			<button class="btn btn-default btn-blue">0-20</button>
			<button class="btn btn-default btn-blue">21-40</button>
			<button class="btn btn-default btn-blue">41-60</button>
			<button class="btn btn-default btn-blue">61-80</button>
			<button class="btn btn-default btn-blue">81-100</button>
		</div>
		<div class="col-md-4 processButtons">
			<div class="">	
				<button class="btn btn-default" id="openProductModal" >@lang('custom.product') </button>
				<button class="btn btn-default" id="openCurrentModal" >@lang('custom.current')</button>
				<button class="btn btn-default" data-toggle="modal" data-target="#menuModal">@lang('custom.menu')</button>
				<button class="btn btn-default">@lang('custom.delPayments')</button>
			</div>
			<div class="">
				<button class="btn btn-default" id="cancelProduct">@lang('custom.cancelProduct') </button>
				<button class="btn btn-default" id="cancelLastProduct">@lang('custom.cancelLastProduct')</button>
				<button class="btn btn-default">@lang('custom.docType') </button>
				<button class="btn btn-default"> @lang('custom.serialEntry') </button>
			</div>
			<div class="">
				<button class="btn btn-default">@lang('custom.discount')</button>
				<button class="btn btn-default">@lang('custom.fastReturn')</button>
				<button class="btn btn-default">@lang('custom.returnCode')</button>
			</div>
			<div class="col-md-5" style="padding-right:0 !important;padding-left: 0 !important;">
				<button class="btn btn-default">@lang('custom.cancel')</button>
				<button class="btn btn-default" id="productDetails">@lang('custom.prodDesc')</button>			
				<button class="btn btn-default">@lang('custom.exit')</button>
				<button class="btn btn-default" data-toggle="modal" href="#sellerModal" >@lang('custom.seller')</button><br/>
			</div>
			<div class="col-md-4" style="padding-right:0 !important;padding-left: 0 !important;">	
				<button class="btn btn-default btn-enter">Enter</button>
			</div>
		</div>
		<div class="col-md-3 countButtons">
			<div>
				<button data-count="00" class="btn btn-default">00</button>
				<button data-count="000" class="btn btn-default">000</button>
				<button data-count="adet" class="btn btn-default">@lang('custom.un')</button>
				<button data-count="del" class="btn btn-default">Del</button><br/>
			</div>
			<div>					
				<button data-count="7" class="btn btn-default">7</button>
				<button data-count="8" class="btn btn-default">8</button>
				<button data-count="9" class="btn btn-default">9</button><br/>
			</div>
			<div>					
				<button data-count="4" class="btn btn-default">4</button>
				<button data-count="5" class="btn btn-default">5</button>
				<button data-count="6" class="btn btn-default">6</button><br/>
			</div>
			<div>				
				<button data-count="1" class="btn btn-default">1</button>
				<button data-count="2" class="btn btn-default">2</button>
				<button data-count="3" class="btn btn-default">3</button><br/>
			</div>
			<div>
				
			<button data-count="0" class="btn btn-default">0</button>
			<button data-count="," class="btn btn-default">,</button>
			</div>
		</div>	
		<div class="col-md-1 processButtons processButtons2">
			<button>  @lang('custom.subtotal') </button>
			<button class="btn" data-toggle="modal" href="#docPaymentModal" > @lang('custom.docPayment')</button>
			<button class="btn" data-toggle="modal" href="#creditCardPaymentModal"> @lang('custom.creditCard')</button>
			<button id="cashPayment" class="btn"> @lang('custom.cash') </button>
			<button id="endPayment"> @lang('custom.submit')</button>
		</div>
	</div>
</div>
<footer>
	<p>
		<span>Cowsel POS v1.0.0 | @lang('custom.connection'): <span id="isConnected">yok</span></span>
		<span class="pull-right"> @lang('custom.retailStatus'): <span id="retailStatus">Satışa hazır</span></span>
	</p>
</footer>
@endsection

@section('scripts')
$('#cashPayment').on('click', function(){
	//ajax
    $('#posTable1 tbody').append('<tr class="orangeTr"><td></td><td></td><td></td><td>Nakit Ödenen</td><td></td><td></td><td></td><td></td><td>5480.30</td><td></td><td></td></tr>');
});

$('#endPayment').on('click', function(){
	//ajax
    $('#posTable1 tbody').append('<tr><td></td><td></td><td></td><td style="color:red; font-weight: bold">Satış sonlandı</td><td></td><td></td><td></td><td></td><td>5480.30</td><td></td><td></td></tr>');
});

$('.frequentlyUsedButtons .btn').on('click', function(){
	var name = $(this).attr('data-name'),
		barcode = $(this).attr('data-barcode');
		//ajax
		$('#posTable1 tbody').append('<tr><td style="text-align: center"><input type="checkbox"></td><td>Satış</td><td>'+barcode+'</td><td>'+name+'</td><td></td><td></td><td></td><td></td><td>5480.30</td><td></td><td></td></tr>');
});
@endsection

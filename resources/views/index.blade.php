@extends('layouts.app')

@section('body')
<div id="content">
	<div class="row">
		<div class="col-md-3">
			<div class=" ">				
			<p style="color: #c12323;font-weight: bold;">Belge tipi: <span id="docType">Perakende Satış Faturası</span></p>
			<p style="color: #c12323;font-weight: bold;">Belge durumu: <span id="docStatus">Kapalı</span></p>
			<h2>Satış <span id="productQuantity" class="">1</span>X</h2>
				<div class="col-sm-10">
					<input type="text" tabindex="1" id="quantity" class="barcode form-control" placeholder="Ürün barkod">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class=" ">
				<label for="customer" class="col-md-2 col-form-label">Müşteri</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="customer" placeholder="Müşteri">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-2">Kart No</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="cardNumber" placeholder="Kart No">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-2">Puan</label>
				<div class="col-md-5">
					<input type="text" class="form-control" id="assignedBonus" placeholder="Puan">  
				</div>
				<div class="col-md-5">
					<input type="text" class="form-control" id="assignedBonusMoneyEq" placeholder="Puan karşılığı">
				</div>
			</div>
		</div>
	</div>
	<div class="row table-row">
		<div class="col-md-9 table-md">
			<div id="product-list" class="ps-container" style="border:1px solid #a0a0a0;border-left:none; background: #fff;height: 316px; overflow:scroll; min-height: 278px;margin-top: 20px;">
                <table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable1" style="margin-bottom: 0px; padding: 0px;">
                    <thead class="tableFloatingHeaderOriginal">
                        <tr>
                            <th >Teslim</th>
                            <th >İşlem</th>
                            <th >Barkod</th>
                            <th >Malzeme Açıklaması</th>                           
                            <th >Birim</th>                           
                            <th >Birim fiyat</th>                           
                            <th >Birim fiyat</th>                           
                            <th >Tutar</th>                           
                            <th >Satıcı kodu</th>                           
                            <th >Seri No</th>                           
                            <th >İade Kodu</th>                           
                        </tr>
                    </thead>                    
                    <tbody >
                    	 <tr data-id="1" product-id="45">
                    		<td style="text-align: center;"><input type="checkbox" ></td>
                    		<td>FFF</td>
                    		<td>FFF</td>
                    		<td>FFF</td>
                    		<td>FFF</td>
                    		<td>FFF</td>
                    		<td>FFF</td>
                    		<td>FFF</td>
                    		<td>FFF</td>
                    		<td>FFF</td>
                    		<td>FFF</td>
                    	</tr>
                    	<tr data-id="2" product-id="46">
                    		<td style="text-align: center;"><input type="checkbox"></td>
                    		<td>AAA</td>
                    		<td>AAA</td>
                    		<td>AAA</td>
                    		<td>AAA</td>
                    		<td>FFF</td>
                    		<td>AAA</td>
                    		<td>AAA</td>
                    		<td>AAA</td>
                    		<td>AAA</td>
                    		<td>AAA</td>
                    	</tr>
                    </tbody>
                </table>
                <div style="clear:both;"></div>
         {{--        <div class="ps-scrollbar-x-rail" style="width: 604px; display: none; left: 0px; bottom: 3px;">
                    <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps-scrollbar-y-rail" style="top: 0px; height: 589px; display: none; right: 3px;">
                    <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                </div> --}}
            </div>
		</div>
		<div class="col-md-3" style="background: #fff;margin-top: -120px">
			<h2>Toplamlar</h2>
			<div class="">
				<label for="" class="col-md-4">Brüt Top</label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="brutTotal" placeholder="Brüt Top">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">Toplam</label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="subtotal" placeholder="Toplam">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">İndirim</label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="discount" placeholder="İndirim">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">KDV</label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="tax" placeholder="KDV">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">Yuvarlama</label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="rounding"" placeholder="Yuvarlama">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">Tutar</label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="total"" placeholder="Tutar">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">Ödenen</label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="payed"" placeholder="Ödenen">
				</div>
			</div>
			<div class="">
				<label for="" class="col-md-4">Para üstü</label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="change" placeholder="Para üstü">
				</div>
			</div>
			<div class="">
				<label for="" >Merkezden gelen mesaj</label>				
				<textarea class="form-control" style="resize:none"></textarea>				
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
				<button class="btn btn-default" href="{{ route('product_list') }}">Ürün </button>
				<button class="btn btn-default" href="{{ route('currents') }}">Cari</button>
				<button class="btn btn-default" data-toggle="modal" data-target="#menuModal">Menü</button>
				<button class="btn btn-default">Ödemeleri sil</button>
			</div>
			<div class="">
				<button class="btn btn-default" id="cancelProduct">Ürün iptal</button>
				<button class="btn btn-default" id="cancelLastProduct">Son ürün iptal</button>
				<button class="btn btn-default">Belge tipi</button>
				<button class="btn btn-default">Serino Girişi</button>
			</div>
			<div class="">
				<button class="btn btn-default">İndirim</button>
				<button class="btn btn-default">Hızlı iade</button>
				<button class="btn btn-default">İade özelkod</button>
			</div>
			<div class="col-md-5" style="padding-right:0 !important;padding-left: 0 !important;">
				<button class="btn btn-default">Vazgeç</button>
				<button class="btn btn-default" id="productDetails">Ürün Detayı</button>			
				<button class="btn btn-default">Çıkış</button>
				<button class="btn btn-default" id="chooseSeller" >Satıcı</button><br/>
			</div>
			<div class="col-md-4" style="padding-right:0 !important;padding-left: 0 !important;">	
				<button class="btn btn-default btn-enter">Enter</button>
			</div>
		</div>
		<div class="col-md-3 countButtons">
			<div>
				<button data-count="00" class="btn btn-default">00</button>
				<button data-count="000" class="btn btn-default">000</button>
				<button data-count="adet" class="btn btn-default">Adet</button>
				<button data-count="del" class="btn btn-default"><i class="fa  fa-arrow-left"></i></button><br/>
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
			<button> Ara toplam</button>
			<button class="btn" href="{{ route('doc_payment') }}"> Evrakla ödeme</button>
			<button class="btn" href="{{ route('credit_card')}}"> Kredi kartı</button>
			<button id="cashPayment" class="btn"> Nakit</button>
			<button id="endPayment"> Kaydet</button>
		</div>
	</div>
</div>
<footer>
	<p>
		<span>Cowsel POS v1.0.0 |  Bağlantı <span id="isConnected">yok</span></span>
		<span class="pull-right">Satış durumu: <span id="retailStatus">Satışa hazır</span></span>
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
		console.log(name);
		//ajax
		$('#posTable1 tbody').append('<tr><td style="text-align: center"><input type="checkbox"></td><td>Satış</td><td>'+barcode+'</td><td>'+name+'</td><td></td><td></td><td></td><td></td><td>5480.30</td><td></td><td></td></tr>');
});
@endsection

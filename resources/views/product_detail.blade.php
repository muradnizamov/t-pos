@extends('layouts.app')

@section('body')
<div id="content" class="product">
	<div class="row" style="text-align: center"><h1> Ürün detayı</h1></div>
	<div class="row">
		<div class="col-md-3 col-md-offset-3" style="border: 1px solid #ddd;position: relative;margin-right: 10px">
			<span style="position: absolute;top:-10px; background-color: #fff">Resim 1</span>
			<div class="image"><img src="https://akakce.cubecdn.net/vestel/vestel-puzzle-nf655-x-a-gardrop-tipi-no-frost-buzdolabi-x.jpg" alt="" class="" style="width: 100%"></div>
		</div>
		<div class="col-md-3" style="border: 1px solid #ddd;">
			<span style="position: absolute;top:-10px; background-color: #fff">Resim 2</span>
			<div class="image"><img src="https://cdn.tekzen.com.tr/images/product/maytag/2479720/maytag-mtv-7097-a-cift-kapili-no-frost-buzdolabi_1000x1000.jpg" alt="" class="" style="width: 100%"></div>
		</div>
		<div class="col-md-1 processButtons">
			<button class="btn btn-default" style="margin:0 auto;" href="{{route('product_list')}}">Kapat</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5" style="border-top: 1px solid #ddd;position: relative;margin-top: 20px">
			<span style="position: absolute;top:-10px; background-color: #fff">Detaylı bilgi</span>
			<div class="productDetails" id="productDetails" >
				<ul>
					<li>Kapasite</li>
					<li>487 Brwt toplam</li>
					<li>140 Litre Brwt dondurucu</li>
					<li>3 Raf</li>
					<li>LED 3W x 1adet</li>
					<li>Performans</li>
					<li>4 Yildiz</li>
					<li>No frost Mevcut</li>
					<li>Kapasite</li>
					<li>487 Brwt toplam</li>
					<li>140 Litre Brwt dondurucu</li>
					<li>3 Raf</li>
					<li>LED 3W x 1adet</li>
					<li>Performans</li>
					<li>4 Yildiz</li>
					<li>No frost Mevcut</li>
					<li>Kapasite</li>
					<li>487 Brwt toplam</li>
					<li>140 Litre Brwt dondurucu</li>
					<li>3 Raf</li>
					<li>LED 3W x 1adet</li>
					<li>Performans</li>
					<li>4 Yildiz</li>
					<li>No frost Mevcut</li>
					<li>Kapasite</li>
					<li>487 Brwt toplam</li>
					<li>140 Litre Brwt dondurucu</li>
					<li>3 Raf</li>
					<li>LED 3W x 1adet</li>
					<li>Performans</li>
					<li>4 Yildiz</li>
					<li>No frost Mevcut</li>
				</ul>
			</div>
		</div>
		<div class="col-md-7" style="border-top: 1px solid #ddd;position: relative;margin-top: 20px">
			<span style="position: absolute;top:-10px; background-color: #fff">Alternatifler</span>
			<div class="" style=" max-height: 350px;overflow: scroll">				
			 	<table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable1" style="margin-bottom: 0px; padding: 0px;">
	                <thead class="tableFloatingHeaderOriginal">
	                    <tr>
	                        <th>Barkod</th>
	                        <th>Malzeme kodu</th>
	                        <th>Malzeme açıklaması</th>                                                  
	                    </tr>
	                </thead>                    
	                <tbody class="ui-sortable">
	                	 <tr>                		
	                		<td>FFF</td>
	                		<td>FFF</td>
	                		<td>FFF</td>                
	                	</tr>
	                	 <tr>                		
	                		<td>AAA</td>
	                		<td>AAA</td>
	                		<td>AAA</td>                		
	                	</tr>
	                </tbody>
	            </table>
			</div>
		</div>
	</div>
</div>
@endsection
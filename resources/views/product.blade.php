@extends('layouts.app')

@section('body')
<div id="content">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group ">
				<label  class="col-md-3">Barkod</label>
				<div class="col-md-9">
					<input type="text" class="form-control" data-column="0" id="barcodeProduct" placeholder="Barkod">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3">Malzeme açıklaması</label>
				<div class="col-md-9">
					<input type="text" class="form-control" data-column="2" id="facilityDescProduct" placeholder="Malzeme açıklaması">  
				</div>			
			</div>
			<div class="form-group">
				<label class="col-md-3">Malzeme kodu</label>
				<div class="col-md-9">
					<input type="text" class="form-control" data-column="1" id="facilityCodeProduct" placeholder="Malzeme kodu">
				</div>
			</div>			
		</div>
		<div class="col-md-3">
			<div class="form-group ">
				<label class="col-md-3">Özelkod</label>
				<div class="col-md-9">
					<input type="text" class="form-control" data-column="7" id="specialCodeProduct" placeholder="Özelkod">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3">Özelkod2</label>
				<div class="col-md-9">
					<input type="text" class="form-control" data-column="8" id="specialCode2Product" placeholder="Özelkod2">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3">Özelkod3</label>
				<div class="col-md-9">
					<input type="text" class="form-control col-md-5"  data-column="9" id="specialCode3Product" placeholder="Özelkod3">  
				</div>			
			</div>	
		</div>
		<div class="col-md-3">
			<div class="form-group ">
				<label class="col-md-3 col-form-label">Özelkod4</label>
				<div class="col-md-9">
					<input type="text" class="form-control" data-column="10" id="specialCode4Product" placeholder="Özelkod4">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3">Özelkod5</label>
				<div class="col-md-9">
					<input type="text" class="form-control" data-column="11" id="specialCode5Product" placeholder="Özelkod5">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div id="product-list" class="ps-container" style="background:#fff;height: 440px;overflow:scroll; min-height: 278px;margin-top: 20px;">
                <table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable3" style="margin-bottom: 0px; padding: 0px;">
                    <thead class="tableFloatingHeaderOriginal">
                        <tr>
                        	<th></th>
                            <th>Barkod</th>
                            <th>Malzeme kodu</th>
                            <th style="width: 500px;">Malzeme açıklaması</th>
                            <th>Satış Fiyatı</th>                           
                            <th>KDV</th>
                            <th>Dep.No</th>
                            <th>Birim</th>
                            <th>Özelkodu</th>
                            <th>Özelkodu2</th>
                            <th>Özelkodu3</th>
                            <th>Özelkodu4</th>
                            <th>Özelkodu5</th>
                        </tr>
                    </thead>                    
                    <tbody class="ui-sortable">
                    	<tr data-id="1">
                    		<td><input type="checkbox" name="editor-active" class="editor-active"></td>
                    		<td>0000017</td>
                    		<td>0000000000054345</td>
                    		<td>SAMSUNG RT54QBP</td>
                    		<td>104.58</td>
                    		<td>8</td>                    	
                    		<td>04</td>                    	
                    		<td>ADET</td>                    	
                    		<td></td>                    	
                    		<td>9999999999999999999</td>                    	
                    		<td>9999999999999999999</td>                    	
                    		<td>9999999999999999999</td>                    	
                    		<td>9999999999999999999</td>                    	
                    	</tr>
                    	<tr data-id="2">
                    		<td><input type="checkbox" name="editor-active"  class="editor-active"></td>
                    		<td>0000020</td>
                    		<td>0000000000054345</td>
                    		<td>SAMSUNG G7766D</td>
                    		<td>6</td>
                    		<td>8</td>                    	
                    		<td>04</td>                    	
                    		<td>ADET</td>                    	
                    		<td></td>                    	
                    		<td>9999999999999999999</td>                    	
                    		<td>9999999999999999999</td>                    	
                    		<td>9999999999999999999</td>                    	
                    		<td>9999999999999999999</td>                    	
                    	</tr>
                    	 <tr data-id="3">
                    	 	<td><input type="checkbox" name="editor-active"  class="editor-active"></td>
                    		<td>0000018</td>
                    		<td>0000000000054345</td>
                    		<td>PHILIPS G7766D</td>
                    		<td>99.99</td>
                    		<td>8</td>                    	
                    		<td>04</td>                    	
                    		<td>ADET</td>                    	
                    		<td></td>                    	
                    		<td>9999999999999999999</td>                    	
                    		<td>9999999999999999999</td>                    	
                    		<td>9999999999999999999</td>                    	
                    		<td>9999999999999999999</td>                    	
                    	</tr>
                   
                    </tbody>
                </table>
                <div style="clear:both;"></div>
          {{--       <div class="ps-scrollbar-x-rail" style="width: 604px; display: block; left: 0px; bottom: 3px;">
                    <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps-scrollbar-y-rail" style="top: 0px; height: 589px; display: none; right: 3px;">
                    <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                </div> --}}
            </div>
		</div>
		<div class="col-md-2 processButtons processButtons4" style="padding-left: 20px !important;">		
			<button class="btn btn-default" id="addToBasket">Tamam</button>
			<button class="btn btn-default" href="{{ url('/')}}">Vazgeç</button>
			<button class="btn btn-default" id="productDetails" >Detay</button> {{--js--}}
			<button class="btn btn-default" id="productBalance" >Bakiye sorgula</button>
			<button class="btn btn-default" id="cleanCurrent">Temizle</button>
		</div>
	</div>
</div>
@endsection

@section('scripts')
$('.kybrd').mlKeyboard({layout: 'tr_TR',  is_hidden:false});

$('#addToBasket').on('click', function(){
    var productId = $('#posTable3 tbody tr.selected').attr('data-id');

    if(productId!==undefined)
    {  
        $.ajax({
            type: "POST",
            url: '/add_product_to_basket',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: { 'productId':productId },
            success: function (data) {
                data = JSON.parse(data); 
               if(data['status']===true)
               {
                window.location = '{{ route('main')}}';
               }
            },
            error: function (data, textStatus, errorThrown) {
                console.log(data);
            },
        });
    }
    else
    {
        $('#warningModal .modal-body').text('Ürün seçmediniz');
        $('#warningModal').modal('show');
    }
});

@endsection
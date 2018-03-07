@extends('layouts.app')

@section('body')
<div id="content">
	<div class="row">		
		<div class="col-md-8">
			<div class="form-group ">
				<label for="customer" class="col-md-2 col-form-label">Müşteri</label>
				<div class="col-md-4" data-column="1">
					<input type="text" class="form-control column_filter" id="customerCurrent" placeholder="Müşteri">
				</div>
				<label for="customer" class="col-md-2 col-form-label">Fatura belge No</label>
				<div class="col-sm-4" data-column="">
					<input type="text" class="form-control column_filter" id="billCurrent" placeholder="Fatura">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Kart No</label>
				<div class="col-sm-10" data-column="0">
					<input type="text" class="form-control column_filter" id="cardNumberCustomer" placeholder="Kart No">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Cep Telefonu</label>
				<div class="col-sm-10" data-column="4">
					<input type="text" class="form-control column_filter" id="telephoneCustomer" placeholder="Kart No">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div id="product-list" class="ps-container" style="height: 440px;overflow:scroll; min-height: 278px; margin-top: 20px;">
                <table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable" style="margin-bottom: 0px; padding: 0px;">
                    <thead class="tableFloatingHeaderOriginal">
                        <tr>
                            <th>Kodu</th>
                            <th>Adı</th>
                            <th>Soyadı</th>
                            <th>Adresi</th>                           
                            <th>Cep telefonu</th>
                        </tr>
                    </thead>                  
                    <tbody class="ui-sortable">
                    	@foreach ($currents as $current)
                    	<tr data-id="1">
                    		<td id="td1">FFF</td>
                    		<td id="td2">{{ $current->cr_adi }}</td>
                    		<td id="td3">FFF</td>
                    		<td id="td4">FFF</td>
                    		<td id="td5">FFF</td>                    	
                    	</tr>
                    	<tr data-id="2">
                    		<td id="">AAA</td>
                    		<td id="">AAA</td>
                    		<td id="">AAA</td>
                    		<td id="">AAA</td>
                    		<td id="">AAA</td>
                    	@endforeach              	
                    	</tr>
                    </tbody>
                </table>
                <div style="clear:both;"></div>
                <div class="ps-scrollbar-x-rail" style="width: 604px; display: none; left: 0px; bottom: 3px;">
                    <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps-scrollbar-y-rail" style="top: 0px; height: 589px; display: none; right: 3px;">
                    <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                </div>
            </div>
		</div>
		<div class="col-md-2 processButtons processButtons3">		
			<button class="btn btn-default" id="tamam">Tamam</button>
			<button class="btn btn-default">Vazgeç</button>
			<button class="btn btn-default">Cari iptal</button>
			<button class="btn btn-default" id="cleanCurrent">Temizle</button>
			<button class="btn btn-default" href="{{ route('currents.new')}}">Yeni cari</button>
		</div>
	</div>
</div>


@endsection

<script>

$(document).ready(function(){
$("#tamam").click(function(e) {
//if(e.which == 13) {
var td1 = $("#td1").val();
var td1 = $("#td2").val();
var td1 = $("#td3").val();
var td1 = $("#td4").val();
var td1 = $("#td5").val();

if(td1 != '' || td2 != '' || td3 != '' || td4 != '' || td5 != ''){

$.post("comment-system/refresh-form.php",{ id1: id, username1: username, message1: message},
			function(data) {
			$('<?php echo "#form".$id ?>')[0].reset(); //To reset form fields
			});
    
    }
//}
});
});

</script>
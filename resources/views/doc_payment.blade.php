@extends('layouts.app')

@section('body')
<style>
	.form-control{
		height: 24px;
	}
	.processButtons button{
		width: 120px;
	}
</style>
<div class="" id="content">
	<div class="row" style="text-align: center"><h1> Evrakla ödeme</h1></div>
	<div class="row">
		<div class="col-md-10">
			<div class="" style="height: 550px;overflow: scroll; border:1px solid #ddd;">				
			 	<table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable4" style="margin-bottom: 0px; padding: 0px;">
	                <thead class="tableFloatingHeaderOriginal">
	                    <tr>
	                        <th>Ödeme tipi</th>
	                        <th>Vade Tarihi</th>	                                                             
	                        <th>Tutarı</th>	                                                             
	                        <th>İşlem dövizi</th>	                                                             
	                        <th>Döviz tutarı</th>	                                                             
	                    </tr>
	                </thead>                    
	                <tbody>
	             		
	                </tbody>
	            </table>
			</div>
		</div>
		<div class="col-md-2 processButtons">
			<label for=""> Satış Toplamı</label>
			<input type="text" class="form-control" placeholder="0.00" disabled="">
			<label for=""> Sipariş Toplamı</label>
			<input type="text" class="form-control" placeholder="0.00" disabled="">
			<label for=""> Toplam</label>
			<input type="text" class="form-control" placeholder="0.00" disabled="">
			<label for=""> Ödenen</label>
			<input type="text" class="form-control" placeholder="0.00" disabled="">
			<label for=""> Kalan</label>
			<input type="text" class="form-control" placeholder="0.00" disabled="">
			<label for=""> Para üstü</label>
			<input type="text" class="form-control" placeholder="0.00" disabled="">
			<button class="btn btn-default" style="width:100%;">Tamam</button>
			<button class="btn btn-default" style="width:100%;" href={{ route('main')}}>Vazgeç</button>
			<button class="btn btn-default" style="width:100%;" >Ödeme sil</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 processButtons ">
			<button class="btn btn-default">Nakit</button>
			<button class="btn btn-default">Kredi kartı</button>
			<button class="btn btn-default">Puanla ödeme</button>
			<button class="btn btn-default">Çek</button>
			<button class="btn btn-default">Açık Hesap</button>
			<button class="btn btn-default">Sipariş Açık Hsp.</button>
			<button class="btn btn-default">Taksit</button>
		</div>
	</div>
</div>
@endsection
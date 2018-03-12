@extends('layouts.app')

@section('body')
<div id="content" class="creditCard">
	<div class="row" style="text-align: center"><h1> @lang('custom.cashPayment')</h1></div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 total">
			<label for="" class="col-md-3">@lang('custom.total')</label>
			<div class="col-md-9">
				<input type="text" class=" form-control" placeholder="3223.00" disabled="">
			</div>
			<label for="" class="col-md-3">@lang('custom.payed')</label>
			<div class="col-md-9">
				<input type="text" class=" form-control" placeholder="0.00" disabled="">
			</div>
			<label for="" class="col-md-3">@lang('custom.remaining')</label>
			<div class="col-md-9">
				<input type="text" class=" form-control" placeholder="0.00" disabled="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-1 currency">
			<label>Kullanılacak para birimi</label><br>
			<input type="radio" class="" name="currency" checked>Yerel para birimi<br/>
			<input type="radio" class="" name="currency">İşlem dövizi
		</div>
		<div class="col-md-4 bankAccount" >
			<label for="" class="col-md-2">Döviz</label>
			<div class="col-md-4">
				<select name="" id="" class="form-control">
					<option value="1">TL </option>
					<option value="2">AZN</option>
				</select>
			</div>
			<label for="" class="col-md-2">Kur</label>
			<div class="col-md-4">
				<input type="text" class="form-control" placeholder="0.00">
			</div>
			<label for="" class="col-md-3">Tutar</label>
			<div class="col-md-9">				
				<input type="text" class="form-control" placeholder="0.00">
			</div>
			<label for="" class="col-md-3">Dövizli tutar</label>
			<div class="col-md-9">				
				<input type="text" class="form-control" placeholder="0.00">
			</div>
		</div>
		<div class="col-md-2 processButtons">
			<button class="btn btn-default" style="width:100%;">Tamam</button>
			<button class="btn btn-default" style="width:100%;" href={{ url('/')}}>Vazgeç</button>
		</div>
	</div>
</div>

@endsection

@section('scripts')
$('.kybrd').mlKeyboard({layout: 'az_AZ',  is_hidden:false});
@endsection
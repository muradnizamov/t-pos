@extends('layouts.app')

@section('body')
<div id="content" class="creditCard">
	<div class="row" style="text-align: center"><h1> @lang('custom.bonusPayment') </h1></div>
	<div class="row">
		<div class="col-md-4 col-md-offset-1 currency">
			<label for="" class="col-md-3"> @lang('custom.total') </label>
			<div class="col-md-9">
				<input type="text" class=" form-control" placeholder="3223.00" disabled="">
			</div>
			<label for="" class="col-md-3"> @lang('custom.payed') </label>
			<div class="col-md-9">
				<input type="text" class=" form-control" placeholder="0.00" disabled="">
			</div>
			<label for="" class="col-md-3"> @lang('custom.remaining') </label>
			<div class="col-md-9">
				<input type="text" class=" form-control" placeholder="0.00" disabled="">
			</div>
		</div>
		<div class="col-md-4 bankAccount" >	
			<label for="" class="col-md-5"> @lang('custom.bonusUsable') </label>
			<div class="col-md-5">
				<input type="text" class="form-control" disabled placeholder="0.00">
			</div>
			<label for="" class="col-md-5">@lang('custom.bonusUsableEq')</label>
			<div class="col-md-5">				
				<input type="text" class="form-control" disabled placeholder="0.00">
			</div>		
		</div>
		<div class="col-md-2 processButtons">
			<button class="btn btn-default" style="width:100%;">@lang('custom.ok')</button>
			<button class="btn btn-default" style="width:100%;" href={{ url('/')}}>@lang('custom.cancel')</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-1 currency">
			<label for="" class="col-md-2">@lang('custom.amount')</label>
			<div class="col-md-4">
				<input type="text" class="form-control" placeholder="0.00">
			</div>
		</div>
	</div>

</div>

@endsection

@section('scripts')
$('.kybrd').mlKeyboard({layout: 'az_AZ',  is_hidden:false});
@endsection
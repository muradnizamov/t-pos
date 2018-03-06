@extends('layouts.app')

@section('body')
<div id="content">
	<div class="row">		
		<div class="col-md-10">
			<div class="form-group">
				<label for="" class="col-md-2">Adı</label>
				<div class="col-sm-10" data-column="0">
					<input type="text" class="form-control column_filter" id="firstNameCustomerNew" placeholder="Kart No">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Soyadı</label>
				<div class="col-sm-10" data-column="0">
					<input type="text" class="form-control column_filter" id="lastNameCustomerNew" placeholder="Kart No">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Vergi dairesi</label>
				<div class="col-sm-10" data-column="0">
					<input type="text" class="form-control column_filter" id="taxCustomerNew" placeholder="Kart No">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Vergi No / TC No</label>
				<div class="col-sm-10" data-column="0">
					<input type="text" class="form-control column_filter" id="taxNoCustomerNew" placeholder="Kart No">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Müsteri kart No</label>
				<div class="col-sm-10" data-column="0">
					<input type="text" class="form-control column_filter" id="cardNumberCustomerNew" placeholder="Kart No">
				</div>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-10"></div>
		<div class="col-md-2 processButtons processButtons3">		
			<button class="btn btn-default">Tamam</button>
			<button class="btn btn-default" href="{{ route('currents')}}">Vazgeç</button>
		</div>
	</div>
</div>


@endsection

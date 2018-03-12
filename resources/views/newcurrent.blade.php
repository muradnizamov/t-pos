@extends('layouts.app')

@section('body')
<div id="content">
	<div class="row">		
		<div class="col-md-10">
			<div class="form-group">
				<label for="" class="col-md-2">Adı</label>
				<div class="col-sm-10" data-column="0">
					<input type="text" class="form-control column_filter" name="firstNameCustomerNew" id="firstNameCustomerNew" placeholder="Adı">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Soyadı</label>
				<div class="col-sm-10" data-column="0">
					<input type="text" class="form-control column_filter" name="lastNameCustomerNew" id="lastNameCustomerNew" placeholder="Soyadı">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Vergi dairesi</label>
				<div class="col-sm-10" data-column="0">
					<input type="text" class="form-control column_filter" name="taxCustomerNew" id="taxCustomerNew" placeholder="Vergi dairesi">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Vergi No / TC No</label>
				<div class="col-sm-10" data-column="0">
					<input type="text" class="form-control column_filter" name="taxNoCustomerNew" id="taxNoCustomerNew" placeholder="Vergi No / TC No">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Müsteri kart No</label>
				<div class="col-sm-7" data-column="0">
					<input type="text" class="form-control column_filter" name="cardNumberCustomerNew" id="cardNumberCustomerNew" placeholder="Müsteri kart No">
				</div>
				<div class="col-md-1"><input type="checkbox" id="issueNewCard"></div>
				<label for="" class="col-md-2">Otomatik kart no uret</label>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-10"></div>
		<div class="col-md-2 processButtons processButtons3">		
			<button class="btn btn-default" id="saveCurrent">Tamam</button>
			<button class="btn btn-default" href="{{ route('currents')}}">Vazgeç</button>
		</div>
	</div>
</div>


@endsection

@section('scripts')
$('.kybrd').mlKeyboard({layout: 'az_AZ',  is_hidden:false});

$('#saveCurrent').on('click', function(){
	var firstName = $('#firstNameCustomerNew').val(),
		lastName = $('#lastNameCustomerNew').val(),
		tax = $('#taxCustomerNew').val(),
		taxNo = $('#taxNoCustomerNew').val(),
		card = $('#cardNumberCustomerNew').val();
	if(card===undefined && $('#issueNewCard').is(':checked'))
	{
		//
	}
	
	var params = {
		'firstName':firstName,
		'lastName':lastName,
		'tax':tax,
		'taxNo':taxNo,
		'card':card
	}

	$.ajax({
        type: "POST",
        url: '/create_new_current',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: params,
        success: function (data) {
           data = JSON.parse(data); 
           if(data['status']===true)
           {
            window.location = '{{route('currents')}}';
           }
        },
        error: function (data, textStatus, errorThrown) {
            console.log(data);
        },
    });
});

@endsection
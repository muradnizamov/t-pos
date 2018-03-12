@extends('layouts.app')

@section('body')
<div id="content" class="creditCard">
	<div class="row" style="text-align: center"><h1> Hediye Kartı</h1></div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 total">
			<label for="" class="col-md-3">Tutar</label>
			<div class="col-md-9">
				<input type="text" class="form-control" placeholder="" >
			</div>
			<label for="" class="col-md-3">Müşteri Kart No</label>
			<div class="col-md-9">
				<input type="text" class="form-control" placeholder="" >
			</div>			
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 col-md-offset-4 countButtons2">
			<div>					
				<button data-count="7" class="btn btn-default">7</button>
				<button data-count="8" class="btn btn-default">8</button>
				<button data-count="9" class="btn btn-default">9</button>
				<button data-count="del" class="btn btn-default"><i class="fa fa-arrow-left"></i></button><br/>
			</div>
			<div>					
				<button data-count="4" class="btn btn-default">4</button>
				<button data-count="5" class="btn btn-default">5</button>
				<button data-count="6" class="btn btn-default">6</button>
			</div>
			<div>				
				<button data-count="1" class="btn btn-default">1</button>
				<button data-count="2" class="btn btn-default">2</button>
				<button data-count="3" class="btn btn-default">3</button>
				<button data-count="enter" class="btn btn-default">ENTER</button>
			</div>
			<div>				
				<button data-count="0" class="btn btn-default">0</button>
				<button data-count="00" class="btn btn-default">00</button>
				<button data-count="000" class="btn btn-default">000</button>
				<button data-count="," class="btn btn-default">,</button>
			</div>
		</div>		
	</div>
</div>

@endsection

@section('scripts')
	
$('.countButtons2 .btn').on('click', function(){
    var th = $(this);
    var btn = th.attr('data-count');
	
	var val = $('.focused').eq(0).val();
    console.log(document.activeElement);
    switch(btn) {     
      case 'del':  
        $('.focused').eq(0).val('');
        break;      
      default:
        $('.focused').eq(0).val(val.toString()+btn.toString());
        break;
    }
}); 
@endsection
@extends('layouts.app')

@section('body')

<div id="content">
    <div class="row">       
        <div class="col-md-8">
            <div class="form-group ">
                <label for="customer" class="col-md-2 col-form-label">Müşteri</label>
                <div class="col-md-4" >
                    <input type="text" data-column="1" class="form-control kybrd" id="customerCurrent" placeholder="Müşteri">
                </div>
                <label for="customer" class="col-md-2 col-form-label">Fatura belge No</label>
                <div class="col-sm-4" >
                    <input type="text" data-column="0" class="form-control kybrd" id="billCurrent" placeholder="Fatura">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-md-2">Kart No</label>
                <div class="col-sm-10" >
                    <input type="text" data-column="1" class="form-control kybrd" id="cardNumberCustomer" placeholder="Hediye Kart No">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-md-2">Cep Telefonu</label>
                <div class="col-sm-10" >
                    <input type="text" data-column="4" class="form-control kybrd" id="telephoneCustomer" placeholder="Cep Telefonu">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div id="product-list" class="ps-container" style="background:#fff;height: 440px;overflow:scroll; min-height: 278px;margin-top: 20px;">
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
                    <tbody>
                        <tr data-id="1">
                            <td>131212312</td>
                            <td>Samra</td>
                            <td>Osman</td>
                            <td>Lorem ipsum</td>
                            <td>055 555 55 55</td>                      
                        </tr>
                        <tr data-id="3">
                            <td>555</td>
                            <td>Samra</td>
                            <td>Osman</td>
                            <td>Lorem ipsum</td>
                            <td>055 555 55 00</td>                      
                        </tr>
                        <tr data-id="2">
                            <td>54545</td>
                            <td>Turqut</td>
                            <td>Ozal</td>
                            <td>Lorem ipsum</td>
                            <td>066 666 66 66</td>                      
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
            <button class="btn btn-default" id="addCurrentToBasket">Tamam</button>
            <button class="btn btn-default" href="{{ url('/')}}">Vazgeç</button>
            <button class="btn btn-default">Cari iptal</button>
            <button class="btn btn-default" id="cleanCurrent">Temizle</button>
            <button class="btn btn-default" href="{{ route('currents.new')}}">Yeni cari</button>
        </div>
    </div>
</div>


@endsection

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
</script>
<script>
         jQuery(document).ready(function(){
            $('.kybrd').mlKeyboard({layout: 'tr_TR',  is_hidden:false});
            jQuery('#addCurrentToBasket').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/') }}",
                  method: 'post',
                  data: {
                     name: "DADA",
                     type: jQuery('#type').val(),
                     price: jQuery('#price').val()
                  },
                  success: function(result){
                     jQuery('.alert').show();
                     jQuery('.alert').html(result.success);
                  }});
               });
            });
      </script>
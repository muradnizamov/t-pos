<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>POS | Cowsel</title>
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/kybrd.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="wrapper">
        <header id="header" class="navbar">
        <div class="container">
            <a class="navbar-brand" href="/" tabindex="-1"><span class="logo"><span class="pos-logo-lg">Cowsel </span><span class="pos-logo-sm">POS</span></span></a>
                <div class="header-nav">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">
                            <a class="btn account dropdown-toggle" data-toggle="dropdown" href="#" tabindex="-1">
                                <div class="user">
                                    <span>@lang('custom.welcome') owner</span>
                                </div>
                            </a>
                            {{-- <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="https://sma.tecdiary.com/admin/auth/profile/1" tabindex="-1"><i class="fa fa-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="https://sma.tecdiary.com/admin/auth/profile/1/#cpassword" tabindex="-1"><i class="fa fa-key"></i> Change Password </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="https://sma.tecdiary.com/admin/auth/logout" tabindex="-1"><i class="fa fa-sign-out"></i> Logout </a>
                                </li>
                            </ul> --}}
                        </li>
                    </ul>
                </div>
            </div>
        </header>
            @yield('body')            
            <!-- Warning  Modal-->
            <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    @lang('custom.zeroPriceWarning')
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.close')</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Discount Modal-->
            <div class="modal fade" id="discountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('custom.discountEntry')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                        <label class="col-md-2" for="">@lang('custom.discount')</label>                        
                        <div class="col-md-7">
                            <input type="text" id="discountQt" name="" class="form-control" placeholder="@lang('custom.discount')">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3" for="">@lang('custom.promoCode')</label>  
                        <div class="col-md-6">
                            <select name="" id="promoCode" class="form-control">
                                <option value="0001">0001 Sezon indirimi</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">                        
                        <div class="col-md-4 processButtons processButtons4">
                            @lang('custom.materialBased')
                            <button class="btn btn-default" id="calculateDiscount">% @lang('custom.discount')</button>
                            <button class="btn btn-default">@lang('custom.amountReduced') </button>
                            <button class="btn btn-default">@lang('custom.canceledDiscount') </button>
                        </div>
                        <div class="col-md-4  processButtons processButtons4">
                            @lang('custom.docBased')
                            <button class="btn btn-default" id="calculateDiscount">% @lang('custom.discount')</button>
                            <button class="btn btn-default">@lang('custom.amountReduced') </button>
                            <button class="btn btn-default">@lang('custom.canceledDiscount') </button>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.cancel')</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">@lang('custom.menu')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 processButtons processButtons4">
                                <button class="btn">@lang('custom.docOnHold')</button>
                                <button class="btn">@lang('custom.bringDoc')</button>
                                <button class="btn">@lang('custom.cancelDoc')</button>
                                <button class="btn" data-toggle="modal" href="#giftCardModal"> @lang('custom.giftCard')</button>
                                <button class="btn">@lang('custom.taksitPayment')</button>
                            </div>
                            <div class="col-md-6 processButtons processButtons4">
                                <button class="btn"> @lang('custom.cashEntry') </button>
                                <button class="btn"> @lang('custom.cashOut')</button>
                                <button class="btn">@lang('custom.printLastReceipt') </button>
                                <button class="btn">@lang('custom.printContract') </button>
                                <button class="btn">@lang('custom.printColl') </button>
                                {{-- todo --}}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.close') </button>
                    </div>
                </div>
              </div>
            </div>
            @include('modals')
        </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.floatThead.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/kybrd.js') }}"></script>
    <script>    

    function selectTableRow(tableId, tr){
          if ( tr.hasClass('selected') ) {
            tr.removeClass('selected');
        }
        else {
            $('#'+tableId+' tbody tr.selected').removeClass('selected');
            tr.addClass('selected');
        }
    }

    var dtParams = {
        paging: false,
    }
    var productTableParams = {
            columnDefs: [
                { width: 500, targets: 3 }
            ],
            paging:         false,
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            fixedColumns: true,
        };

    var tables = ['posTable', 'posTable3','posTable4'];

    $(document).on('shown.bs.modal', '.customModal', function () {
         $('#mlkeyboard').fadeIn('fast'); 
        if($.fn.dataTable.isDataTable('#posTable')) tableCurrent.columns.adjust();
        if($.fn.dataTable.isDataTable('#posTable3')) tableProduct.columns.adjust(); 
    });
 
    $(document).on('hidden.bs.modal', '.customModal', function (e) { 
        $('#mlkeyboard').fadeOut('fast');
        $('body').on('keyup', function(){
            $('#quantity').focus();
        });
    });

    $(document).on('keyup','.focused', function(){ 
        var i =$(this).attr('data-column');  
        var v =$(this).val(); 
        if($.fn.dataTable.isDataTable( '#posTable3')) tableProduct.columns(i).search(v).draw();
        if($.fn.dataTable.isDataTable( '#posTable')) tableCurrent.columns(i).search(v).draw();
        // tableSeller.columns(i).search(v).draw();
    });

    $(document).ready(function () 
    {
        $('.kybrd').mlKeyboard({layout: 'az_AZ',  is_hidden:false});
        $('#mlkeyboard').hide();

        $('#openProductModal').on('click', function(){
            $('#productModal').modal('show');
            if(!$.fn.dataTable.isDataTable( '#posTable3')) tableProduct = $('#posTable3').DataTable(productTableParams);
            $("#posTable3_filter").css("display","none");
            $('#mlkeyboard').show(); 
        });

        $('#openCurrentModal').on('click', function(){
            $('#currentModal').modal('show');
            if(!$.fn.dataTable.isDataTable( '#posTable')) tableCurrent = $('#posTable').DataTable(dtParams);
            $("#posTable_filter").css("display","none");
            $('#mlkeyboard').show();
        });
        // var tableCurrent = $('#posTable').DataTable();

        //for fixed Thead
        var $table = $('#posTable1');
        $table.floatThead();

        $('#cleanCurrent').on('click', function(){
            $('#customerCurrent').val('');
            $('#billCurrent').val('');
            $('#cardNumberCustomer').val('');
            $('#telephoneCustomer').val('');
        });

        $('#sellerClean').on('click', function(){
            $('#sellerCode').val('');
            $('#sellerDesc').val('');
        });
  
        var tableSeller = $('#posTable4').DataTable();

        $('#posTable3 tbody').on( 'click', 'tr', function () {
            selectTableRow('posTable3',$(this));
        });

        $('#posTable1 tbody').on( 'click', 'tr', function () {
            selectTableRow('posTable1',$(this));
        });

        $('#posTable tbody').on( 'click', 'tr', function () {
            selectTableRow('posTable',$(this));
        });
       
        tables.forEach(function(item, i, tables){
            $("#"+item+"_filter").css("display","none"); 
            $("#"+item+"_length").css("display","none"); 
            $("#"+item+"_paginate").css("display","none"); 
        });

        $('.form-control').on('click', function(){
            $('.form-control').removeClass('focused');
            $(this).addClass('focused');
        });  

        // for keyboard plugin events table filtering
        // $('.focused').on( 'keyup', function () {  
        //     console.log('triggered .focused');
        //     var i =$(this).attr('data-column');  
        //     var v =$(this).val(); 
        //     if($.fn.dataTable.isDataTable( '#posTable3')) tableProduct.columns(i).search(v).draw();
        //     if($.fn.dataTable.isDataTable( '#posTable')) tableCurrent.columns(i).search(v).draw();
        //     tableSeller.columns(i).search(v).draw();
        // }); 

        $('.form-control').on( 'keyup', function () {  
            console.log('triggered .control');
            var i =$(this).attr('data-column');  
            var v =$(this).val(); 
            if($.fn.dataTable.isDataTable( '#posTable3')) tableProduct.columns(i).search(v).draw();
            if($.fn.dataTable.isDataTable( '#posTable')) tableCurrent.columns(i).search(v).draw();
            tableSeller.columns(i).search(v).draw();
        });  

        $(document).mouseup(function(e) 
        {
            var container = $("#posTable tbody tr");
            if (!container.is(e.target) && container.has(e.target).length === 0) 
            {
                $('#currentMenu').hide();
            }
        });

        $('#posTable3 tbody tr').on('click', function(e){   
            $('#posTable3 tr').each(function(){
                $(this).find('td').eq(0).find('input').removeAttr('checked');
            })
             
            $(this).find('td').eq(0).find('input').prop('checked', true);            
        });

        $('#posTable tbody tr').on('click', function(e){   
            $('#posTable tr').each(function(){
                $(this).find('td').eq(0).find('input').removeAttr('checked');
            })
             
            $(this).find('td').eq(0).find('input').prop('checked', true);            
        });

        // $('#posTable1 tbody tr').on('click', function(e){   
        //     $('#posTable1 tr').each(function(){
        //         $(this).find('td').eq(0).find('input').removeAttr('checked');            
        //     });
 
        //     $(this).find('td').eq(0).find('input').prop('checked', true);            
        // });

        $('.countButtons .btn').on('click', function(){
            var th = $(this);
            var btn = th.attr('data-count');

            switch(btn) {
              case 'adet': 
                $('#productQuantity').text($('#quantity').val());
                $('#quantity').val('');
                break;           
              case 'del':  
                $('#quantity').val('');
                break;
            case ',':  
                $('#quantity').val(',');
                break;           
              default:
                $('#quantity').val($('#quantity').val()+btn.toString());
                break;
            }
        }); 

        $('#cancelProduct').on('click', function(){
            // $('#posTable1 tbody').find('tr.selected').remove(); 
            $('#appStatus').attr('data-status','cancel').text('İptal');           
        });

        $('#cancelLastProduct').on('click', function(){
            var barcode = $('#posTable1 tbody').find('tr').last().find('td').eq(2).text(),
                name = $('#posTable1 tbody').find('tr').last().find('td').eq(3).text(),
                qt = $('#posTable1 tbody').find('tr').last().find('td').eq(4).text(),
                unit = $('#posTable1 tbody').find('tr').last().find('td').eq(5).text(),
                unitPrice = $('#posTable1 tbody').find('tr').last().find('td').eq(6).text(),
                percent = $('#posTable1 tbody').find('tr').last().find('td').eq(7).text(),
                total = $('#posTable1 tbody').find('tr').last().find('td').eq(8).text(),
                seller = $('#posTable1 tbody').find('tr').last().find('td').eq(9).text(),
                serial = $('#posTable1 tbody').find('tr').last().find('td').eq(10).text(),
                ret = $('#posTable1 tbody').find('tr').last().find('td').eq(11).text();
            $('#posTable1 tbody').append('<tr><td></td><td>İptal</td><td>'+barcode+'</td><td>'+name+'</td><td>'+qt+'</td><td>'+unit+'</td><td>'+unitPrice+'</td><td>'+percent+'</td><td>-'+total+'</td><td>'+seller+'</td><td>'+serial+'</td></tr>');
        });

        $('#calculateDiscount').on('click', function()
        {
            var discountQt = $('#discountQt').val();
            var promoCode = $('#promoCode').val();
            $('#posTable1 tbody').append('<tr><td></td><td>Indirim</td><td></td><td>Satış indirimi '+discountQt+'%</td><td></td><td></td><td></td><td>'+discountQt+'</td><td></td><td></td><td></td></tr>');
            $('#discountModal').modal('hide');
        });

        //JS routing
        $('.processButtons .btn').on('click', function(e){
            e.preventDefault();
            if($(this).attr('href')!=undefined)
            {   
                window.location=$(this).attr('href');
            }
        });

        $('#productDetails').on('click', function(){           
            var productId = $('#posTable3 tbody').find('tr.selected').attr('data-id');
            if(productId===undefined)
            {
                window.location  = 'products/'+$('#posTable1 tbody').find('tr.selected').attr('product-id'); 
            }
            else{
                window.location  = 'products/'+productId;             
            }
        });

        $('#productBalance').on('click', function(){           
            var productId = $('#posTable3 tbody').find('tr.selected').attr('data-id');
            window.location  = 'products/balance/'+productId;             
        });

        $('#chooseSeller').on('click', function(){
            var productId = $('#posTable1 tbody').find('tr.selected').attr('data-id');
            window.location = 'product/seller/'+productId;
        }); 

        @yield('scripts');     
    });    
    </script>
</html>

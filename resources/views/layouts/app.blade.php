<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Offline module | Cowsel</title>
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
                                    <span>Welcome! owner</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu pull-right">
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
                            </ul>
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
                    <h5 class="modal-title" id="exampleModalLabel">Uyari</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Fiyat sifir oldugu icin satish yapilamaz
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Discount Modal-->
            <div class="modal fade" id="discountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">İskonto girişi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                        <label class="col-md-2" for="">İskonto</label>                        
                        <div class="col-md-7">
                            <input type="text" id="discountQt" name="" class="form-control" placeholder="İskonto">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3" for="">İndirim özelkodu</label>  
                        <div class="col-md-6">
                            <select name="" id="promoCode" class="form-control">
                                <option value="0001">0001 Sezon indiirmi</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">                        
                        <div class="col-md-4 processButtons processButtons4">
                            Malzeme bazında
                            <button class="btn btn-default" id="calculateDiscount">% İndirim</button>
                            <button class="btn btn-default">Tutar indirimi</button>
                            <button class="btn btn-default">İndirim iptali</button>
                        </div>
                        <div class="col-md-4  processButtons processButtons4">
                            Belge bazında
                            <button class="btn btn-default">% İndirim</button>
                            <button class="btn btn-default">Tutar indirimi</button>
                            <button class="btn btn-default">İndirim iptali</button>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Menü</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 processButtons processButtons4">
                                <button class="btn">Belge Beklet</button>
                                <button class="btn">Belge Getir</button>
                                <button class="btn">Belge Iptal</button>
                                <button class="btn">Belge Hediye Kartı</button>
                                <button class="btn">Taksit Ödemesi</button>
                            </div>
                            <div class="col-md-6 processButtons processButtons4">
                                <button class="btn">Kasa Nakit Giriş</button>
                                <button class="btn">Kasa Nakit çıkış</button>
                                <button class="btn">Son Fişi Yazdır</button>
                                <button class="btn">Sözleşme Yazdır</button>
                                <button class="btn">Tahsilat yazdır</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
              </div>
            </div>
        </div>

    <script src="{{ asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/jquery.accent-keyboard.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/virtual-keyboard/1.28.0/js/jquery.keyboard.min.js"></script> --}}
    <script src="{{asset('js/kybrd.js')}}"></script>
    <script>

    $(document).ready(function () 
    {
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

        var tableCurrent = $('#posTable').DataTable({
            select: {    
                style:     'os',
                className: 'row-selected'
            }
        });

        var tableProduct = $('#posTable3').DataTable({
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         false,
            columnDefs: [
                { width: 500, targets: 2 }
            ],
            fixedColumns: true,
        });

        var tableSeller = $('#posTable4').DataTable({
            select: {    
                style:     'os',
                className: 'selected'
            }
        });

        $('#posTable3 tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                tableProduct.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });

        $('#posTable1 tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                tableProduct.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });

        $('#posTable tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                tableCurrent.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });

        $("#posTable_filter").css("display","none");   
        $("#posTable_length").css("display","none");   
        $("#posTable3_filter").css("display","none");   
        $("#posTable3_length").css("display","none"); 
        $("#posTable4_filter").css("display","none");   
        $("#posTable4_length").css("display","none");  
        $("#posTable4_paginate").css("display","none");  


        $('.form-control').on( 'keyup click', function () {  
            var i =$(this).attr('data-column');  
            var v =$(this).val(); 
            tableProduct.columns(i).search(v).draw();
            tableCurrent.columns(i).search(v).draw();
            tableSeller.columns(i).search(v).draw();
        } );   

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

        $('#posTable1 tbody tr').on('click', function(e){   
            $('#posTable1 tr').each(function(){
                $(this).find('td').eq(0).find('input').removeAttr('checked');            
            });
 
            $(this).find('td').eq(0).find('input').prop('checked', true);            
        });

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
            $('#posTable1 tbody').find('tr.selected').remove();            
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

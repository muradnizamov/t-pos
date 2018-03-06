<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Offline module | Cowsel</title>
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/jquery.accent-keyboard.css')}}" />
    </head>
    <body>
        <div class="wrapper">
        <header id="header" class="navbar">
        <div class="container">
            <a class="navbar-brand" href="/" tabindex="-1"><span class="logo"><span class="pos-logo-lg">Cowsel Offline </span><span class="pos-logo-sm">POS</span></span></a>
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
        </div>

    <script src="{{ asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.accent-keyboard.js') }}"></script>
    <script>
        
    var product_variant = 0, shipping = 0, p_page = 0, per_page = 0, tcp = "8", pro_limit = 20,
        brand_id = 0, obrand_id = 0, cat_id = "1", ocat_id = "1", sub_cat_id = 0, osub_cat_id,
        count = 1, an = 1, DT = 1,
        product_tax = 0, invoice_tax = 0, product_discount = 0, order_discount = 0, total_discount = 0, total = 0, total_paid = 0, grand_total = 0,
        KB = 1, tax_rates =[{"id":"1","name":"No Tax","code":"NT","rate":"0.0000","type":"2"},{"id":"2","name":"VAT @10%","code":"VAT10","rate":"10.0000","type":"1"},{"id":"3","name":"GST @6%","code":"S","rate":"6.0000","type":"1"},{"id":"4","name":"VAT @20%","code":"VT20","rate":"20.0000","type":"1"},{"id":"5","name":"GST @0%","code":"Z","rate":"0.0000","type":"2"}];
    var protect_delete = 0, billers = [{"logo":"logo1.png","company":"Test Biller"}], biller = {"logo":"logo1.png","company":"Test Biller"};
    var username = 'owner', order_data = '', bill_data = '';

    function filterColumn ( i ) {
        $('#posTable').DataTable().column( i ).search(
            $('#col'+i+'_filter').val(),
            $('#col'+i+'_regex').prop('checked'),
            $('#col'+i+'_smart').prop('checked')
        ).draw();
    }
   
    $(document).ready(function () {

        $('#cleanCurrent').on('click', function(){
            $('#customerCurrent').val('');
            $('#billCurrent').val('');
            $('#cardNumberCustomer').val('');
            $('#telephoneCustomer').val('');
        });

        $('.form-control').accentKeyboard();

        var table = $('#posTable').DataTable({
            select: {    
                style:     'os',
             className: 'row-selected'
                }
        });            

        $('#posTable').on( 'select.dt', function () {
            alert( 'Table redrawn' );
        } );

        $('input.column_filter').on( 'keyup click', function () {
            filterColumn( $(this).parents('div').attr('data-column') );            
        } );

        $(document).mouseup(function(e) 
        {
            var container = $("#posTable tbody tr");
            if (!container.is(e.target) && container.has(e.target).length === 0) 
            {
                 $('#currentMenu').hide();
            }
        });

        $('#posTable tbody tr').on('dblclick', function(e){
            var data_id= parseInt($(this).attr('data-id'));
            window.location = 'currents/edit/'+data_id;
        });

        $('#view-customer').click(function(){
            $('#myModal').modal({remote: site.base_url + 'customers/view/' + $("input[name=customer]").val()});
            $('#myModal').modal('show');
        });
        $('textarea').keydown(function (e) {
            if (e.which == 13) {
               var s = $(this).val();
               $(this).val(s+'\n').focus();
               e.preventDefault();
               return false;
            }
        }); 

        $('.countButtons .btn').on('click', function(){
            var th = $(this);
            var btn = th.attr('data-count');
            switch(btn) {
              case 'adet': 
                // $('#productQuantity').text(1);
                break;
              case '00': 
                $('#productQuantity').text($('#productQuantity').text()+'00');
                break;
              case '000': 
                 $('#productQuantity').text($('#productQuantity').text()+'000');
                break;
              case 'del':  
                $('#productQuantity').text(0);
                break;
                case ',':  
                $('#productQuantity').text(',');
                break;           
              default:
                $('#productQuantity').text(btn);
                break;
            }
        }); 

        $('.processButtons .btn').on('click', function(e){
            e.preventDefault();
            if($(this).attr('href')!=undefined)
            {   
                window.location=$(this).attr('href');
            }
        });
    });

    
    </script>
</html>

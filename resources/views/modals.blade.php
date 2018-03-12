{{--  
1. #productModal - Urunler
2. #currentModal - Cariler
3. #currentNewModal - Yeni cari
4. #giftCardModal - Hediye karti
5. #cashPaymentModal - Nakit Odeme
6. #bonusPaymentModal - Puanla Odeme
7. #creditCardPaymentModal - Kredi Kartla Odeme
8. #docPaymentModal - Evrakla Odeme
9. #productBalanceModal - Bakiye Sorgula
10.#sellerModal - Bakiye Sorgula
--}}
{{-- 1 --}}
<div class="modal customModal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ürünler</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label  class="col-md-3"> @lang('custom.barcode') </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control kybrd" data-column="1" id="barcodeProduct" placeholder="@lang('custom.barcode')">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3"> @lang('custom.matDesc') </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control kybrd" data-column="3" id="facilityDescProduct" placeholder="@lang('custom.matDesc')">  
                            </div>          
                        </div>
                        <div class="form-group">
                            <label class="col-md-3"> @lang('custom.matCode') </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control kybrd" data-column="2" id="facilityCodeProduct" placeholder="@lang('custom.matCode')">
                            </div>
                        </div>          
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label class="col-md-3"> @lang('custom.specialCode') </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control kybrd" data-column="8" id="specialCodeProduct" placeholder="@lang('custom.specialCode')">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">@lang('custom.specialCode')2</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control kybrd" data-column="9" id="specialCode2Product" placeholder="@lang('custom.specialCode')2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">@lang('custom.specialCode')3</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control kybrd col-md-5"  data-column="10" id="specialCode3Product" placeholder="@lang('custom.specialCode')3">  
                            </div>          
                        </div>  
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label class="col-md-3 col-form-label">@lang('custom.specialCode')4</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control kybrd" data-column="11" id="specialCode4Product" placeholder="@lang('custom.specialCode')4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">@lang('custom.specialCode')5</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control kybrd" data-column="12" id="specialCode5Product" placeholder="@lang('custom.specialCode')5">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div id="product-list" class="ps-container" style="background:#fff;height: 440px;overflow:scroll; min-height: 278px;margin-top: 20px;">
                            <table class="table items table-striped table-bordered table-condensed table-hover " id="posTable3" style="margin-bottom: 0px; padding: 0px;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th> @lang('custom.barcode') </th>
                                        <th> @lang('custom.matCode') </th>
                                        <th> @lang('custom.matDesc') </th>
                                        <th> @lang('custom.sellPrice') </th>                           
                                        <th> @lang('custom.vat') </th>
                                        <th> @lang('custom.depNo') </th>
                                        <th> @lang('custom.unit') </th>
                                        <th> @lang('custom.specialCode') </th>
                                        <th> @lang('custom.specialCode')2 </th>
                                        <th> @lang('custom.specialCode')3 </th>
                                        <th> @lang('custom.specialCode')4 </th>
                                        <th> @lang('custom.specialCode')5 </th>
                                    </tr>
                                </thead>                    
                                <tbody>
                                    <tr data-id="1">
                                        <td><input type="checkbox" name="editor-active" class="editor-active"></td>
                                        <td>0000017</td>
                                        <td>0000000000054345</td>
                                        <td>SAMSUNG RT54QBP</td>
                                        <td>104.58</td>
                                        <td>8</td>                      
                                        <td>04</td>                     
                                        <td>ADET</td>                       
                                        <td></td>                       
                                        <td>9999999999999999999</td>                        
                                        <td>9999999999999999999</td>                        
                                        <td>9999999999999999999</td>                        
                                        <td>9999999999999999999</td>                        
                                    </tr>
                                    <tr data-id="2">
                                        <td><input type="checkbox" name="editor-active"  class="editor-active"></td>
                                        <td>0000020</td>
                                        <td>0000000000054345</td>
                                        <td>SAMSUNG G7766D</td>
                                        <td>6</td>
                                        <td>8</td>                      
                                        <td>04</td>                     
                                        <td>ADET</td>                       
                                        <td></td>                       
                                        <td>9999999999999999999</td>                        
                                        <td>9999999999999999999</td>                        
                                        <td>9999999999999999999</td>                        
                                        <td>9999999999999999999</td>                        
                                    </tr>
                                     <tr data-id="3">
                                        <td><input type="checkbox" name="editor-active"  class="editor-active"></td>
                                        <td>0000018</td>
                                        <td>0000000000054345</td>
                                        <td>PHILIPS G7766D</td>
                                        <td>99.99</td>
                                        <td>8</td>                      
                                        <td>04</td>                     
                                        <td>ADET</td>                       
                                        <td></td>                       
                                        <td>9999999999999999999</td>                        
                                        <td>9999999999999999999</td>                        
                                        <td>9999999999999999999</td>                        
                                        <td>9999999999999999999</td>                        
                                    </tr>
                               
                                </tbody>
                            </table>
                            <div style="clear:both;"></div>
                      {{--       <div class="ps-scrollbar-x-rail" style="width: 604px; display: block; left: 0px; bottom: 3px;">
                                <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps-scrollbar-y-rail" style="top: 0px; height: 589px; display: none; right: 3px;">
                                <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-2 processButtons processButtons4" style="padding-left: 20px !important;">        
                        <button class="btn btn-default" id="addToBasket"> @lang('custom.ok') </button>
                        <button class="btn btn-default" href="{{ url('/')}}"> @lang('custom.cancel') </button>
                        <button class="btn btn-default" id="productDetails"> @lang('custom.prodDesc') </button> {{--js--}}
                        <button class="btn btn-default" id="productBalance"> @lang('custom.queryBalance') </button>
                        <button class="btn btn-default" id="cleanCurrent"> @lang('custom.clear') </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> @lang('custom.close') </button>
        </div>
    </div>
  </div>
</div>
{{-- 2 --}}
<div class="modal customModal fade" id="currentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">currents</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="content">
                <div class="row">       
                    <div class="col-md-8">
                        <div class="form-group ">
                            <label for="customer" class="col-md-2 col-form-label"> @lang('custom.customer') </label>
                            <div class="col-md-4" >
                                <input type="text" data-column="2" class="form-control kybrd" id="customerCurrent" placeholder="@lang('custom.customer')">
                            </div>
                            <label for="customer" class="col-md-2 col-form-label"> @lang('custom.invoiceNumber') </label>
                            <div class="col-sm-4" >
                                <input type="text" data-column="1" class="form-control kybrd" id="billCurrent" placeholder="@lang('custom.invoiceNumber')">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-2"> @lang('custom.cardNumber') </label>
                            <div class="col-sm-10" >
                                <input type="text" data-column="2" class="form-control kybrd" id="cardNumberCustomer" placeholder="@lang('custom.cardNumber')">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-2"> @lang('custom.mobileNumber') </label>
                            <div class="col-sm-10" >
                                <input type="text" data-column="5" class="form-control kybrd" id="telephoneCustomer" placeholder="@lang('custom.mobileNumber')">
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
                                        <th></th>
                                        <th>Kodu</th>
                                        <th> @lang('custom.name')</th>
                                        <th> @lang('custom.surname')</th>
                                        <th> @lang('custom.address')</th>                           
                                        <th> @lang('custom.mobileNumber')</th>
                                    </tr>
                                </thead>                    
                                <tbody>
                                    <tr data-id="1">
                                        <td><input type="checkbox" name="editor-active" class="editor-active"></td>
                                        <td>131212312</td>
                                        <td>Samra</td>
                                        <td>Osman</td>
                                        <td>Lorem ipsum</td>
                                        <td>055 555 55 55</td>                      
                                    </tr>
                                    <tr data-id="3">
                                        <td><input type="checkbox" name="editor-active" class="editor-active"></td>
                                        <td>555</td>
                                        <td>Samra</td>
                                        <td>Osman</td>
                                        <td>Lorem ipsum</td>
                                        <td>055 555 55 00</td>                      
                                    </tr>
                                    <tr data-id="2">
                                        <td><input type="checkbox" name="editor-active" class="editor-active"></td>
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
                        <button class="btn btn-default" id="addCurrentToBasket"> @lang('custom.ok') </button>
                        <button class="btn btn-default" href="{{ url('/')}}"> @lang('custom.cancel') </button>
                        <button class="btn btn-default"> @lang('custom.cancelCurrent') </button>
                        <button class="btn btn-default" id="cleanCurrent"> @lang('custom.clear') </button>
                        <button class="btn btn-default" data-toggle="modal" href="#currentNewModal"> @lang('custom.newCurrent') </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.close') </button>
        </div>
    </div>
  </div>
</div>
{{-- 3 --}}
<div class="modal customModal fade" id="currentNewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="content">
                <div class="row">       
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="" class="col-md-2"> @lang('custom.name') </label>
                            <div class="col-sm-10" data-column="0">
                                <input type="text" class="form-control column_filter" name="firstNameCustomerNew" id="firstNameCustomerNew" placeholder="@lang('custom.name')">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-2"> @lang('custom.surname') </label>
                            <div class="col-sm-10" data-column="0">
                                <input type="text" class="form-control column_filter" name="lastNameCustomerNew" id="lastNameCustomerNew" placeholder="@lang('custom.surname')">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-2"> @lang('custom.taxAdministration') </label>
                            <div class="col-sm-10" data-column="0">
                                <input type="text" class="form-control column_filter" name="taxCustomerNew" id="taxCustomerNew" placeholder="@lang('custom.taxAdministration')">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-2"> @lang('custom.idCard') </label>
                            <div class="col-sm-10" data-column="0">
                                <input type="text" class="form-control column_filter" name="taxNoCustomerNew" id="taxNoCustomerNew" placeholder="@lang('custom.idCard') ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-2"> @lang('custom.customerCardNo') </label>
                            <div class="col-sm-7" data-column="0">
                                <input type="text" class="form-control column_filter" name="cardNumberCustomerNew" id="cardNumberCustomerNew" placeholder="@lang('custom.customerCardNo')">
                            </div>
                            <div class="col-md-1"><input type="checkbox" id="issueNewCard"></div>
                            <label for="" class="col-md-2">@lang('custom.issueNewCard') </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2 processButtons processButtons3">       
                        <button class="btn btn-default" id="saveCurrent">@lang('custom.ok')</button>
                        <button class="btn btn-default" href="{{ route('currents')}}"> @lang('custom.cancel')</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> @lang('custom.close') </button>
        </div>
    </div>
  </div>
</div>
{{-- 4 --}}
<div class="modal customModal fade" id="giftCardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="content" class="creditCard">
                <div class="row" style="text-align: center"><h1> @lang('custom.giftCard') </h1></div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 total">
                        <label for="" class="col-md-3"> @lang('custom.amount') </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" >
                        </div>
                        <label for="" class="col-md-3"> @lang('custom.customerCardNo') </label>
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
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.close') </button>
        </div>
    </div>
  </div>
</div>
{{-- 5 --}}
<div class="modal customModal fade" id="cashPaymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="content" class="creditCard">
                <div class="row" style="text-align: center"><h1> @lang('custom.cashPayment') </h1></div>
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
                        <label>@lang('custom.currencyToBeUsed')</label><br>
                        <input type="radio" class="" name="currency" checked>@lang('custom.localCurrency')<br/>
                        <input type="radio" class="" name="currency">@lang('custom.transactionCurrency') 
                    </div>
                    <div class="col-md-4 bankAccount" >
                        <label for="" class="col-md-2">@lang('custom.currency') </label>
                        <div class="col-md-4">
                            <select name="" id="" class="form-control">
                                <option value="1">TL </option>
                                <option value="2">AZN</option>
                            </select>
                        </div>
                        <label for="" class="col-md-2">@lang('custom.exRate')</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="0.00">
                        </div>
                        <label for="" class="col-md-3">@lang('custom.amount')</label>
                        <div class="col-md-9">              
                            <input type="text" class="form-control" placeholder="0.00">
                        </div>
                        <label for="" class="col-md-3">@lang('custom.curAmount') </label>
                        <div class="col-md-9">              
                            <input type="text" class="form-control" placeholder="0.00">
                        </div>
                    </div>
                    <div class="col-md-2 processButtons">
                        <button class="btn btn-default" style="width:100%;">@lang('custom.ok') </button>
                        <button class="btn btn-default" style="width:100%;" href={{ url('/')}}>@lang('custom.cancel') </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.close') </button>
        </div>
    </div>
  </div>
</div>
{{-- 6 --}}
<div class="modal customModal fade" id="bonusPaymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
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
                        <button class="btn btn-default" style="width:100%;"> @lang('custom.ok') </button>
                        <button class="btn btn-default" style="width:100%;" href={{ url('/')}}> @lang('custom.cancel') </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-1 currency">
                        <label for="" class="col-md-2" >@lang('custom.amount') </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="0.00">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> @lang('custom.close') </button>
        </div>
    </div>
  </div>
</div>
{{-- 7 --}}
<div class="modal customModal fade" id="creditCardPaymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="content" class="creditCard">
                <div class="row" style="text-align: center"><h1> @lang('custom.creditCardPayment') </h1></div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 total">
                        <label for="" class="col-md-3"> @lang('custom.total') </label>
                        <div class="col-md-9">
                            <input type="text" class=" form-control" placeholder="3223.00">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-1 currency">
                        <label> @lang('custom.currencyToBeUsed') </label><br>
                        <input type="radio" class="" name="currency"> @lang('custom.localCurrency') <br/>
                        <input type="radio" class="" name="currency"> @lang('custom.transactionCurrency')
                    </div>
                    <div class="col-md-4 bankAccount" >
                        <label for="" class="col-md-3"> @lang('custom.bankAccount') </label>
                        <div class="col-md-9">
                            <select name="" id="" class="form-control">
                                <option value="1">Bank 1 </option>
                                <option value="2">Bank 2</option>
                            </select>
                        </div>
                        <label for="" class="col-md-2">@lang('custom.currency')</label>
                        <div class="col-md-4">
                            <select name="" id="" class="form-control">
                                <option value="1">TL </option>
                                <option value="2">AZN</option>
                            </select>
                        </div>
                        <label for="" class="col-md-2"> @lang('custom.exRate') </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="0.00">
                        </div>
                        <label for="" class="col-md-3"> @lang('custom.amount') </label>
                        <div class="col-md-9">              
                            <input type="text" class="form-control" placeholder="0.00">
                        </div>
                        <label for="" class="col-md-3"> @lang('custom.curAmount') </label>
                        <div class="col-md-9">              
                            <input type="text" class="form-control" placeholder="0.00">
                        </div>
                    </div>
                    <div class="col-md-2 processButtons">
                        <button class="btn btn-default" style="width:100%;">@lang('custom.ok')</button>
                        <button class="btn btn-default" style="width:100%;" href={{ url('/')}}>@lang('custom.cancel')</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.close') </button>
        </div>
    </div>
  </div>
</div>
{{-- 8 --}}
<div class="modal customModalNoKybrd fade" id="docPaymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">@lang('custom.currents')</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="" id="content">
                <div class="row" style="text-align: center"><h1> @lang('custom.docPayment')</h1></div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="" style="height: 510px;overflow: scroll; border:1px solid #ddd;">               
                            <table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="" style="margin-bottom: 0px; padding: 0px;">
                                <thead class="tableFloatingHeaderOriginal">
                                    <tr>
                                        <th>@lang('custom.payMethod')</th>
                                        <th>@lang('custom.expDate')</th>                                                                 
                                        <th>@lang('custom.amount')</th>                                                              
                                        <th>@lang('custom.exRate')</th>                                                                
                                        <th>@lang('custom.curAmount')</th>                                                                
                                    </tr>
                                </thead>                    
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-2 processButtons">
                        <label for=""> @lang('custom.purAmount') </label>
                        <input type="text" class="form-control" placeholder="0.00" disabled="">
                        <label for=""> @lang('custom.orderAmount') </label>
                        <input type="text" class="form-control" placeholder="0.00" disabled="">
                        <label for=""> @lang('custom.total') </label>
                        <input type="text" class="form-control" placeholder="0.00" disabled="">
                        <label for=""> @lang('custom.payed') </label>
                        <input type="text" class="form-control" placeholder="0.00" disabled="">
                        <label for=""> @lang('custom.remaining') </label>
                        <input type="text" class="form-control" placeholder="0.00" disabled="">
                        <label for=""> @lang('custom.change')</label>
                        <input type="text" class="form-control" placeholder="0.00" disabled="">
                        <button class="btn btn-default" style="width:100%;">@lang('custom.ok')</button>
                        <button class="btn btn-default" style="width:100%;" href={{ route('main')}}>@lang('custom.cancel')</button>
                        <button class="btn btn-default" style="width:100%;"> @lang('custom.delPayments') </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 processButtons ">
                        <button class="btn btn-default" href="{{ route('cash_payment') }}">@lang('custom.cash')</button>
                        <button class="btn btn-default" href="{{ route('credit_card') }}">@lang('custom.creditCard')</button>
                        <button class="btn btn-default" href="{{ route('bonus_payment') }}">@lang('custom.bonusPayment')</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.close') </button>
        </div>
    </div>
  </div>
</div>
{{-- 9 --}}
<div class="modal customModalNoKybrd fade" id="productBalanceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="content" class="product">
                <div class="row">
                    <div class="col-md-10">
                        <div class="" style="height: 750px;overflow: scroll; border:1px solid #ddd;">               
                            <table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable1" style="margin-bottom: 0px; padding: 0px;">
                                <thead class="tableFloatingHeaderOriginal">
                                    <tr>
                                        <th> @lang('custom.warehouseNumber') </th>
                                        <th> @lang('custom.warehouseName') </th>
                                        <th> @lang('custom.balance') </th>                                                  
                                    </tr>
                                </thead>                    
                                <tbody class="ui-sortable">
                                     <tr>                       
                                        <td>0</td>
                                        <td>Merkez</td>
                                        <td>0.00</td>                
                                    </tr>
                                    <tr>                        
                                        <td>2</td>
                                        <td>İzmir</td>
                                        <td>0.00</td>                       
                                    </tr>
                                    <tr>                        
                                        <td>2</td>
                                        <td>Ankara</td>
                                        <td>0.00</td>                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-2 processButtons">
                        <button class="btn btn-default" style="width:100%;margin:0 auto;" href="{{route('product_list')}}"> @lang('custom.balance') </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.close') </button>
        </div>
    </div>
  </div>
</div>
{{-- 10 --}}
<div class="modal customModal fade" id="sellerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="customer" class="col-md-2 col-form-label"> @lang('custom.sellerCode') </label>
                            <div class="col-sm-10">
                                <input type="text" data-column="0" class="form-control" id="sellerCode" placeholder="@lang('custom.sellerCode')">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-2">@lang('custom.sellerDesc') </label>
                            <div class="col-sm-10">
                                <input type="text" data-column="1" class="form-control" id="sellerDesc" placeholder="@lang('custom.sellerDesc') ">
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="" style="height: 750px;overflow: scroll; border:1px solid #ddd;">               
                            <table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable4" style="margin-bottom: 0px; padding: 0px;">
                                <thead class="tableFloatingHeaderOriginal">
                                    <tr>
                                        <th>@lang('custom.sellerCode')</th>
                                        <th>@lang('custom.sellerDesc')</th>                                                              
                                    </tr>
                                </thead>                    
                                <tbody>
                                     <tr>                       
                                        <td>650</td>
                                        <td>Filankes</td>             
                                    </tr>
                                    <tr>                        
                                        <td>234</td>
                                        <td>Behmenkes</td>                      
                                    </tr>
                                    <tr>                        
                                        <td>224</td>
                                        <td>AAA</td>                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-2 processButtons">
                        <button class="btn btn-default" style="width:100%;"> @lang('custom.ok') </button>
                        <button class="btn btn-default" style="width:100%;" href={{ url('/')}}> @lang('custom.cancel') </button>
                        <button class="btn btn-default" style="width:100%;" id="cleanSeller"> @lang('custom.clear') </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.close') </button>
        </div>
    </div>
  </div>
</div>
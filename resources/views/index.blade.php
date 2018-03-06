@extends('layouts.app')

@section('body')
	<div id="sensorMenu" class="sensorMenu">
		<div>Menu item 1</div>
		<div>Menu item 1</div>
		<div>Menu item 1</div>
		<div>Menu item 1</div>
		<div>1</div>
	</div>
    <div id="content">
        <div class="c1">
            <div class="pos">
                <div id="pos">
                    <form action="#" data-toggle="validator" role="form" id="pos-sale-form" method="post" accept-charset="utf-8">
                        <input type="hidden" name="token" value="66a3d938d67c330802d2e453529ea691">
                        <div id="leftdiv">
                        	<div class="openOrders" id="openOrders">
                        		<div>Order 1</div><div>Order 2</div>
                        	</div>
                            <div id="print">
                                <div id="left-middle" style="height: 214px; min-height: 278px;">
                                    <div id="product-list" class="ps-container" style="height: 209px; min-height: 278px;">
                                        <table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable" style="margin-bottom: 0px; padding: 0px;">
                                            <thead class="tableFloatingHeaderOriginal">
                                                <tr>
                                                    <th width="40%">Məhsul</th>
                                                    <th width="15%">Qiymət</th>
                                                    <th width="15%">Say</th>
                                                    <th width="20%">Cəm</th>
                                                    <th style="width: 5%; text-align: center;">
                                                        <i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i>
                                                    </th>
                                                </tr>
                                            </thead>                                           
                                            <tbody class="ui-sortable">
                                           
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
                                <div style="clear:both;"></div>
                                <div id="left-bottom">
                                    <table id="totalTable" style="width:100%; float:right; padding:5px; color:#000; background: #FFF;">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 5px 10px;border-top: 1px solid #DDD;">Say</td>
                                                <td class="text-right" style="padding: 5px 10px;font-size: 14px; font-weight:bold;border-top: 1px solid #DDD;">
                                                    <span id="titems">0</span>
                                                </td>
                                                <td style="padding: 5px 10px;border-top: 1px solid #DDD;">Cəmi</td>
                                                <td class="text-right" style="padding: 5px 10px;font-size: 14px; font-weight:bold;border-top: 1px solid #DDD;">
                                                    <span id="total">0.00</span>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="padding: 5px 10px; border-top: 1px solid #666; border-bottom: 1px solid #333; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                                                    Ödəniləcək <a href="#" id="pshipping" tabindex="-1"><i class="fa fa-plus-square"></i></a>
                                                    <span id="tship"></span>
                                                </td>
                                                <td class="text-right" style="padding:5px 10px 5px 10px; font-size: 14px;border-top: 1px solid #666; border-bottom: 1px solid #333; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                                                    <span id="sumtotal">0.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="clearfix"></div>
                                    <div id="botbuttons" class="col-xs-12 text-center">
                                        <input type="hidden" name="biller" id="biller" value="3">
                                        <div class="row">
                                            <div class="col-xs-4" style="padding: 0;">
                                                <div class="btn-group-vertical btn-block">
                                                    <button type="button" class="btn btn-success btn-block btn-flat" id="suspend" tabindex="-1"><i class="fa fa-money"></i> Nakit </button> 
                                                    <button type="button" class="btn btn-primary btn-block" id="print_bill" tabindex="-1">  Karışık ödeme </button>
                                                </div>
                                            </div>
                                            <div class="col-xs-4" style="padding: 0;">
                                                <div class="btn-group-vertical btn-block">
                                                    <button type="button" class="btn btn-info btn-block" id="print_order" tabindex="-1"> <i class="fa fa-credit-card"></i> Kredi kartı </button>                                                   
                                                    <button type="button" class="btn btn-danger btn-block btn-flat" id="reset" tabindex="-1">Beklet </button>
                                                </div>
                                            </div>
                                            <div class="col-xs-4" style="padding: 0;">
                                            	<div class="btn-group-vertical btn-block">
	                                                <button type="button" class="btn btn-warning btn-block" id="other_context" tabindex="-1">Diğer </button>
	                                                <button type="button" class="btn btn-danger btn-block btn-flat" id="reset" tabindex="-1">Vazgeç </button>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both; height:5px;"></div>
                                    <div id="num">
                                        <div id="icon"></div>
                                    </div>
                                    <span id="hidesuspend"></span>
                                    <input type="hidden" name="pos_note" value="" id="pos_note">
                                    <input type="hidden" name="staff_note" value="" id="staff_note">
                                    <div id="payment-con">
                                        <input type="hidden" name="amount[]" id="amount_val_1" value="">
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_1" value="">
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_1" value="cash">
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_1" value="">
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_1" value="">
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_1" value="">
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_1" value="">
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_1" value="">
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_1" value="">
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_1" value="">
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_1" value="">
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_1" value="">
                                        <input type="hidden" name="amount[]" id="amount_val_2" value="">
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_2" value="">
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_2" value="cash">
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_2" value="">
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_2" value="">
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_2" value="">
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_2" value="">
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_2" value="">
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_2" value="">
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_2" value="">
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_2" value="">
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_2" value="">
                                        <input type="hidden" name="amount[]" id="amount_val_3" value="">
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_3" value="">
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_3" value="cash">
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_3" value="">
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_3" value="">
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_3" value="">
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_3" value="">
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_3" value="">
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_3" value="">
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_3" value="">
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_3" value="">
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_3" value="">
                                        <input type="hidden" name="amount[]" id="amount_val_4" value="">
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_4" value="">
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_4" value="cash">
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_4" value="">
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_4" value="">
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_4" value="">
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_4" value="">
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_4" value="">
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_4" value="">
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_4" value="">
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_4" value="">
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_4" value="">
                                        <input type="hidden" name="amount[]" id="amount_val_5" value="">
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_5" value="">
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_5" value="cash">
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_5" value="">
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_5" value="">
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_5" value="">
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_5" value="">
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_5" value="">
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_5" value="">
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_5" value="">
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_5" value="">
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_5" value="">
                                    </div>
                                    <input name="order_tax" type="hidden" value="1" id="postax2">
                                    <input name="discount" type="hidden" value="" id="posdiscount">
                                    <input name="shipping" type="hidden" value="0" id="posshipping">
                                    <input type="hidden" name="rpaidby" id="rpaidby" value="cash" style="display: none;">
                                    <input type="hidden" name="total_items" id="total_items" value="0" style="display: none;">
                                    <input type="submit" id="submit_sale" value="Submit Sale" style="display: none;">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="cp">
                        <div id="cpinner">
                            <div class="quick-menu">
                                <div id="proContainer">
                                    <div id="ajaxproducts">
                                        <div id="item-list" style="height: 453px; min-height: 515px;">
                                            <div>                                              
                                                <button id="product-0112" type="button"                                                            value="IT05" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="Keyboard" tabindex="-1"><img src="images/hard.png" alt="Keyboard" class="img-rounded"><span>Hard disk drives</span></button>
                                                <button id="product-0114" type="button" value="IT07" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="Laptop" tabindex="-1"><img src="images/comp.png" alt="Laptop" class="img-rounded"><span>Computers</span></button>
                                            </div>
                                        </div>
                                        <div class="btn-group btn-group-justified pos-grid-nav">
                                            <div class="btn-group">
                                                <button style="z-index:10002;" class="btn btn-primary pos-tip" title="" type="button" id="previous" data-original-title="Previous" tabindex="-1" disabled="disabled"><i class="fa fa-chevron-left"></i></button>
                                            </div>
                                            <div class="btn-group">
                                                <button style="z-index:10003;" class="btn btn-primary pos-tip" type="button" id="sellGiftCard" title="" data-original-title="Sell Gift Card" tabindex="-1"><i class="fa fa-credit-card" id="addIcon"></i> Sell Gift Card </button>
                                            </div>
                                            <div class="btn-group">
                                                <button style="z-index:10004;" class="btn btn-primary pos-tip" title="" type="button" id="next" data-original-title="Next" tabindex="-1" disabled="disabled"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>

@endsection
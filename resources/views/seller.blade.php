@extends('layouts.app')

@section('body')
<div id="content">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group ">
				<label for="customer" class="col-md-2 col-form-label">Satıcı kodu</label>
				<div class="col-sm-10">
					<input type="text" data-column="0" class="form-control" id="sellerCode" placeholder="Satıcı kodu">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Satıcı açıklaması</label>
				<div class="col-sm-10">
					<input type="text" data-column="1" class="form-control" id="sellerDesc" placeholder="Satıcı açıklaması">
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
	                        <th>Kodu</th>
	                        <th>Açıklaması</th>	                                                             
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
			<button class="btn btn-default" style="width:100%;">Tamam</button>
			<button class="btn btn-default" style="width:100%;" href={{ url('/')}}>Vazgeç</button>
			<button class="btn btn-default" style="width:100%;" id="cleanSeller">Temizle</button>
		</div>
	</div>
</div>
@endsection

@section('scripts')
$('.kybrd').mlKeyboard({layout: 'az_AZ',  is_hidden:false});
@endsection
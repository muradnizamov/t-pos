@extends('layouts.app')

@section('body')
<div id="content" class="product">
	<div class="row">
		<div class="col-md-10">
			<div class="" style="height: 750px;overflow: scroll; border:1px solid #ddd;">				
			 	<table class="table items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable1" style="margin-bottom: 0px; padding: 0px;">
	                <thead class="tableFloatingHeaderOriginal">
	                    <tr>
	                        <th>Ambar No</th>
	                        <th>Ambar adı</th>
	                        <th>Bakiye</th>                                                  
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
			<button class="btn btn-default" style="width:100%;margin:0 auto;" href="{{route('product_list')}}">Kapat</button>
		</div>
	</div>
</div>
@endsection
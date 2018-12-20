@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card">
	<div class="row">
		<div class="col-4">
			<img src="{{asset('img/nnpc.jpg')}}" width="200px">
		</div>
		<div class="col-8">
			<h1>Nigerian national Perol</h1>
		</div>
	</div>
<div class="card-body">
<div class="row mb-4">

<div class="col-sm-8">	
	<div>Location: {{$claimant->location}}</div>
	<div>Coordinate: {{$claimant->coordinates}}</div>
	<div>Date of Inspection: {{$claimant->created_at}}</div>
	<div>Identity Number: {{$claimant->claimant_id}}</div>
</div>

<div class="col-sm-4">
	<img src="{{$claimant->image}}" width="200px">
	<div>{{$claimant->first_name}} {{$claimant->last_name}} {{$claimant->other_name}}</div>
</div>



</div>

<div class="table-responsive-sm">
<table class="table table-striped">
<thead>
<tr>
<th class="center">S/N</th>
<th>Economic Tree/Crops</th>
<th>Quantity</th>
<th class="right">Rate</th>
<th class="center">Maturity</th>
<th class="right">Value</th>
</tr>
</thead>
<tbody>
@foreach($data as $key=> $item)
<tr>
<td class="center">{{ ++$key }}</td>
<td class="left strong">{{$item->type}}</td>
<td class="left">{{$item->name}}</td>

<td class="right">{{$item->unit}}</td>
  <td class="center">{{$item->maturity}}</td>
<td class="right">{{$item->value}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<div class="row">
<div class="col-lg-4 col-sm-5">

</div>

<div class="col-lg-4 col-sm-5 ml-auto">
<table class="table table-clear">
<tbody>
<!-- 
<tr>
<td class="left">
<strong>Subtotal</strong>
</td>
<td class="right">N8.497,00</td>
</tr>

<tr>
<td class="left">
<strong>Discount (20%)</strong>
</td>
<td class="right">N1,699,40</td>
</tr>

<tr>
<td class="left">
 <strong>VAT (10%)</strong>
</td>
<td class="right">N679,76</td>
</tr> -->

<tr>
<td class="left">
<strong>Total</strong>
</td>
<td class="right">
<strong>N7.477,36</strong>
</td>
</tr>

</tbody>
</table>

</div>

</div>

</div>
</div>
</div>

@endsection
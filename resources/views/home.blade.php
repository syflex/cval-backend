@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <table class="table">
                    <thead>
                        <tr>
                            <th> id</th>
                            <th> name</th>
                            <th> Community  </th>
                            <th> Location </th>
                            <th> coordinates</th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($claimant as $item)
                        <tr>
                            <td> {{$item->claimant_id}}</td>
                            <td> {{$item->first_name}} {{$item->last_name}} </td>
                            <td> {{$item->community}} </td>
                            <td> {{$item->location}} </td>
                            <td> {{$item->coordinates}} </td>
                            <td> 
                                <a class="btn btn-small btn-success" href="{{ URL::to('pdf/' . $item->id) }}">Print</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

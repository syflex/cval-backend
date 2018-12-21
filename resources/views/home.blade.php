@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                            <td> <p>{{$item->claimant_id}}</p></td>
                            <td> <p>{{$item->first_name}} {{$item->last_name}}</p> </td>
                            <td> {{$item->community}} </td>
                            <td> {{$item->location}} </td>
                            <td> {{$item->coordinates}} </td>
                            <td> 
                                <a class="btn btn-small btn-success btn-sm" href="{{ URL::to('pdf/' . $item->id) }}">Print</a>
                                <a class="btn btn-small btn-success btn-sm" href="{{ URL::to('indemnity/' . $item->id) }}">Indemnity</a>
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

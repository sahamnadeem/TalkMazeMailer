@extends('layouts.app')

@section('content')


<div class="container">
    <div align="right">
        <a href="{{ route('exportttt_excel.excel') }}" class="btn btn-success">Export to Excel</a>
    </div>
    <br>
    <h2 align="center" ><strong>Subscription List</strong></h2>
    <br>
    <table id="exportTable" class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subscription</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usersss as $userss)
            <tr>
                <td>{{$userss->name}}</td>
                <td>{{$userss->email}}</td>
                @if ($userss->subscription_status == 1)
                    <td>True</td>
                @else
                    <td>False</td>
                @endif
            </tr>
        @endforeach

        </tbody>
    </table>
    <div style="float: right;">
    {{ $usersss->links() }}
    </div>
</div>


@endsection

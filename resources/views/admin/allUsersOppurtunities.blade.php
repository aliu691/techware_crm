@extends('admin.layout.main')
@section('content')

<!-- Tasks -->
<div class="tasks container-fluid">
    <div class="row">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">All Oppurtunities</h4>
                </div>
                <div class="card-body container">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Partner</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">D.O.C</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($oppurtunity as $opp)
                                <tr>
                                    <td class="name">{{$opp->customer}}</td>
                                    <td class="name">{{$opp->service}}</td>
                                    <td class="name">{{$opp->description}}</td>
                                    <td class="name">{{$opp->duration}} Week(s)</td>
                                    <td class="name">{{$opp->partner}}</td>
                                    <td>
                                        @if($opp->status == 'bidding')
                                        <span class="badge badge-complete" style="background: red;">{{$opp->status}}</span>
                                        @elseif($opp->status == 'quote')
                                        <span class="badge badge-complete" style="background: orange;">{{$opp->status}}</span>
                                        @elseif($opp->status == 'deployment')
                                        <span class="badge badge-complete" style="background: navy;">{{$opp->status}}</span>
                                        @else
                                        <span class="badge badge-complete">{{$opp->status}}</span>
                                        @endif
                                    </td>
                                    <td class="name">{{$opp->created_at}}</td>

                                    <td>
                                        <span style="background: red" class="badge">
                                            <a onclick="return confirm('Are you sure???')" style="color: white;" href="{{route('deleteOppurtunity',['id'=>$opp->id])}}">Delete</a>
                                        </span>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table class="table ">
                            <thead>

                            </thead>
                        </table>
                    </div>
                    <!-- /.table-stats -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-lg-8 -->

    </div>
</div>
</div>
<!-- /.orders -->
</div>


@endsection
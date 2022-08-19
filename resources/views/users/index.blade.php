@extends('users.layout.main')

@section('content')

<!-- Content -->
<div class="content" style="background-color: #ccc;">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row container-fluid">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$totalOppurtunity}}</span></div>
                                    <div class="stat-heading">Total</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-cart"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$completedOppurtunity}}</span></div>
                                    <div class="stat-heading">Completed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$inProgressOppurtunity}}</span></div>
                                    <div class="stat-heading">In Progress</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Widgets -->

        <div class="clearfix"></div>
        <!-- Tasks -->
        <div class="tasks container-fluid">
            <div class="row">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Oppurtunities</h4>
                        </div>
                        <div class="card-body container">
                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">Partner</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">D.O.C</th>
                                            <th scope="col">Edit</th>
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
                                                @if($opp->status == 'proposal')
                                                <span class="badge badge-complete" style="background: orange;">{{$opp->status}}</span>
                                                @elseif($opp->status == 'bidding')
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
                                                <span class="badge badge-complete">
                                                    <a style="color: white;" href="{{route('editOppurtunityForm',['id'=>$opp->id])}}">Edit</a>
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
        <!-- /.col-md-4 -->
    </div>
</div>
<!-- /.orders -->
</div>
<!-- /.content -->
<div class="clearfix"></div>

@endsection
@extends('users.layout.main')

@section('content')


<div class="content">
    <div class="animated fadeIn">


        <div class="container">
            <div class="">
                @foreach($oppurtunity as $opp)
                    <div class="card">
                        <form action="{{route('editOppurtunity')}}" method="post">
                            {{csrf_field()}}
                            <div class="card-header"><strong>Edit Oppurtunity</strong><small> Form</small></div>
                            <div class="card-body card-block">
                                <input type="hidden" name="id" value="{{$opp->id}}">
                                <div class="form-group">
                                    <label for="title" class=" form-control-label">Customer</label>
                                    <input type="text" id="company" name="customer" value="{{$opp->customer}}" placeholder="Enter task title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="select" class="form-control-label">Service</label>
                                    <select id="select" class="form-control" name="service">
                                        
                                        @if($opp->service == 'notap')
                                        <option value="notap" selected>NOTAP</option>
                                        <option value="sophos">SOPHOS</option>
                                        <option value="fortinet">FORTINET</option>
                                        <option value="bespoke">Bespoke Service</option>
                                        @elseif($opp->service == 'sophos')
                                        <option value="notap">NOTAP</option>
                                        <option value="sophos" selected>SOPHOS</option>
                                        <option value="fortinet">FORTINET</option>
                                        <option value="bespoke">Bespoke Service</option>
                                        @elseif($opp->service == 'fortinet')
                                        <option value="notap">NOTAP</option>
                                        <option value="sophos">SOPHOS</option>
                                        <option value="fortinet" selected>FORTINET</option>
                                        <option value="bespoke">Bespoke Service</option>
                                        @else
                                        <option value="notap">NOTAP</option>
                                        <option value="sophos">SOPHOS</option>
                                        <option value="fortinet">FORTINET</option>
                                        <option value="bespoke" selected>Bespoke Service</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="description" class=" form-control-label">Description</label><input type="text" id="vat" name="description" value="{{$opp->description}}" placeholder="Enter task description" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="description" class=" form-control-label">Duration</label><input type="text" id="vat" name="duration" value="{{$opp->duration}}" placeholder="Enter duration in weeks" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="description" class=" form-control-label">Partner</label><input type="text" id="vat" name="partner" value="{{$opp->partner}}" placeholder="Enter task description" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="select" class="form-control-label">Status</label>
                                    <select id="select" class="form-control" name="status">
                                        
                                        @if($opp->status == 'proposal')
                                        <option value="bidding" selected>Proposal</option>
                                        <option value="bidding">Bidding</option>
                                        <option value="quote">Quote</option>
                                        <option value="deployment">Deployment</option>
                                        <option value="complete">Complete</option>
                                        @elseif($opp->status == 'bidding')
                                        <option value="bidding">Proposal</option>
                                        <option value="bidding" selected>Bidding</option>
                                        <option value="quote">Quote</option>
                                        <option value="deployment">Deployment</option>
                                        <option value="complete">Complete</option>
                                        @elseif($opp->status == 'quote')
                                        <option value="bidding">Proposal</option>
                                        <option value="bidding">Bidding</option>
                                        <option value="quote" selected>Quote</option>
                                        <option value="deployment">Deployment</option>
                                        <option value="complete">Complete</option>
                                        @elseif($opp->status == 'deployment')
                                        <option value="bidding">Proposal</option>
                                        <option value="bidding">Bidding</option>
                                        <option value="quote">Quote</option>
                                        <option value="deployment" selected>Deployment</option>
                                        <option value="complete">Complete</option>
                                        @else
                                        <option value="bidding">Proposal</option>
                                        <option value="bidding">Bidding</option>
                                        <option value="quote">Quote</option>
                                        <option value="deployment">Deployment</option>
                                        <option value="complete" selected>Complete</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Edit</span>
                                </button>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>

        </div>


    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>


@endsection
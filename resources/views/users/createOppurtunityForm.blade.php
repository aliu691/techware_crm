@extends('users.layout.main')

@section('content')

<div class="content">
    <div class="animated fadeIn">


        <div class="container">
            <div class="">
                <div class="card">
                    <form action="{{route('createNewOppurtunity')}}" method="post">
                        {{csrf_field()}}
                        <div class="card-header"><strong>Oppurtunity</strong><small> Form</small></div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="customer" class=" form-control-label">Customer</label>
                                <input type="text" id="company" name="customer" placeholder="Enter Customer Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="select" class="form-control-label">Service</label>
                                <select id="select" class="form-control" name="service">
                                    <option value="notap">NOTAP</option>
                                    <option value="sophos">SOPHOS</option>
                                    <option value="fortinet">FORTINET</option>
                                    <option value="bespoke">Bespoke Service</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description" class=" form-control-label">Description</label><input type="text" id="vat" name="description" placeholder="Enter service description" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">Duration</label><input type="number" id="country" name="duration" placeholder="duration in weeks" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description" class=" form-control-label">Partner</label><input type="text" id="vat" name="partner" placeholder="Partner Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="select" class="form-control-label">Status</label>
                                <select id="select" class="form-control" name="status">
                                    <option value="proposal">Proposal</option>
                                    <option value="bidding">Bidding</option>
                                    <option value="quote">Quote</option>
                                    <option value="deployment">Deployment</option>
                                    <option value="complete">Complete</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>


    </div><!-- .animated -->
</div><!-- .content -->


@endsection
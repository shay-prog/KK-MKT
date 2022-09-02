@extends('layout.app')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
<form method="get" action="{{route('eggsOrder')}}" name="eggsform">
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">

                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Kroilers F1 Fertized eggs</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="order1">Make Order</button></span></h2>
                                    <p class="text-muted mb-0">Total income: $22506 <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>10.25%</span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Kroilers F2 Fertized eggs</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="order2">Make Order</button></span></h2>
                                    <p class="text-muted mb-0">Total sales: 2398 <span class="float-right"><i class="fa fa-caret-down text-danger mr-1"></i>7.85%</span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Kenbro Fertized eggs</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="order3">Make Order</button></span></h2>
                                    <p class="text-muted mb-0">Total users: 121 M <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>3.64%</span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Un Fertized consumable eggs</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="order4">Make Order</button></span></h2>
                                    <p class="text-muted mb-0">Total revenue: $1.2 M <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>17.48%</span></p>
                                </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
@endsection

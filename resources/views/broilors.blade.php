@extends('layout.login')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
<form method="get" action="{{route('eggsOrder')}}" name="eggsform">
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">

                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Broilors</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="broilors">Make Order</button></span></h2>
                                    <p class="text-muted mb-0">Total income: $22506 <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>10.25%</span></p>
                                </div>
                            </div>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
@endsection

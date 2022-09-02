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
                                    <h4 class="mt-0 font-16">Chicken/Geese/Quels Eggs</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="chicken">Book Incubation</button></span></h2>
                                    <p class="text-muted mb-0"></b>Cost per egg: Ksh 30</b> <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>10.25%</span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Turkey Eggs </h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="turkey">Book Incubation</button></span></h2>
                                    <p class="text-muted mb-0"></b>Cost per egg: Ksh 50</b> <span class="float-right"></span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Ducks</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="duck">Book Incubation</button></span></h2>
                                    <p class="text-muted mb-0"></b>Cost per egg: Ksh 40</b> <span class="float-right"></span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Guinea Fowl Eggs</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="guinea">Book Incubation</button></span></h2>
                                    <p class="text-muted mb-0"></b>Cost per egg: Ksh 45</b></p>
                                </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>


                  @if(Session::has('success'))
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Success!</strong>{{Session::get('message','')}}
                  </div>
                  @endif
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <div class="card bg-gradient-success">
        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

          <h3 class="card-title">
            <i class="far fa-calendar-alt"></i>
            Calendar
          </h3>
          <!-- tools card -->
          <div class="card-tools">
            <!-- button with a dropdown -->
            <div class="btn-group show">
              <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52" aria-expanded="true">
                <i class="fas fa-bars"></i>
              </button>
              <div class="dropdown-menu show" role="menu" style="position: absolute; transform: translate3d(-52px, 31px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                <a href="#" class="dropdown-item">Add new event</a>
                <a href="#" class="dropdown-item">Clear events</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">View calendar</a>
              </div>
            </div>
            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-0">
          <!--The calendar -->
          <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour">
              <ul class="list-unstyled">
                  <li class="show">
                      <div class="datepicker">
                          <div class="datepicker-days" style="">
                              <table class="table table-sm"
                              ><thead>
                                  <tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">November 2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="10/31/2021" class="day old weekend">31</td><td data-action="selectDay" data-day="11/01/2021" class="day">1</td><td data-action="selectDay" data-day="11/02/2021" class="day">2</td><td data-action="selectDay" data-day="11/03/2021" class="day">3</td><td data-action="selectDay" data-day="11/04/2021" class="day">4</td><td data-action="selectDay" data-day="11/05/2021" class="day">5</td><td data-action="selectDay" data-day="11/06/2021" class="day weekend">6</td></tr><tr><td data-action="selectDay" data-day="11/07/2021" class="day weekend">7</td><td data-action="selectDay" data-day="11/08/2021" class="day">8</td><td data-action="selectDay" data-day="11/09/2021" class="day">9</td><td data-action="selectDay" data-day="11/10/2021" class="day">10</td><td data-action="selectDay" data-day="11/11/2021" class="day">11</td><td data-action="selectDay" data-day="11/12/2021" class="day">12</td><td data-action="selectDay" data-day="11/13/2021" class="day weekend">13</td></tr><tr><td data-action="selectDay" data-day="11/14/2021" class="day weekend">14</td><td data-action="selectDay" data-day="11/15/2021" class="day">15</td><td data-action="selectDay" data-day="11/16/2021" class="day">16</td><td data-action="selectDay" data-day="11/17/2021" class="day">17</td><td data-action="selectDay" data-day="11/18/2021" class="day">18</td><td data-action="selectDay" data-day="11/19/2021" class="day">19</td><td data-action="selectDay" data-day="11/20/2021" class="day weekend">20</td></tr><tr><td data-action="selectDay" data-day="11/21/2021" class="day weekend">21</td><td data-action="selectDay" data-day="11/22/2021" class="day">22</td><td data-action="selectDay" data-day="11/23/2021" class="day">23</td><td data-action="selectDay" data-day="11/24/2021" class="day">24</td><td data-action="selectDay" data-day="11/25/2021" class="day">25</td><td data-action="selectDay" data-day="11/26/2021" class="day active today">26</td><td data-action="selectDay" data-day="11/27/2021" class="day weekend">27</td></tr><tr><td data-action="selectDay" data-day="11/28/2021" class="day weekend">28</td><td data-action="selectDay" data-day="11/29/2021" class="day">29</td><td data-action="selectDay" data-day="11/30/2021" class="day">30</td><td data-action="selectDay" data-day="12/01/2021" class="day new">1</td><td data-action="selectDay" data-day="12/02/2021" class="day new">2</td><td data-action="selectDay" data-day="12/03/2021" class="day new">3</td><td data-action="selectDay" data-day="12/04/2021" class="day new weekend">4</td></tr><tr><td data-action="selectDay" data-day="12/05/2021" class="day new weekend">5</td><td data-action="selectDay" data-day="12/06/2021" class="day new">6</td><td data-action="selectDay" data-day="12/07/2021" class="day new">7</td><td data-action="selectDay" data-day="12/08/2021" class="day new">8</td><td data-action="selectDay" data-day="12/09/2021" class="day new">9</td><td data-action="selectDay" data-day="12/10/2021" class="day new">10</td><td data-action="selectDay" data-day="12/11/2021" class="day new weekend">11</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month active">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year active">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
        </div>
        <!-- /.card-body -->
      </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop

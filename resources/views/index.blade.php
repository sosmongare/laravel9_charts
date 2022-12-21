@extends('layouts.links')
@section('content')
        <!-- Page Content-->

    <h2 class="text-center">Kenya: Population Per County from the released Census Report of 2019</h2>

    <p class="text-center"><span class="fw-bold">Source: </span> Kenya National Bureau of Statistics</h4> 
        <hr>
    <div class="row">
        <h5>Summary Statistics</h5>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                  Total Population
                </div>
                <div class="card-body">
                    <h4 class="total_population">{{ $total_population }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                  Male Population
                </div>
                <div class="card-body">
                    <h4>{{ $male_population }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                  Female Population
                </div>
                <div class="card-body">
                    <h4>{{ $female_population }}</h4>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h5>Charts Dashboards </h5>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="Year">Financial Year</label>
                <select class="form-control select2" id="Year" name="Year">
                <option value="2020/2021">2020/2021</option>
                <option value="2019/2020">2019/2020</option>
                <option value="2018/2019">2018/2019</option>
                <option value="2017/2018">2017/2018</option>
                <option value="2016/2017">2016/2017</option>
                <option value="2015/2016">2015/2016</option>
                <option value="2014/2015">2014/2015</option>
                <option value="2013/2014">2013/2014</option>
                </select>
                <span class="text-danger field-validation-valid" data-valmsg-for="Year" data-valmsg-replace="true"></span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="myChart" >

            </div>
        </div>
    </div>

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dropdown</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" rel="stylesheet" />
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2>Select Category</h2>
        </div>
    </div>
    <form action="{{ url('submit') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <select class="form-control select2" id="continent" name="continent" onchange="show_country(this.value)">
                    <option value="0">Select Continent </option>
                    @foreach ($continents as $continents_item)
                    <option value="{{ $continents_item->code }}">{{ $continents_item->name }}</option>
                    @endforeach        

                </select>
            </div>
            <div class="col-md-6">
                <select class="form-control select2" id="country" name="country" onchange="show_state(this.value)">
                    <option value="0">Select Country </option>
                </select>
            </div>

        </div>
        <br />
        <div class="row">
            <div class="col-md-6">
                <select class="form-control select2" id="state" name="state" onchange="show_city(this.value)">
                    <option value="0">Select State</option>

                </select>
            </div>
            <div class="col-md-6">
                <select class="form-control select2" id="city" name="city">
                    <option value="0">Select City</option>    
                </select>
            </div>
        </div>
        <br>

        <button class="btn btn-primary" type="submit">Submit</button>


    </form>
</div>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
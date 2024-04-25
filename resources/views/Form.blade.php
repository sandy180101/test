@extends('layouts.app')
@section('title',"Layouts")
@section('content')
    
<div class="container">
    <h2 style="justify-content:center;text-align:center;">
        <img src="{{ asset('public/assets/img/Email Siganture April End.gif') }}" alt="Digital Deccan Conclave" style="display:block;margin:auto;width:80%;">
    </h2>
    <form class="row g-3 pt-3"  id="registeration_form">
        @csrf
        <div class="col-md-6 form-group">
            <label for="personal_email">Personal Email</label>
            <input type="email" class="form-control" id="personal_email" name="personal_email">
        </div>
        <div class="col-md-6 form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-md-6 form-group">
            <label for="company_name">Company Name</label>
            <input type="text" class="form-control" id="company_name" name="company_name">
        </div>
        <div class="col-md-6 form-group">
            <label for="official_email">Official Email ID</label>
            <input type="email" class="form-control" id="official_email" name="official_email">
        </div>
        <div class="col-md-6 form-group">
            <label for="linkedin_profile">LinkedIn Profile Link</label>
            <input type="text" class="form-control" id="linkedin_profile" name="linkedin_profile">
        </div>
        <div class="col-md-6 form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="col-md-6 form-group">
            <label for="association_preference">How would you like to associate with Digital Deccan Conclave 2024 by IAMAI?</label>
            <select class="form-control" id="association_preference" name="association_preference">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
                <option value="5">Option 5</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="iamai_member">Are you a Member of IAMAI?</label>
            <select class="form-control" id="iamai_member" name="iamai_member">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="col-md-12 form-group">
            <label for="sector">Sector</label>
            <div>
                <input type="checkbox" id="sector1" name="sectors[]" value="Sector 1">
                <label for="sector1">Sector 1</label>
            </div>
            <div>
                <input type="checkbox" id="sector2" name="sectors[]" value="Sector 2">
                <label for="sector2">Sector 2</label>
            </div>
            <div>
                <input type="checkbox" id="sector3" name="sectors[]" value="Sector 3">
                <label for="sector3">Sector 3</label>
            </div>
            <div>
                <input type="checkbox" id="sector4" name="sectors[]" value="Sector 4">
                <label for="sector4">Sector 4</label>
            </div>
            <div>
                <input type="checkbox" id="sector5" name="sectors[]" value="Sector 5">
                <label for="sector5">Sector 5</label>
            </div>

        </div>
        <div class="col-md-12">
            <button type="submit" class="button" id="submitbutton"> &nbsp;Submit</button>
        </div>
    </form>
</div>

<script type="text/javascript"> var SITE_URL = "<?php echo config('constants.SITE_URL');?>/";</script>
<script type="text/javascript"> var ASSETS = "<?php echo config('constants.ASSETS');?>/";</script>  
<script type="text/javascript" src="{{url('public/validations/form.js')}}"></script>

@endsection
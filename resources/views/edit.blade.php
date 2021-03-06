@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Listing <a class="btn btn-primary btn-sm float-right" href="/dashboard">Go Back</a></div>

            <div class="card-body">
            {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method'=>'POST']) !!}

            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', $listing->name, ['class' => 'form-control', 'placeholder' => 'Company Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('address', 'Address')}}
                {{Form::text('address', $listing->address, ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}
            </div>
            <div class="form-group">
                {{Form::label('website', 'Website')}}
                {{Form::text('website', $listing->website, ['class' => 'form-control', 'placeholder' => 'Enter Website'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email', $listing->email, ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
            </div>
            <div class="form-group">
                {{Form::label('phone', 'Phone')}}
                {{Form::text('phone', $listing->phone, ['class' => 'form-control', 'placeholder' => 'Enter Phone'])}}
            </div>
            <div class="form-group">
                {{Form::label('bio', 'Bio')}}
                {{Form::textarea('bio', $listing->bio, ['class' => 'form-control', 'placeholder' => 'About the Business'])}}
            </div>
            <div class="form-group">
                {{Form::hidden('_method', 'PUT')}}
            </div>
            <div>
                {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
            </div>
        {! FoRm::ClosE() !}
        </dIv>
    </dIv>
</dIV>
@enDsecTion
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing <a class="btn btn-primary btn-sm float-right" href="/dashboard">Go Back</a></div>

            <div class="card-body">
            {!! Form::open(['action' => 'ListingsController@store', 'method'=>'POST']) !!}

            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Company Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('address', 'Address')}}
                {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}
            </div>
            <div class="form-group">
                {{Form::label('website', 'Website')}}
                {{Form::text('website', '', ['class' => 'form-control', 'placeholder' => 'Enter Website'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
            </div>
            <div class="form-group">
                {{Form::label('phone', 'Phone')}}
                {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Enter Phone'])}}
            </div>
            <div class="form-group">
                {{Form::label('bio', 'Bio')}}
                {{Form::textarea('bio', '', ['class' => 'form-control', 'placeholder' => 'About the Business'])}}
            </div>
            <div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</diV>
@endsection
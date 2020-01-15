@extends('layouts.admin')



@section('content')

    <div>
        <img src="{{$user->photo->file}}" alt="" style="width: 300px; margin-bottom: 50px;">
    </div>

    {!! Form::model(
    $user,
    [
        'method' => 'PATCH',
        'action' => ['AdminUsersController@update', $user->id],
        'files'  => 'true'
    ]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Deactive'), null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', array(1 => 'admin', 2 => 'subscriber', 3 => 'author'), null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id') !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}



    @include('inc.form.form_errors')





@endsection

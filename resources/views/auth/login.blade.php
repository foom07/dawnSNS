@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<p>DAWNSNSへようこそ</p>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('message'))
  <div class="alert alert-danger">
      {{session('message')}}
  </div>
@endif

{{ Form::label('e-mail') }}
{{ Form::text('mail',null,['class' => 'input']) }}
{{ Form::label('password') }}
{{ Form::password('password',['class' => 'input']) }}

{{ Form::submit('ログイン') }}

<p><a href="/register">新規ユーザーの方はこちら</a></p>

{!! Form::close() !!}

@endsection

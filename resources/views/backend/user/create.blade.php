@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>添加用户</h3>
        <div class="col-xs-12">
            @if ($errors->has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong>
                    {{ $errors->first('error', ':message') }}
                    <br />
                    请联系开发者！
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Form::open(['route' => 'backend.user.store', 'method' => 'post','class'=>'','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        <label for="name" class="">用户名</label>
                        <div class="">
                            {!! Form::text('name', '', ['class' => 'form-control','placeholder'=>'Username']) !!}
                            <font color="red">{{ $errors->first('name') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">邮箱</label>
                        <div class="">
                            {!! Form::text('email', '', ['class' => 'form-control','placeholder'=>'Email']) !!}
                            <font color="red">{{ $errors->first('email') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label>
                        <div class="">
                            {!! Form::text('password', '', ['class' => 'form-control','placeholder'=>'Password']) !!}
                            <font color="red">{{ $errors->first('password') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="">头像</label>
                        <div class="">
                            {!! Form::file('photo') !!}
                            <font color="red">{{ $errors->first('photo') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="">简介</label>
                        <div class="editor">
                            @include('editor::head')
                            {!! Form::textarea('desc', '', ['class' => 'form-control','id'=>'myEditor']) !!}
                            <font color="red">{{ $errors->first('desc') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            {!! Form::submit('创建', ['class' => 'ml btn btn-success']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection

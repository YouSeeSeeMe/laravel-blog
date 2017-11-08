@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>修改导航</h3>
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
                    {!! Form::model($nav, ['route' => ['backend.nav.update', $nav->id], 'method' => 'put','class'=>'']) !!}
                    <div class="form-group">
                        <label for="sequence">排序</label>
                        <div class="">
                            {!! Form::text('sequence', $nav->sequence, ['class' => 'form-control','placeholder'=>'sequence']) !!}
                            <font color="red">{{ $errors->first('sequence') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name"">导航名称</label>
                        <div class="">
                            {!! Form::text('name', $nav->name, ['class' => 'form-control','placeholder'=>'name']) !!}
                            <font color="red">{{ $errors->first('name') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url">链接地址</label>
                        <div>
                            {!! Form::text('url', $nav->url, ['class' => 'form-control','placeholder'=>'url']) !!}
                            <font color="red">{{ $errors->first('url') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            {!! Form::submit('修改', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
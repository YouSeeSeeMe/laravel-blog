@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>添加标签</h3>
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
                    {!! Form::open(['route' => 'backend.tags.store', 'method' => 'post','class'=>'']) !!}
                    <div class="form-group">
                        <label for="name">标签名</label>
                        <div class="">
                            {!! Form::text('name', '', ['class' => 'form-control','placeholder'=>'标签名称']) !!}
                            <font color="red">{{ $errors->first('name') }}</font>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            {!! Form::submit('添加', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

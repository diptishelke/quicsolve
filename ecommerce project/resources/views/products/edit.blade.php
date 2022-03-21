@extends('layouts.layouts')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="patient_index" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

   

    {{ Form::open(array('url' => 'product_store')) }}
                           {{Form::token();}}
                           Name:{{Form::text('name');}}<br/><br/>
                                @if ($errors->has('name'))
                                    <span style="color: red;">{{ $errors->first('name') }}</span>
                                @endif
                                model:{{Form::text('model');}}<br/><br/>
                            
                                @if ($errors->has('model'))
                                    <span style="color: red;">{{ $errors->first('model') }}</span>
                                @endif
                                description:{{Form::text('description');}}<br/><br/>
                            
                            @if ($errors->has('description'))
                                <span style="color: red;">{{ $errors->first('description') }}</span>
                            @endif
                           price:{{Form::text('price');}}<br/><br/>
                            
                            @if ($errors->has('price'))
                                <span style="color: red;">{{ $errors->first('price') }}</span>
                            @endif
                            {{Form::submit('save');}}
                            {{ Form::close() }}

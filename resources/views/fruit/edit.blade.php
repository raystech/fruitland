@extends('app')

@section('content')
        <div class="container">
        	@include("fruit.navbar")
        	<div class="row" style="padding-top:45px;">
		        <div class="col-md-12">
		            <h2>Edit fruit:</h2>
		            <div class="panel panel-default">
		                <div class="panel-body form-horizontal payment-form">
		                	<form action="../update/{{ $fruit->id}}" method="post">

			                    <div class="form-group">
			                        <label for="date" class="col-sm-3 control-label">Name</label>
			                        <div class="col-sm-4">
			                            <input type="date" class="form-control" name="name" value="{{$fruit->name}}">
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label for="date" class="col-sm-3 control-label">Color</label>
			                        <div class="col-sm-4">
			                            <input type="date" class="form-control" name="color" value="{{$fruit->color}}">
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label for="date" class="col-sm-3 control-label">Taste</label>
			                        <div class="col-sm-4">
			                            <input type="date" class="form-control" name="taste" value="{{$fruit->taste}}">
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <div class="col-sm-7 text-right">
			                        	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			                            <button type="submit" class="btn btn-default preview-add-button">
			                                <span class="fa fa-save"></span>&nbsp Save
			                            </button>
			                            {!! HTML::link('fruit', 'Cancel', array('class' => 'btn btn-default')) !!}
			                        </div>
			                    </div>
		                </div>
		            </div>       
		        </div>
		    </div>
		</div>
@endsection
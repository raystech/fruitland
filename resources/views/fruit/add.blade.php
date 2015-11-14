@extends('app')

@section('content')
        <div class="container">
            <div class="row" style="padding-top:45px;">
                <div class="col-md-12">
                	<h2>Add fruit:</h2>
                    <div class="panel panel-default">
                        <div class="panel-body form-horizontal payment-form">
                            <form action="store" method="post">
                                <div class="form-group">
                                    <label for="date" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date" class="col-sm-3 control-label">Color</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" name="color">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date" class="col-sm-3 control-label">Taste</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" name="taste">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-7 text-right">
                                    	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <button type="submit" class="btn btn-default preview-add-button">
                                        <span class="fa fa-plus-square-o"></span>&nbsp Add
                                        </button>
                                        {!! HTML::link('fruit', 'Cancel', array('class' => 'btn btn-default')) !!}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

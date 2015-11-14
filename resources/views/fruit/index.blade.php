@extends('app')

@section('content')
        <div class="container">
            <div class="row" style="padding-top:45px;">
                <h2>Welcome to Fruity</h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            @include("fruit.table")
                            <?php

                            //$student = new oci_connect($username, $password);
                            ?>
                        </div>
                    </div>
                </div>
                <a href="fruit/add" ><button type="button" class="btn btn-primary pull-right">Add more Fruit</button></a>
            </div>
        </div>

@endsection
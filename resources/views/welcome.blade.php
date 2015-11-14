@extends('app')

@section('content')
	<style type="text/css">
		body {
			background-image: url(bg.jpg);
		}
	</style>
    <div class="container">
        <div class="row" style="padding-top: 60px;">
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="fruit" class="btn btn-default btn-xl">Get Started!</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@include("fruit.footer")
@endsection
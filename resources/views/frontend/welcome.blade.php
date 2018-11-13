@extends('frontend.layout.frontend')

@section('extra_css')
<style>
body{
	background: white;
	height: 100%;
}
li{
	list-style: none;
}
</style>
@endsection
@section('content')
            <div class="content">
            	<ul>
            	<li><a class="btn btn-primary" href="{{ url('inventory') }}" role="button">School Inventory Form</a></li>	
            	<li><a class="btn btn-primary" href="{{ url('monitoring') }}" role="button">School Monitoring Form</a></li>	
            	<li><a class="btn btn-primary" href="{{ url('survey') }}" role="button">School Survey Form</a></li>	
            	<li><a class="btn btn-primary" href="{{ url('training') }}" role="button">Training Need Assessment - Monitoring Tool</a></li>
            	<li><a class="btn btn-primary" href="#" role="button">Settings</a></li>		
            	</ul>
            </div>
 @endsection
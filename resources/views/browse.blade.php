@extends('layouts.master')
@section('content')
<div id="page-wrapper">
	<div class="inner-content">
		<div class="music-browse">
			<!--albums-->
			<!-- pop-up-box -->
			<link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all">
			<script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
			<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
					});
			</script>
			<!--//pop-up-box -->
			<div class="browse">
				<div class="tittle-head two">
					<h3 class="tittle">New Releses <span class="new">New</span></h3>
					<div class="clearfix"> </div>
				</div>
				@php
				$songCount = 1;
				@endphp
				@foreach ($album as $item)
				@if ($songCount == 1 || $songCount == 7 || $songCount == 13)
				<div class="row" style="margin-left: 0;margin-right: 0">
					<div class="col-md-3 browse-grid">
						<a  href="{{URL::route('albums', $item->albumid)}}"><img src="{{$item->thumbnail}}" title="{{$item->title}}"></a>
						<a href="{{URL::route('albums', $item->albumid)}}"></a>
						<a class="sing"
							style="font-size: 0.9em !important;font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif !important;"
							href="{{URL::route('albums', $item->albumid)}}">
							{{$item->title}}
						</a>
					</div>
				@elseif ($songCount % 6 != 0)
					<div class="col-md-3 browse-grid">
						<a  href="{{URL::route('albums', $item->albumid)}}"><img src="{{$item->thumbnail}}" title="{{$item->title}}"></a>
						<a href="{{URL::route('albums', $item->albumid)}}"></a>
						<a class="sing"
							style="font-size: 0.9em !important;font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif !important;"
							href="{{URL::route('albums', $item->albumid)}}">
							{{$item->title}}
						</a>
					</div>
				@else
					<div class="col-md-3 browse-grid">
						<a  href="{{URL::route('albums', $item->albumid)}}"><img src="{{$item->thumbnail}}" title="{{$item->title}}"></a>
						<a href="{{URL::route('albums', $item->albumid)}}"></a>
						<a class="sing"
							style="font-size: 0.9em !important;font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif !important;"
							href="{{URL::route('albums', $item->albumid)}}">
							{{$item->title}}
						</a>
					</div>
				</div>
				@endif
				@php
				$songCount++
				@endphp
				@endforeach
				<div class="clearfix"> </div>
			</div>
			<!--//End-albums-->
			<!--//discover-view-->
			<div class="albums fourth">
				<div class="tittle-head two">
					<h3 class="tittle">Discover <span class="new">View</span></h3>
					<div class="clearfix"> </div>
				</div>
				@foreach ($discover as $item)
				<div class="col-md-3 artist-grid">
					<a href="{{URL::route('albums', $item->albumid)}}"><img src="{{$item->thumbnail}}" title="{{$item->title}}"></a>
					<div class="inner-info"><h5>{{$item->title}}</h5></div>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
			<!--//music-left-->
		</div>
	</div>
	<div class="clearfix"></div>
	<!--body wrapper end-->
	<!-- /w3l-agile-info -->
</div>
<!--body wrapper end-->
@stop
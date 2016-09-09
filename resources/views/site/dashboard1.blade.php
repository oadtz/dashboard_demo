<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('bower_components/golden-layout/src/css/goldenlayout-base.css')}}">
	<link rel="stylesheet" href="{{asset('bower_components/golden-layout/src/css/goldenlayout-light-theme.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/kendoui/styles/kendo.common.min.css')}}" />
    <link rel="stylesheet" href="{{asset('bower_components/kendoui/styles/kendo.default.min.css')}}" />
	<title>Dashboard with Golden Layout</title>
</head>
<body ng-controller="DashboardController">

	<template type="text/html" id="stockChartTmpl">
		@include('dashboard.stock_chart')
	</template>

	<template type="text/html" id="stationListTmpl">
		@include('dashboard.stations')
	</template>

	<template type="text/html" id="chatTmpl">
		@include('dashboard.chat')
	</template>
	<script src="{{asset('bower_components/jquery/dist/jquery.js')}}"></script>
	<script src="{{asset('bower_components/angular/angular.js')}}"></script>
	<script src="{{asset('bower_components/golden-layout/dist/goldenlayout.js')}}"></script>
    <script src="{{asset('bower_components/kendoui/js/kendo.all.min.js')}}"></script>
	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/dashboard1.js')}}"></script>
</body>
</html>
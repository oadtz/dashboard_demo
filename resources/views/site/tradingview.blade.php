<!DOCTYPE html>
<html ng-app="dashboard">
<head>
  <link rel="stylesheet" href="{{asset('bower_components/kendoui/styles/kendo.common.min.css')}}" />
  <link rel="stylesheet" href="{{asset('bower_components/kendoui/styles/kendo.uniform.min.css')}}" />
	<title>Dashboard with Golden Layout</title>
	<style>
		html,body {
		  background : #eee no-repeat center;
		  height:100%;
	    margin:0;
	    padding:0;
	    overflow:hidden;
		}
    [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
      display: none !important;
    }
	</style>
</head>
<body ng-controller="DashboardController">

    <div kendo-window="signin" k-title="'Sign In'" ng-controller="SignInController" ng-cloak>
        <form ng-submit="signIn()">
          <div class="k-content">
            <label>Name:</label>
            <input type="text" class="k-input" ng-model="username" style="width: 100%;" />
          </div>
          <div class="k-content">
            <kendo-button type="submit" class="k-button">Submit</kendo-button>
          </div>
        </form>
    </div>
    <div kendo-splitter
    	 options="mainLayoutOptions" style="height: 100%" ng-cloak>
        <div>
      		@include('dashboard.trading_view')
        </div>
        <div kendo-splitter
        	 options="navLayoutOptions" style="height: 100%">
        	<div>
          		@include('dashboard.favorites')
          	</div>
          	<div>
          		@include('dashboard.chat')
          	</div>
        </div>
      </div>
    </div>
	<script src="{{asset('bower_components/kendoui/js/jquery.min.js')}}"></script>
	<script src="{{asset('bower_components/kendoui/js/angular.min.js')}}"></script>
  <script src="{{asset('bower_components/angular-cookies/angular-cookies.js')}}"></script>
  <script src="{{asset('bower_components/kendoui/js/kendo.all.min.js')}}"></script>
  <script src="{{asset('bower_components/charting_library/charting_library.min.js')}}"></script>
  <script src="{{asset('bower_components/charting_library/datafeed/udf/datafeed.js')}}"></script>
	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
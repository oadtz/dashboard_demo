<div ng-controller="StockChartController" style="width: 100%; height: 100%; overflow: hidden">
	
	<div ng-show="station" kendo-toolbar k-options="toolbarOptions"></div>
	<div ng-show="station" kendo-stock-chart="stockChart"
		k-options="options"
	    style="width: 100%; height: 95%;"></div>
	<img ng-hide="station" src="http://placehold.it/500?text=Please+select+station" style="width: 100%; height: 100%">


	<script type="text/x-kendo-template" id="stockChartTooltip">
	    <input type="text" class="k-input" ng-model="xxxx">
	    <kendo-button>Ok</kendo-button>
	</script>
</div>
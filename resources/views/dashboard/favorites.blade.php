<div ng-controller="FavoriteController" style="width: 100%; height: 100%; overflow: hidden">
    <div kendo-toolbar k-options="toolbarOptions"></div>
	<div kendo-grid="myFavoriteGrid"
		k-data-source="symbols"
		k-options="options"
		k-on-change="selectSymbol(data)"
	    style="width: 100%; height: 95%;"></div>
</div>
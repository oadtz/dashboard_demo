<div ng-controller="StationController" style="width: 100%; height: 100%; overflow: hidden">
    <div kendo-toolbar k-options="toolbarOptions"></div>
	<div kendo-grid="stationGrid"
		k-data-source="stations"
		k-options="options"
		k-on-change="selectStation(data)"
	    style="width: 100%; height: 95%;"></div>
</div>
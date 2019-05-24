<div class="row" ng-controller="typecongeCtrl">
	<div class="col-md-4">
<table class="table table-striped">
	<thead>
		<th>Nom Type conge</th>
		<th>Duree en jours</th>
		<th>Congés</th>
	</thead>
	<tbody>
		<tr ng-repeat="type in typeconge">
			<td>{{ type.tc_name}}</td>
			<td>{{ type.tc_nombre_jr_max}} jr</td>
			<td><a href="{{ type.id}}">details</a></td>
		</tr>
	</tbody>
</table>

	</div>
</div>

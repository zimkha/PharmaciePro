<div class="row" ng-controller="mainController">
   <div class="col-md-12">
   	<div class="row">
   		  <div class="col-md-4">
   		  	 <h3 ng-if=" SingleVehicule.vh_disponibilite == 1">
   	    		<span class="badge badge-primary">Disponible Pour Une livraison</span>
   	    	</h3>
   		  </div>
   	       <div class="col-md-6">
   	    	<h3 ng-if="SingleVehicule.vh_statut == 1"><span class="badge badge-success">Disponible Pour Une Livraison</span></h3>
   	    	
   	</div>
   	   </div>
   		<table class="table table-striped">
   		<thead>
   			<th>Matricule</th>
   			<th>Poids</th>
   			<th>Long</th>
   			<th>Large</th>
   			<th>Haute</th>
   			<th>Ptrac</th>
   			<th>Ptac</th>
   			
   		</thead>
   		<tbody>
   			<tr>
   				<td>{{ SingleVehicule.vh_matricule}}</td>
   				<td>{{ SingleVehicule.vh_poids}} Tonnes</td>
   				<td>{{ SingleVehicule.vh_longueur}} Mêtre</td>
   				<td>{{ SingleVehicule.vh_largeur}} Mêtre</td>
   				<td>{{ SingleVehicule.vh_hauteure}} Mêtre</td>
   				<td>{{ SingleVehicule.vh_ptra}} Tonnes</td>
   				<td>{{ SingleVehicule.vh_ptac}}  Tonnes</td>

	   		</tbody>
   		</table>
   </div>
   <div class="col-md-12">
   		Les Informations sur les Livraisons Affectations du Vehicules
   </div>
</div>
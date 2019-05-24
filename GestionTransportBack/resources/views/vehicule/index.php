<div class="row" ng-controller="mainController">
 <div class="col-md-12">
<div class="form-row align-items-center">
	<div class="row">
	<div class="col-md2">
	<form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="col-md-6">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"> Nouveau</button>
    </div>
    </div>
</div>
<br>
 	<small> 

    <table class="table table-striped table-bordered">
    	<thead>
    		<th>Matricule</th>
    		<th>Poids</th>
    		<th>Longueur</th>
    		<th>Largeur</th>
    		<th>Hauteur</th>
    		<th>Essieu</th>
    		<th>PTAC</th>
    		<th>PTRA</th>
    		<th>Status</th>
    		<th>Dispo</th>
    		<th>Action</th>

    		<tbody>
    			<tr ng-repeat="vehicule in vehicules">
    				<td>{{ vehicule.vh_matricule }}</td>
    				<td>{{ vehicule.vh_poids }}</td>
    				<td>{{ vehicule.vh_longueur }}</td>
    				<td>{{ vehicule.vh_largeur }}</td>
    				<td>{{ vehicule.vh_hauteure }}</td>
    				<td>{{ vehicule.vh_essieu }}</td>
    				<td>{{ vehicule.vh_ptac }}</td>
    				<td>{{ vehicule.vh_ptra }}</td>
    				<td ng-if=vehicule.vh_statut == 1><span class="badge badge-success">Disponible</span></td>
    					<td ng-if=vehicule.vh_disponibilite == 1><span class="badge badge-primary">Disponible</span></td>
    					<td>
    						<a href="#/vehicule/{{ vehicule.id }}"><button  class="btn btn-primary btn-sm">Affecter</button></a>
    						<a href="#/{{ vehicule.id }}"><button  class="btn btn-secondary btn-sm">Details</button></a>
    					</td>
    			</tr>
    		</tbody>
    	</thead>
    </table>
 	</small>
 </div>
</div>



<!-- Modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	    <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Nouveau Véhicule</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
      		</div>
    	
		    	<form class="form-horizontal" method="post" ng-submit="addvehicule()">	
		    	 <div class="modal-body">	
		          <div class="container">
		          	<div class="row">  		
		         	<div class="col-md-4">
		     		<div class="form-group">
		     			<label for="poids">Poids</label>
		     			<input type="text" class="form-control" name="vh_poids" ng-model="vh_poids">
		     		</div>
		     		</div>
		     		<div class="col-md-4">
		     		<div class="form-group">
		     			<label for="poids">Largeur</label>
		     			<input type="text" class="form-control" name="vh_largeur" ng-model = "vh_largeur">
		     		</div>
		     		</div>
		     		<div class="col-md-4">
		     		<div class="form-group">
		     			<label for="poids">Longueur</label>
		     			<input type="text" class="form-control" name="vh_longueur" ng-model="vh_longueur">
		     		</div>
		     		</div>
		          	</div>
		          	<div class="row">
		          		<div class="col-md-4">
		          			<label>Hauteur</label>
		          			<input type="text" name="vh_hauteure" class="form-control" ng-model="vh_hauteure">
		          		</div>
		          		<div class="col-md-4">
		          			<label>Essieu</label>
		          			<input type="text" name="vh_essieu" class="form-control" ng-model ="vh_essieu">
		          		</div>
		          		<div class="col-md-4">
		          			<label>Type de Vehicule</label>
		          			<select name="typevehicule_id" ng-model="typevehicule_id">
		          	<option  ng-repeat=" type in typevehicule" value="{{ type.id }}"  name="typevehicule_id"  class="form-control">{{ type.tp_name }}</option>
		          			</select>
		          		</div>
		          	</div>
		          	<div class="row">
		          		<div class="col-md-6">
		          			<label>Ptra</label>
		          			<input type="text" name="vh_ptra" class="form-control" ng-model ="vh_ptra">
		          		</div>
		          		<div class="col-md-6">
		          			<label>Ptac</label>
		          			<input type="text" class="form-control" name="vh_ptac" ng-model="vh_ptac">
		          		</div>

		          	</div>
		          	<div class="row">
		          			<div class="col-md-4"><br><br>
		          			<label>Status </label>
		          				 <input type="checkbox" ng-model="checkStatus.Status" ng-model ="vh_statut" ng-true-value="true" ng-false-value="false">
		          		</div>
		          		<div class="col-md-4">
		          			<label>Image</label>
		          			<input type="file" name="image" ng-model = "image" class="form-control">
		          	</div>
		    		 </div>
		    		  </div>
		    		   <div class="modal-footer">
		    		   	<div class="form-group">
		    		   		<button type="submit" class="btn btn-primary ">
		    		   			Enregistre
		    		   		</button>
		    		   	</div>
    					</div>
		    	</form>
   
   
</div>
  </div>
</div>
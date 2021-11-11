@extends('welcome')

@section('page')
	<div class="container">
		<br>
		<br>
		<br>
		<form class="col-sm" action="send_files" method="POST" enctype="multipart/form-data">
			@csrf
			<center>
				<h4>Mettre un fichier dans le cloud :</h4>
				<div class="col-auto">
				    <div class="col-sm">
				    	@error('files')
				    	 <div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:#E8C2C7;">
						 Merci de bien vouloir choisir un fichier.
						  <button type="button" class="btn-close rounded-pill" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>  
						@enderror
  					   <input class="form is-invalid" name="files" type="file">
  					   <input type="submit" class="btn btn-secondary rounded-pill" name="ok" value="uploader">
				    </div>
				</div>
			</center>
		</form>
		<br>
	<div class="accordion accordion-flush" id="accordionFlushExample">
		  <div class="accordion-item">
		    <h2 class="accordion-header" id="flush-headingOne">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color:#E2EEF1;">
		        Mes fichiers dans le cloud
		      </button>
		    </h2>
		    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
		      <div class="accordion-body">

		      </div>
		    </div>
		  </div>
		</div>
	</div>
@endsection
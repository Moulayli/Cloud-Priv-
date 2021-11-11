@extends('welcome')

@section('page')
	<div class="container">
		<br>
		<br>
		<br>
	<form action="action_traduction" method="post">
		@csrf
		<div>
			<label for="exampleDataList" class="form-label"></label>
			<input class="form-control" name="langue" list="datalistOptions" id="exampleDataList" placeholder="Anglais => Français" value="Anglais => Français">
			<datalist id="datalistOptions">
			  <option value="Anglais => Français">
			  <option value="Français => Anglais">
			  <option value="Espagnol => Français">
			  <option value="Français => Espagnol">
			</datalist>
		</div>
		<br>
		<div class="form-floating">
		  <textarea class="form-control" placeholder="Votre text" name="text" id="floatingTextarea2" style="height: 100px"></textarea>
		  <label for="floatingTextarea2">Text à traduire</label>
		</div>
		<br>
		<input type="submit" class="btn btn-secondary rounded-pill" name="ok" value="Traduire" >
	</form>
	</div>
@endsection
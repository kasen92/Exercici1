<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Kadwa' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


</head>
<body>

	<section>
		<div class="contenedor">
			<div>
				<input type="text" placeholder="Número 1" id="num1">
				<select name="operation" id="operacion">
					<option value="Add">+</option>
					<option value="Substract">-</option>
					<option value="Multiply">*</option>
					<option value="Division">/</option>
				</select>
				<input type="text" placeholder="Número 2" id="num2">
			</div>
			<div>
				<button id="calcular">Calcular</button>
			</div>
			<div>
				<input type="text" id="res" placeholder="Resultado">
			</div>
		</div>
		<div
			<span>
				<label for="pais">Pais:</label>
				<select name="country" id="pais">
					<option value="spain">Espanya</option>
					<option value="france">França</option>
				</select>
			</span>
			<button id="tempss">Obtenir la informació del temps</button>
			<div id="ciutats" style="color:white;"></div>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#calcular").click(function() {
				$.ajax({
					url:"lanzador.php", 
					type:"POST",
					data:{'num1': $("#num1").val(),'num2':$("#num2").val(),'operacion':$("#operacion").val()},
					success: function(output){
						$("#res").val(output);
					},                   
					error: function(output){
						console.log(output);
					}
				});
			});

			$("#tempss").click(function() {
				$.ajax({
					url:"tiempo.php", 
					type:"POST",
					data:{'pais':$("#pais").val()},
					beforeSend: function() {
						$("#ciutats p").remove();
					},
					success: function(output){
						$("#ciutats").html(output);
					},                   
					error: function(output){
						console.log(output);
					}
				});
			});
		});
	</script>
</body>
</html>
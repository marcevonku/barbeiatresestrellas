<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('structure/head.php') ?>
</head>
<body>

<header class="cabecera">
    <div class="caja">
        <?php include('structure/navbar.php') ?>
    </div>
</header>
<main>
<div class="container-fluid background-container-cuatro">
    <br>
    <br>
    <br>
    <div class="row">
        <!-- En pantallas grandes, la imagen ocupará 6 columnas a la izquierda -->
        <div class="col-lg-3">
            <img src="img/logo.jpg" alt="Descripción de la imagen" class="img-responsive mx-auto d-block">
            <br>
            <br>
        </div>
    </div>
</div>
<div class="titulo-uno">
	<label for=""><h2>SELECCIONA TU BARBERO</h2></label>
</div class="container">
<div class="row">
	<div class="col-lg-3">
		<br>
	</div>
	<div class="col-md-6">
		<select id="opciones" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
		    <option selected style="text-align: center;">SELECCIONA TU BARBERO</option>
		    <option value="seccion1">LAUTARO</option>
		    <option value="seccion2">MATÍAS</option>
		    <option value="seccion3">BENJAMÍN</option>
		</select>
	</div>	
	<div class="col-lg-3">
		<br>
	</div>
</div>	

<!-----------------------primer calendario Lautaro------------------------------------>

<div class="row">
	<div class="col-lg-3">
	
	</div>
	<div class="col-lg-6">
		<div class="container" id="seccion1" style="display: none;">
			<div class="row">
				<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=America%2FArgentina%2FBuenos_Aires&mode=WEEK&src=bWFyY2V2b25rdUBnbWFpbC5jb20&src=ZXMuYXIjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23F4511E&color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
	
	</div>
</div>

<!-----------------------primer calendario Matias------------------------------------>

<div class="row">
	<div class="col-lg-3">
		
	</div>		
	<div class="col-lg-6">
		<div class="container" id="seccion2" style="display: none;">
			<div class="row">
				<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=America%2FArgentina%2FBuenos_Aires&mode=WEEK&src=bWFyY2V2b25rdUBnbWFpbC5jb20&src=ZXMuYXIjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23F4511E&color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>	
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		
	</div>
</div>
					
<!-----------------------segundo calendario Benjamín------------------------------------>

<div class="row">
	<div class="col-lg-3">
		
	</div>
	<div class="col-md-6">
		<div class="container" id="seccion3" style="display: none;">
			<div class="row">
				<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=America%2FArgentina%2FBuenos_Aires&mode=WEEK&src=bWFyY2V2b25rdUBnbWFpbC5jb20&src=ZXMuYXIjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23F4511E&color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>	
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		
	</div>
</div>
<footer>

    <?php include('structure/footer.php') ?>
</footer>
</main>
<script>
    // Obtén el elemento select y las secciones
    const select = document.getElementById('opciones');
    const seccion1 = document.getElementById('seccion1');
    const seccion2 = document.getElementById('seccion2');
    const seccion3 = document.getElementById('seccion3');

    // Agrega un evento change al elemento select
    select.addEventListener('change', function() {
        // Verifica la opción seleccionada y muestra/oculta las secciones
        if (select.value === 'seccion1') {
            seccion1.style.display = 'block';
            seccion2.style.display = 'none';
            seccion3.style.display = 'none';
        } else if (select.value === 'seccion2') {
            seccion1.style.display = 'none';
            seccion2.style.display = 'block';
            seccion3.style.display = 'none';
        } else if (select.value === 'seccion3') {
            seccion1.style.display = 'none';
            seccion2.style.display = 'none';
            seccion3.style.display = 'block';
        } else {
            seccion1.style.display = 'none';
            seccion2.style.display = 'none';
            seccion3.style.display = 'none';
        }
    });
</script>
</body>
</html>

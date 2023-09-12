<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>GymRats</title>
		<style>
			/* Estilos generales */
body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
	background-color: #f7f7f7;
	overflow-x: hidden;
  }
  
  .container {
	max-width: 1200px;
	margin: 0 auto;
	padding: 0 20px;
  }
  
/* Estilos generales para el header */
header {
  background-color: #1abc9c;
  color: #fff;
  padding: 10px 0;
}
/* Estilos para la clase container-user */
.container-user {
  display: flex; /* Hace que los elementos sean flexibles */
  align-items: center; /* Centra verticalmente los elementos */
  gap: 20px; /* Agrega espacio entre los elementos */
}

/* Estilos para los íconos de usuario y carrito */
.container-user i {
  font-size: 24px;
  color: #fff;
}
.logo {
    max-width: 700px; /* Establece el ancho máximo del logo */
    max-height: 130px; /* Establece la altura máxima del logo */
	margin: 0;
}


/* Estilos para el botón de iniciar sesión */
.login-button {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
}

/* Estilos para el contenedor principal del header */
.container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

/* Estilos para el logo y elementos a la izquierda */
.left-section {
  display: flex;
  align-items: center;
  gap: 20px;
}

.container-logo a {
  text-decoration: none;
  color: #fff;
  font-size: 24px;
  font-weight: bold;
  max-width: 100px;
  width: 100%;
}

/* Estilos para la barra de navegación */
.container-navbar {
  background-color: #1abc9c; /* Color de fondo verde agua para la barra de navegación */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 18px 0;
}

/* Estilos para la lista de navegación */
.menu {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  gap: 20px;
  justify-content: center;
  align-items: center;
}

.menu li {
  display: inline;
}

.menu li a {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
}

/* Estilos para la sección de enlaces secundarios */
.right-section {
  display: flex;
  align-items: center;
  gap: 20px;
}

.login-button {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
}

/* Estilos para dispositivos móviles */
@media screen and (max-width: 768px) {
  .container {
    padding: 0 10px;
  }

  .menu {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .menu li {
    margin-bottom: 10px;
  }

  .right-section {
    justify-content: flex-end;
    flex-grow: 1;
  }

  .container-logo {
    justify-content: center;
  }
}

/* Estilo personalizado para el botón de búsqueda */
.btn-search {
  background-color: transparent;
  border: 2px solid #1abc9c;
  border-radius: 3px;
  padding: 12px 20px; /* Aumentamos el tamaño del recuadro de búsqueda */
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
}

/* Estilo para el ícono de lupa dentro del botón */
.btn-search i {
  color: #000; /* Color negro para el ícono de lupa */
  font-size: 24px; /* Tamaño del ícono */
  margin-right: 10px; /* Espacio entre el ícono y el texto */
}

.btn-search span {
  color: #1abc9c; /* Color verde agua para el texto del botón */
  font-weight: bold;
}

.btn-search:hover {
  background-color: #1abc9c;
  color: #fff;
}
/* Estilos para la sección de banner */
.banner {
    background-color: black; /* Fondo negro */
    color: white; /* Texto en blanco */
    display: flex;
    align-items: center;
    justify-content: space-between; /* Alinea contenido a los extremos */
    height: 800px; /* Altura deseada */
    position: relative; /* Establece una posición relativa */
}

/* Estilos para la imagen de fondo */
.banner-image img {
    width: 50%; /* Ancho deseado para la imagen (izquierda) */
    height: auto;
}

/* Estilos para el contenedor del texto y el botón */
.banner-text {
    text-align: center;
    width: 50%; /* Ancho deseado para el texto y el botón (derecha) */
    padding: 40px 20px 20px 20px; /* Espacio superior, derecho, inferior e izquierdo */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center; /* Alinea el contenido al centro vertical y horizontalmente */
}

.banner-text h2 {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
}

.banner-text p {
    font-size: 16px;
    margin: 10px 0;
}

.btn-comprar {
    background-color: #1abc9c;
    color: white;
    text-decoration: none;
    display: inline-block;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
    margin-top: 10px; /* Espacio superior ajustado */
}

.btn-comprar:hover {
    background-color: #149a7e;
}

  /* Estilos para la sección de características */
  .container-features {
	display: flex;
	gap: 20px;
	flex-wrap: wrap;
	justify-content: center;
	margin-top: 40px;
  }
  
  .card-feature {
	background-color: #fff;
	padding: 20px;
	border-radius: 5px;
	text-align: center;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  .card-feature i {
	font-size: 48px;
	color: #1abc9c;
  }
  
  .card-feature span {
	font-size: 20px;
	font-weight: bold;
	margin-top: 10px;
  }
  
  .card-feature p {
	font-size: 16px;
	color: #777;
  }
  
  /* Estilos para la sección de mejores categorías */
  .top-categories {
	margin-top: 40px;
  }
  
  .container-categories {
	display: flex;
	gap: 20px;
	justify-content: center;
	margin-top: 20px;
  }
  
  .card-category {
	background-color: #fff;
	text-align: center;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	transition: transform 0.3s;
  }
  
  .card-category:hover {
	transform: translateY(-5px);
  }
  
  .card-category p {
	font-size: 24px;
	font-weight: bold;
	margin: 10px 0;
  }
  
  .card-category span {
	font-size: 18px;
	color: #1abc9c;
  }
  
  /* Estilos para la sección de mejores productos */
  .top-products {
	margin-top: 40px;
  }
  
  .container-options {
	display: flex;
	justify-content: center;
	gap: 20px;
	margin-top: 20px;
  }
  
  .container-options span {
	font-size: 18px;
	font-weight: bold;
	cursor: pointer;
	transition: color 0.3s;
  }
  
  .container-options span.active {
	color: #1abc9c;
  }
  
  .container-products {
	display: grid;
	grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
	gap: 20px;
	margin-top: 20px;
  }
  
  .card-product {
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  .container-img img {
	max-width: 100%;
	height: auto;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
  }
  
  .discount {
	background-color: #e74c3c;
	color: #fff;
	font-size: 16px;
	font-weight: bold;
	position: absolute;
	top: 10px;
	right: 10px;
	padding: 5px 10px;
	border-radius: 3px;
  }
  
  .button-group {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-top: 10px;
	padding: 0 10px;
  }
  
  .button-group span {
	cursor: pointer;
	font-size: 20px;
	color: #333;
	transition: color 0.3s;
  }
  
  .button-group span:hover {
	color: #1abc9c;
  }
  
  .content-card-product {
	padding: 20px;
	text-align: center;
  }
  
  .stars i {
	font-size: 24px;
	color: #f1c40f;
	margin: 5px;
  }
  
  h3 {
	font-size: 24px;
	font-weight: bold;
	margin: 10px 0;
  }
  
  .add-cart i {
	font-size: 24px;
	color: #1abc9c;
	cursor: pointer;
	margin-top: 10px;
	transition: color 0.3s;
  }
  
  .add-cart i:hover {
	color: #149a7e;
  }
  
  /* Estilos para la sección de mejores productos (continuación) */
.price {
	font-size: 24px;
	font-weight: bold;
	margin-top: 10px;
  }
  
  .price span {
	font-size: 18px;
	color: #777;
	text-decoration: line-through;
	margin-left: 10px;
  }

  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}
/*:::::Pie de Pagina*/
.pie-pagina{
    width: 100%;
    background-color: #0a141d;
}
.pie-pagina .grupo-1{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    display:grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap:50px;
    padding: 45px 0px;
}
.pie-pagina .grupo-1 .box figure{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.pie-pagina .grupo-1 .box figure img{
    width: 250px;
}
.pie-pagina .grupo-1 .box h2{
    color: #fff;
    margin-bottom: 25px;
    font-size: 20px;
}
.pie-pagina .grupo-1 .box p{
    color: #efefef;
    margin-bottom: 10px;
}
.pie-pagina .grupo-1 .red-social a{
    display: inline-block;
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: #fff;
    margin-right: 10px;
    background-color: #0d2033;
    text-align: center;
    transition: all 300ms ease;
}
.pie-pagina .grupo-1 .red-social a:hover{
    color: aqua;
}
.pie-pagina .grupo-2{
    background-color: #0a1a2a;
    padding: 15px 10px;
    text-align: center;
    color: #fff;
}
.pie-pagina .grupo-2 small{
    font-size: 15px;
}
@media screen and (max-width:800px){
    .pie-pagina .grupo-1{
        width: 90%;
        grid-template-columns: repeat(1, 1fr);
        grid-gap:30px;
        padding: 35px 0px;
    }
}
/* Estilos para el formulario de contacto */
.contacto {
    margin-top: 20px;
    padding: 20px;
    background-color: #f7f7f7;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.contacto h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.contacto form {
    display: flex;
    flex-direction: column;
}

.contacto input[type="text"],
.contacto input[type="email"],
.contacto textarea {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.contacto button[type="submit"] {
    background-color: #1abc9c;
    color: #fff;
    font-size: 16px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.contacto button[type="submit"]:hover {
    background-color: #149a7e;
}

		</style>
	</head>
	<body>
    <header>
    <div class="container-hero">
        <div class="container hero">

		<header>
    <div class="container-hero">
        <div class="container hero">
            <!-- Logo -->
            <div class="container-logo">
                <a href="<?= base_url(); ?>">
                    <img src="img/logo.png" alt="GymRats Logo" class="logo">
                </a>
            </div>
        </div>
    </div>
</header>

            <!-- Logo -->
            <div class="container-logo">
    <h1 class=""><a href="<?= base_url(); ?>">GymRats</a></h1>
</div>



            <!-- Carrito de compras y enlace de inicio de sesión -->
            <div class="container-user">
                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-basket-shopping"></i>
                <div class="content-shopping-cart">
                    <span class="text">Carrito</span>
                    <span class="number">(0)</span>
                </div>
                <a class="login-button" href="<?= base_url("/login"); ?>">Iniciar Sesión</a>
            </div>
        </div>
    </div>

    <div class="container-navbar">
        <nav class="navbar container">
            <i class="fa-solid fa-bars"></i>

			<ul class="menu">
	<a class="login-button" href="<?= base_url("/inicio"); ?>">Inicio</a>
	<a class="login-button" href="<?= base_url("/login"); ?>">Tienda</a>
	<a class="login-button" href="<?= base_url("/login"); ?>">Rutina</a>
	<a class="login-button" href="<?= base_url("/login"); ?>">Profesores</a>
	<a class="login-button" href="<?= base_url("#contacto"); ?>">Contactanos</a>
	<a class="login-button" href="<?= base_url("/terminos"); ?>">Terminos Y Condiciones</a>
</ul>





            <form class="search-form">
                <input type="search" placeholder="Buscar..." />
                <button class="btn-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </nav>
    </div>
</header>


<section class="banner">
    <div class="content-banner">
        <div class="banner-image">
            <img src="img/creatina.png" alt="Creatina">
        </div>
        <div class="banner-text">
            <center><h2>Mejora tu Rendimiento<br>con Creatina Pura</h2>
            <p>Creatina es la clave para un mejor rendimiento en tu entrenamiento. ¡Compra ahora y alcanza tus metas fitness!</p>
            <a href="#" class="btn-comprar">Comprar</a></center>
        </div>
    </div>
</section>


		<main class="main-content">
			<section class="container container-features">
				<div class="card-feature">
					<i class="fa-solid fa-plane-up"></i>
					<div class="feature-content">
						<span>Envío gratuito a todo el pais</span>
						<p>En pedido superior a $1000</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-wallet"></i>
					<div class="feature-content">
						<span>Contrareembolso</span>
						<p>100% garantía de devolución de dinero</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-gift"></i>
					<div class="feature-content">
						<span>Tarjeta regalo especial</span>
						<p>Ofrece bonos especiales con regalo</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-headset"></i>
					<div class="feature-content">
						<span>Servicio al cliente 24/7</span>
						<p>LLámenos 24/7 al 123-456-7890</p>
					</div>
				</div>
			</section>
			<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="img/logo.png" alt="Logo de GymRats">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>GymRats es una web apta para cualquier Fitness</p>
            <p>En esta pagina encontraras los mejores productos relacionado con el gimnasio</p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
	<div class="box" id="contacto">
    <h2 style="color: black;">CONTÁCTANOS</h2>
    <div class="contacto">
        <form>
            <input type="text" placeholder="Nombre" required>
            <input type="email" placeholder="Correo electrónico" required>
            <textarea placeholder="Mensaje" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>

        <small>&copy; 2023 <b>GymRats</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>



		

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>
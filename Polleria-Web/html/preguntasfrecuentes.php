<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
        <link href="../css/Style_cabecera.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style_preguntasfre.css" rel="stylesheet" type="text/css"/>
        <link href="../css/footer.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../img/icon.jpg" type="image/x-icon">
        <title>Preguntas Frecuentes - El Ruedo Resto-Bar (Pollos & Parrillas</title>
    </head>
    <header><?php include 'cabecera.php';?></header>
    <div class="titulo">Preguntas Frecuentes</div>
    <body>
        <main>
            
            <div class="categorias" id="categorias">
                <div class="categoria activa" data-categoria="metodos-pago">
                    <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.19 7h2.81v15h-21v-5h-2.81v-15h21v5zm1.81 1h-19v13h19v-13zm-9.5 1c3.036 0 5.5 2.464 5.5 5.5s-2.464 5.5-5.5 5.5-5.5-2.464-5.5-5.5 2.464-5.5 5.5-5.5zm0 1c2.484 0 4.5 2.016 4.5 4.5s-2.016 4.5-4.5 4.5-4.5-2.016-4.5-4.5 2.016-4.5 4.5-4.5zm.5 8h-1v-.804c-.767-.16-1.478-.689-1.478-1.704h1.022c0 .591.326.886.978.886.817 0 1.327-.915-.167-1.439-.768-.27-1.68-.676-1.68-1.693 0-.796.573-1.297 1.325-1.448v-.798h1v.806c.704.161 1.313.673 1.313 1.598h-1.018c0-.788-.727-.776-.815-.776-.55 0-.787.291-.787.622 0 .247.134.497.957.768 1.056.344 1.663.845 1.663 1.746 0 .651-.376 1.288-1.313 1.448v.788zm6.19-11v-4h-19v13h1.81v-9h17.19z"/></svg>
                    <p>Métodos de pago</p>
                </div>
                <div class="categoria" data-categoria="entregas">
                    <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M7 24h-5v-9h5v1.735c.638-.198 1.322-.495 1.765-.689.642-.28 1.259-.417 1.887-.417 1.214 0 2.205.499 4.303 1.205.64.214 1.076.716 1.175 1.306 1.124-.863 2.92-2.257 2.937-2.27.357-.284.773-.434 1.2-.434.952 0 1.751.763 1.751 1.708 0 .49-.219.977-.627 1.356-1.378 1.28-2.445 2.233-3.387 3.074-.56.501-1.066.952-1.548 1.393-.749.687-1.518 1.006-2.421 1.006-.405 0-.832-.065-1.308-.2-2.773-.783-4.484-1.036-5.727-1.105v1.332zm-1-8h-3v7h3v-7zm1 5.664c2.092.118 4.405.696 5.999 1.147.817.231 1.761.354 2.782-.581 1.279-1.172 2.722-2.413 4.929-4.463.824-.765-.178-1.783-1.022-1.113 0 0-2.961 2.299-3.689 2.843-.379.285-.695.519-1.148.519-.107 0-.223-.013-.349-.042-.655-.151-1.883-.425-2.755-.701-.575-.183-.371-.993.268-.858.447.093 1.594.35 2.201.52 1.017.281 1.276-.867.422-1.152-.562-.19-.537-.198-1.889-.665-1.301-.451-2.214-.753-3.585-.156-.639.278-1.432.616-2.164.814v3.888zm3.79-19.913l3.21-1.751 7 3.86v7.677l-7 3.735-7-3.735v-7.719l3.784-2.064.002-.005.004.002zm2.71 6.015l-5.5-2.864v6.035l5.5 2.935v-6.106zm1 .001v6.105l5.5-2.935v-6l-5.5 2.83zm1.77-2.035l-5.47-2.848-2.202 1.202 5.404 2.813 2.268-1.167zm-4.412-3.425l5.501 2.864 2.042-1.051-5.404-2.979-2.139 1.166z"/></svg>
                    <p>Entregas</p>
                </div>
                <div class="categoria" data-categoria="seguridad">
                    <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z"/></svg>
                    <p>Seguridad</p>
                </div>
                <div class="categoria" data-categoria="cuenta">
                    <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z"/></svg>
                    <p>Cuenta</p>
                </div>
            </div>

            <div class="preguntas">

                <!-- Preguntas Metodos de pago -->
                <div class="contenedor-preguntas activo" data-categoria="metodos-pago">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Que metodos de pago disponibles tienen? <img src="../img/suma.svg" alt="Abrir Respuesta" /></p>
                        <p class="respuesta">En "El Ruedo Resto-Bar (Pollos & Parrillas)", aceptamos varios métodos de pago. Puedes pagar en efectivo, con tarjetas de crédito/débito y también a través de Yape. Queremos brindar a nuestros clientes opciones convenientes para que puedan disfrutar de nuestros servicios de la manera que les resulte más cómoda. ¡Esperamos verte pronto en nuestro restaurante!</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Tienen plazo de pago? <img src="../img/suma.svg" alt="Abrir Respuesta" /></p>
                        <p class="respuesta">Lamentablemente, no ofrecemos plazo de pago, por lo que solicitamos que los clientes realicen el pago inmediatamente después de consumir sus alimentos y servicios. Esto nos permite mantener un flujo eficiente y satisfactorio para todos nuestros clientes. Gracias por su comprensión y cooperación.</p>
                    </div>
                </div>

                <!-- Preguntas Entregas -->
                <div class="contenedor-preguntas" data-categoria="entregas">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Tienen entregas a domicilio? <img src="../img/suma.svg" alt="Abrir Respuesta" /></p>
                        <p class="respuesta">En "El Ruedo Resto-Bar (Pollos & Parrillas)", lamentablemente, no ofrecemos servicios de entrega a domicilio en este momento. Nuestra única opción es que los clientes recojan sus pedidos en nuestra tienda o restaurante. Apreciamos su comprensión y esperamos que consideren visitarnos para disfrutar de nuestros platos en nuestro establecimiento. Si tienen alguna otra pregunta o necesitan más detalles, no duden en contactarnos directamente. ¡Esperamos poder servirles pronto en nuestro restaurante!</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Cómo funciona el recojo en tienda? <img src="../img/suma.svg" alt="Abrir Respuesta" /></p>
                        <p class="respuesta">El proceso es sencillo. Tenemos tres sedes para tu conveniencia. Para realizar un pedido y elegir la opción de recojo en tienda, primero debes visitar nuestro sitio web. Allí, encontrarás nuestro menú y podrás seleccionar los platos que deseas.

Una vez que hayas añadido los platos que te gustaría ordenar, procederás al proceso de pago en línea a través de nuestro sitio web. Después de completar el pago, recibirás una confirmación de tu pedido.

Luego, podrás dirigirte a la sede de tu elección para recolectar tu pedido. Por favor, asegúrate de llevar contigo la confirmación de tu pedido, ya sea impresa o en formato digital, para agilizar el proceso de recojo.

En la sede, nuestro personal estará listo para ayudarte y entregarte tu pedido. Recuerda que el pago debe realizarse por adelantado en línea a través de nuestro sitio web, ya que actualmente no aceptamos pagos en el lugar de recojo.

Estamos emocionados de recibirte en cualquiera de nuestras tres sedes para que disfrutes de nuestros deliciosos platos. Si tienes alguna pregunta adicional o necesitas más información sobre el proceso de recojo en tienda, no dudes en contactarnos. ¡Esperamos verte pronto en "El Ruedo Resto-Bar (Pollos & Parrillas)"!</p>
                    </div>
                </div>

                <!-- Preguntas Seguridad -->
                <div class="contenedor-preguntas" data-categoria="seguridad">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Como puedo saber si son confiables? <img src="../img/suma.svg" alt="Abrir Respuesta" /></p>
                        <p class="respuesta">Para asegurarme de que "El Ruedo Resto-Bar (Pollos & Parrillas)" es confiable, comencé investigando en línea. Leí varias reseñas en sitios web como Google y TripAdvisor, donde los clientes compartían sus experiencias. Me alegró ver que la mayoría de las reseñas eran positivas, lo que me dio cierta confianza en la calidad de su comida y servicio.</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Que pasa con mis datos personales? <img src="../img/suma.svg" alt="Abrir Respuesta" /></p>
                        <p class="respuesta">Entiendo que la privacidad y la seguridad de mis datos personales son una preocupación importante. Antes de proporcionar cualquier información personal a "El Ruedo Resto-Bar (Pollos & Parrillas)", decidí investigar sus políticas de privacidad y seguridad.</p>
                    </div>
                </div>

                <!-- Preguntas Cuenta -->
                <div class="contenedor-preguntas" data-categoria="cuenta">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Como puedo acceder a mis pedidos? <img src="../img/suma.svg" alt="Abrir Respuesta" /></p>
                        <p class="respuesta">Para acceder a mis pedidos en "El Ruedo Resto-Bar (Pollos & Parrillas)", seguí estos pasos:

Inicio de sesión: En primer lugar, inicié sesión en la cuenta que creé en el sitio web de "El Ruedo Resto-Bar". Si aún no tenía una cuenta, registré una siguiendo las instrucciones proporcionadas en el sitio.

Historial de pedidos: Una vez que inicié sesión, busqué la sección de "Historial de Pedidos" o algo similar en el sitio web. Por lo general, esta sección se encuentra en el área de la cuenta del usuario.

Identificación del pedido: En el historial de pedidos, encontré la lista de mis pedidos anteriores. Cada pedido debería tener un número de identificación único o una descripción para ayudarte a identificarlo.

Detalles del pedido: Al hacer clic en un pedido específico, pude acceder a los detalles, como la fecha y hora del pedido, los platos pedidos y el monto total.

Opciones adicionales: Dependiendo del sitio web, es posible que haya opciones adicionales, como la posibilidad de realizar pedidos nuevamente o calificar y dejar comentarios sobre la experiencia.</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Como puedo cambiar mi contraseña? <img src="../img/suma.svg" alt="Abrir Respuesta" /></p>
                        <p class="respuesta">Si deseo cambiar mi contraseña en el sitio web de "El Ruedo Resto-Bar (Pollos & Parrillas)", sigo estos pasos:

Inicio de sesión: En primer lugar, inicio sesión en mi cuenta en el sitio web del restaurante utilizando mi contraseña actual.

Perfil o configuración de la cuenta: Luego, busco una sección que generalmente se llama "Perfil" o "Configuración de la cuenta". Esta sección suele estar ubicada en la esquina superior derecha del sitio o en el menú de la cuenta.

Cambiar contraseña: Una vez en la sección de perfil o configuración de la cuenta, busco la opción de "Cambiar contraseña" o algo similar. Hago clic en esta opción.

Verificación de identidad: En algunos casos, el sitio me puede pedir que verifique mi identidad antes de permitirme cambiar la contraseña. Esto es una medida de seguridad para proteger mi cuenta.

Nueva contraseña: Luego, se me pedirá que ingrese la nueva contraseña. La mayoría de los sitios requieren que la nueva contraseña cumpla con ciertos criterios de seguridad, como tener una longitud mínima y combinar letras y números.

Confirmación: Después de ingresar la nueva contraseña, la confirmo ingresándola nuevamente.

Guardar cambios: Finalmente, hago clic en el botón o enlace que dice "Guardar cambios" o "Actualizar contraseña". Mi contraseña se cambia con éxito.</p>
                    </div>
                </div>




            </div>
        </main>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
        <script src="categorias.js" type="text/javascript"></script>
        <script src="preguntasfrecuentes.js" type="text/javascript"></script>
        <script
            src="https://kit.fontawesome.com/81581fb069.js"
            crossorigin="anonymous"
            
        ></script>
        <script>const categorias = document.querySelectorAll('#categorias .categoria');
const contenedorPreguntas = document.querySelectorAll('.contenedor-preguntas');
let categoriaActiva = null;

categorias.forEach((categoria) => {
	categoria.addEventListener('click', (e) => {
		categorias.forEach((elemento) => {
			elemento.classList.remove('activa');
		});

		e.currentTarget.classList.toggle('activa');
		categoriaActiva = categoria.dataset.categoria;


		// Activamos el contenedor de preguntas que corresponde
		contenedorPreguntas.forEach((contenedor) => {
			if(contenedor.dataset.categoria === categoriaActiva){
				contenedor.classList.add('activo');
			} else {
				contenedor.classList.remove('activo');
			}
		});
	});
});</script>
        <script>
        const preguntas = document.querySelectorAll('.preguntas .contenedor-pregunta');
preguntas.forEach((pregunta) => {
	pregunta.addEventListener('click', (e) => {
		e.currentTarget.classList.toggle('activa');

		const respuesta = pregunta.querySelector('.respuesta');
		const alturaRealRespuesta = respuesta.scrollHeight;
		
		if(!respuesta.style.maxHeight){
			// Si esta vacio el maxHeight entonces ponemos un valor.
			respuesta.style.maxHeight = alturaRealRespuesta + 'px';
		} else {
			respuesta.style.maxHeight = null;
		}

		// [Opcional] Reiniciamos las demas preguntas
		preguntas.forEach((elemento) => {
			// Solamente queremos ejecutar el codigo para las preguntas que no 
			// sean la pregunta a la que le dimos click.
			if(pregunta !== elemento){
				elemento.classList.remove('activa');
				elemento.querySelector('.respuesta').style.maxHeight = null;
			}
		});


	});
});</script>

    </body>
</html>
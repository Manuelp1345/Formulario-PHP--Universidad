
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1>Formulario de contacto</h1>

    <div class="container">
      <form action="enviar.php" method="post">
        <div class="input-text">
          <input
            id="Nombre"
            type="text"
            placeholder="Nombre"
            name="Nombre"
          />
          <input
            id="Apellido"
            type="text"
            placeholder="Apellido"
            name="Apellido"
          />
          <input
            id="Correo"
            type="email"
            placeholder="Correo"
            name="Correo"
          />
          <input
            placeholder="Numero de telefono"
            type="tel"
            name="Telefono"
            id="tel"
          />

          <textarea
            placeholder="Descripcion"
            name="Descripcion"
            id="Descripcion"
            cols="30"
            rows="10"
          ></textarea>
        </div>

        <button type="submit" class="btn">Enviar</button>
      </form>
    </div>
  </body>
</html>
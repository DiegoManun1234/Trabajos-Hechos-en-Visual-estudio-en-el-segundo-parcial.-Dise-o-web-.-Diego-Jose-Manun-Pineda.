<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de notas</title>
    <link rel="stylesheet" href="Mayor o Menor de Edad.css">
    <script src="/CoPilot/Ejercicios.js"></script>
</head>
<body>
    <section class="formulario">
        <form action="">
          <fieldset>
            <!-- contenedor de los campos -->
            <legend>Promedio de Edad</legend>
            <div class="campo">
            <label>Solicitar como dato de entrada un nombre, y devolver si esta es mayor
                o menor de edad.</label>
            </div>
            <div class="campo">
              <label for="Nombre">Ingrese el nombre del estudiante:</label>
              <input class="input-text" type="text" id="Nombre" placeholder="Nombre estudiante" />
            </div>
            <div class="campo">
              <label for="Nota1">Ingrese la Edad:</label>
              <input class="input-text" type="tel"  id="Num1" placeholder="Edad" />
</div>
          </div>
            <div class="alinear-derecha flex">
              <input class="boton w-sm-100" type="submit" value="Calcular" />
            </div>
          </fieldset>
        </form>
      </section>
</body>
</html>

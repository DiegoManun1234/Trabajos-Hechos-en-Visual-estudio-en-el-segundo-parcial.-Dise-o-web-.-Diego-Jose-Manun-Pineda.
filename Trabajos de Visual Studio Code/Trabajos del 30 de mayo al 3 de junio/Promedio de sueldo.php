<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de notas</title>
    <link rel="stylesheet" href="Sueldo.css">
    <script src="/CoPilot/Ejercicios.js"></script>
</head>
<body>
    <section class="formulario">
        <form action="">
          <fieldset>
            <!-- contenedor de los campos -->
            <legend>Promedio de Sueldo</legend>
            <div class="campo">
            <label>Solicitar como dato de entrada el nombre y salario de una persona y devuelva como
                resultado el valor que debe pagar al IHISS</label>
            </div>
            <div class="campo">
              <label for="Nombre">Ingrese el nombre del empleado:</label>
              <input class="input-text" type="text" id="Nombre" placeholder="Nombre emmpleado" />
            </div>
            <div class="campo">
              <label for="Nota1">Ingrese el sueldo:</label>
              <input class="input-text" type="tel"  id="Num1" placeholder="Sueldo" />
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

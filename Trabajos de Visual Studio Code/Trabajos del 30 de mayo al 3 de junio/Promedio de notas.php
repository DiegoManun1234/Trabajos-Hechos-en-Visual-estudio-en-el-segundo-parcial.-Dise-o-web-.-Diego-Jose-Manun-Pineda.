<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de notas</title>
    <link rel="stylesheet" href="Promedio.css">
    <script src="/CoPilot/Ejercicios.js"></script>
</head>
<body>
    <section class="formulario">
        <form action="">
          <fieldset>
            <!-- contenedor de los campos -->
            <legend>Promedio de Notas</legend>
            <div class="campo">
            <label>Solicitar como dato de entrada un nombre, y cuatro notas parciales para 
              devolver como resulado el promedio.</label>
            </div>
            <div class="campo">
              <label for="Nombre">Ingrese el nombre del estudiante:</label>
              <input class="input-text" type="text" id="Nombre" placeholder="Nombre estudiante" />
            </div>
            <div class="campo">
              <label for="Nota1">Ingrese la primera nota:</label>
              <input class="input-text" type="tel"  id="Num1" placeholder="Valor uno" />
            </div>
            <div class="campo">
              <label for="Nota2">Ingrese la segunda nota:</label>
              <input class="input-text" type="email" id="Num2" placeholder="Valor dos" />
            </div>
            <div class="campo">
              <label for="Nota3">Ingrese la tercera nota:</label>
              <input class="input-text" type="email" id="Num3" placeholder="Valor tres" />
            </div>
            <div class="campo">
              <label for="Nota4">Ingrese la cuarto nota:</label>
              <input class="input-text" type="tel" id="num4" placeholder="Valor cuatro" />
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

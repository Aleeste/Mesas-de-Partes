
<!doctype html>
<html lang="en">

<head>
  <title>MesasPartes</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Formulario</title>
</head>
<body>
  <main class="container p-4">
    <div class="my-3 text-center">
        <button class="btn" id="btn-personaNatural">PersonaNatural</button>
        <button class="btn" id="btn-personaJuridica">PersonaJuridica</button>
    </div>
    <form>
      <div id="personaJuridica" class="d-none">
        <h3 class="text-danger text-center">Mesas de partes virtuales I.E 80892 "Los Pinos" Trujillo - La Libertad </h3>
        

        <div class="form-group mb-3">
          <label for="numero_ruc">Número de RUC:</label>
          <input type="number" class="form-control" id="numero_ruc">
        </div>
        <div class="form-group mb-3">
          <label for="nombre_entidad">Nombre de la entidad o empresa:</label>
          <input type="text" class="form-control" id="nombre_entidad">
        </div>
        <div class="form-group mb-3">
          <label for="apellidos_entidad">Apellidos de la entidad o empresa:</label>
          <input type="text" class="form-control" id="apellidos_entidad">
        </div>

        <div class="row mb-3">
          <label class="mb-3">Dirección</label>
          <div class="form-group col-12 col-md-4">
            <label for="departamento">Departamento:</label>
            <select class="form-select" id="departamento">
              <option value="La Libertad">La Libertad</option>
              <option value="Lima">Lima</option>
              <option value="Arequipa">Arequipa</option>
              <option value="Cusco">Cusco</option>
              <option value ="Trujillo">Trujillo</option>
              <!-- Agrega aquí más opciones de departamentos -->
            </select>
          </div>
          <div class="form-group col-12 col-md-4">
            <label for="provincia">Provincia:</label>
            <select class="form-select" id="provincia">
              <option value="Lima">Lima</option>
              <option value="Trujillo ">Trujillo</option>
              <option value="Arequipa">Arequipa</option>
              <option value="Cusco">Cusco</option>
              
              <!-- Agrega aquí más opciones de provincias -->
            </select>
          </div>
          <div class="form-group col-12 col-md-4">
            <label for="distrito">Distrito:</label>
            <select class="form-select" id="distrito">
              <option value="Lima">Lima</option>
              <option value="Arequipa">Arequipa</option>
              <option value="Cusco">Cusco</option>
              <option value ="Trujillo">Trujillo</option>
              <option value="Victor Larco Herrera">Victor Larco Herrera </option>
              <!-- Agrega aquí más opciones de distritos -->
            </select>
          </div>
        </div>
      </div>

    

      <div id="personaNatural" class="d-none">
        <h3 class="text-danger text-center">Mesas de partes virtuales I.E 80892 "Los Pinos" Trujillo - La Libertad </h3>
      
        <div class="form-group mb-3">
          <label for="tipo_documento">Tipo de Documento:</label>
          <select class="form-select" id="tipo_documento">
            <option value="DNI">DNI</option>
            <option value="Carnet de extranjeria">Carnet de extranjeria</option>
          </select>
        </div>
        <div class="form-group mb-3">
          <label for="numero_documento">Número de Documento:</label>
          <input type="number" class="form-control" id="numero_documento">
        </div>
        <div class="form-group mb-3">
          <label for="nombres">Nombres:</label>
          <input type="text" class="form-control" id="nombres">
        </div>
        <div class="form-group mb-3">
          <label for="apellidos">Apellidos:</label>
          <input type="text" class="form-control" id="apellidos">
        </div>

        <div class="row mb-3">
          <label class="mb-3">Dirección</label>
          <div class="form-group col-12 col-md-4">
            <label for="departamento">Departamento:</label>
            <select class="form-select" id="departamento">
              <option value="La Libertad">La Libertad</option>
              <option value="Lima">Lima</option>
              <option value="Arequipa">Arequipa</option>
              <option value="Cusco">Cusco</option>
              <option value ="Trujillo">Trujillo</option>
              <!-- Agrega aquí más opciones de departamentos -->
            </select>
          </div>
          <div class="form-group col-12 col-md-4">
            <label for="provincia">Provincia:</label>
            <select class="form-select" id="provincia">
              <option value="Lima">Lima</option>
              <option value="Arequipa">Arequipa</option>
              <option value="Cusco">Cusco</option>
              <option value ="Trujillo">Trujillo</option>
              <!-- Agrega aquí más opciones de provincias -->
            </select>
          </div>
          <div class="form-group col-12 col-md-4">
            <label for="distrito">Distrito:</label>
            <select class="form-select" id="distrito">
              <option value="La Esperanza">La Esperanza</option>
              <option value="Lima">Lima</option>
              <option value="Arequipa">Arequipa</option>
              <option value="Cusco">Cusco</option>
              <option value ="Trujillo">Trujillo</option>
              <!-- Agrega aquí más opciones de distritos -->
            </select>
          </div>
        </div>
      </div>

      <div class="form-group mb-3">
        <label for="correo">Correo Electrónico:</label>
        <input type="email" class="form-control" id="correo">
      </div>
      <div class="form-group mb-3">
        <label for="telefono">Teléfono o celular:</label>
        <input type="number" class="form-control" id="telefono">
      </div>

      <div class="form-group mb-3">
        <label for="tipo_documento_remitido">Tipo de Documento Remitido:</label>
        <select class="form-select" id="tipo_documento_remitido">
          <option value="DNI">DNI</option>
          <option value="Carnet de extranjeria">Carnet de extranjeria</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="numero_documento_remitido">Número de Documento Remitido:</label>
        <input type="number" class="form-control" id="numero_documento_remitido">
      </div>
      <div class="form-group mb-3">
        <label for="numero_folios">Número de Folios:</label>
        <input type="number" class="form-control" id="numero_folios">
      </div>
      <div class="form-group mb-3">
        <label for="descripcion">Descripción de la solicitud o trámites:</label>
        <textarea class="form-control" id="descripcion"></textarea>
      </div>
      <div class="form-group mb-3">
        <small class="text-danger d-block my-3">
          Archivo Adjunto: SOLO SE PERMITE 01 ARCHIVO y en FORMATO PDF. El campo permite adjuntar más de un archivo con extensiones pdf, doc, docx, txt y otras. Sin embargo, PARA REGISTRAR Y TRAMITAR EL EXPEDIENTE SE REQUIERE SOLO UN (01) ARCHIVO EN FORMATO PDF.
        </small>
        <label for="archivo">Adjunta archivo:</label>
        <input type="file" class="form-control" id="archivo">
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="terminos">
        <label class="form-check-label" for="terminos">
          Acepto Términos y Condiciones
        </label>
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="declaracion_jurada">
        <label class="form-check-label" for="declaracion_jurada">
          Declaro bajo juramento que los datos ingresados en este formulario son verdaderos y están sujetos a lo establecido en los artículos 51 y 67 del TUO de la Ley N° 27444
        </label>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </main>

  <script>
    document.getElementById("btn-personaNatural").addEventListener("click", function() {
      var elemento = document.getElementById("personaNatural");
      if (elemento.classList.contains("d-none")) {
        elemento.classList.remove("d-none");
        elemento.classList.add("d-block");
      } else {
        elemento.classList.remove("d-block");
        elemento.classList.add("d-none");
      }
    });
    document.getElementById("btn-personaJuridica").addEventListener("click", function() {
      var elemento = document.getElementById("personaJuridica");
      if (elemento.classList.contains("d-none")) {
        elemento.classList.remove("d-none");
        elemento.classList.add("d-block");
      } else {
        elemento.classList.remove("d-block");
        elemento.classList.add("d-none");
      }
    });
  </script>
</body>

</html>
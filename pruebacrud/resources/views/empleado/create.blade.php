<h1>Fromulario de creacion de empleado</h1>

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">

    <label for="Nombres">Ingresa tus nombres: </label>
    <input type="text" name="Nombres" id="Nombres">
    <br>

    <label for="Apellidos">Ingresa tus Apellidos: </label>
    <input type="text" name="Apellidos" id="Apellidos">
    <br>

    <label for="Edad">Ingresa tu Edad en años: </label>
    <input type="text" name="Edad" id="Edad">
    <br>

    <label for="Correo">Ingresa tu Correo Electronico: </label>
    <input type="text" name="Correo" id="Correo">
    <br>

    <label for="Direccion">Ingresa tu Direccion: </label>
    <input type="text" name="Direccion" id="Direccion">
    <br>

    <label for="Foto">Ingresa tu Foto de perfil: </label>
    <input type="file" name="Foto" id="Foto">
    <br>

    <input type="submit" name="enviar" id="enviar">
</form>
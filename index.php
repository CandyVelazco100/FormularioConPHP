<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Red+Hat+Display&family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario de Datos Personales</title>
</head>
<body>
    <div class="container">
        <h1>Formulario de Datos Personales</h1>
        <form action="process_data.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre">
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos">
            </div>
            
            <div class="form-group">
                <label>Sexo:</label>
                <div class="radio-group">
                    <input type="radio" name="sexo" value="Masculino" id="masculino">
                    <label for="masculino">Masculino</label>

                    <input type="radio" name="sexo" value="Femenino" id="femenino">
                    <label for="femenino">Femenino</label>
                </div>
            </div>

            <div class="form-group">
                <label for="edad">Edad:</label>
                <select name="edad" required>
                    <option value="<18">Menos de 18</option>
                    <option value="18-24">18-24</option>
                    <option value="25-34">25-34</option>
                    <option value="35-44">35-44</option>
                    <option value="45-54">45-54</option>
                    <option value="55 o más">55 o más</option>
                </select>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono">
            </div>

            <button type="submit">Siguiente</button>
        </form>
    </div>
</body>
</html>
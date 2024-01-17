<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Usuarios</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Usuario</td>
                <td>Contraseña</td>
                <td>Nombre Real</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($usarios as $user): ?>
                <tr>
                    <td><?= $user->usuario ?></td>
                    <td><?= $user->contraseña ?></td>
                    <td><?= $user->nombre ?></td>
                </tr>
                
            <?php endforeach ?>    
        </tbody>
    </table>
</body>
</html>
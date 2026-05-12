<!DOCTYPE html>
<html>
<head>
    <style>
        :root{
            color-scheme: light dark;
        }

        body{
            display: grid;
            place-content: center;
            min-height: 100vh;
        }
    </style>
</head>

<body>

<table>
    <thead>
        <tr>
            <th>Número</th>
            <th>¿Par o impar?</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= ($i % 2 === 0) ? "Par" : "Impar" //ternaria ?></td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>
</body>



</html>
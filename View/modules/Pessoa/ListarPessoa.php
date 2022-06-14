<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoa</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Data de Nascimento</th>
            </tr>
        </thead>
        <tbody>           
            <?php foreach($model->rows as $item):?>
            <tr>
                <td>
                    <a href="/pessoa/delete?id=<?= $item['id']?>">X</a>
                </td>
                <td><?= $item['id']?></td>
                <td>
                    <a href="/pessoa/form?id=<?= $item['id']?>">
                        <?= $item['nome']?>
                    </a>
                </td>
                <td><?= $item['cpf']?></td>
                <td><?= $item['data_nascimento']?></td>                
            </tr> 
            <?php endforeach ?>          
        </tbody>
    </table>
</body>
</html>
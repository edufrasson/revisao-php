<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
</head>

<body>
    <form action="/pessoa/save" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?= $model->id?>">

            <legend>Cadastro de Pessoa</legend>
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" value="<?= $model->nome?>"><br>

            <label for="cpf">CPF:</label><br>
            <input type="number" name="cpf" id="cpf" value="<?= $model->cpf?>"><br>

            <label for="data_nascimento">Data de Nascimento:</label><br>
            <input type="date" name="data_nascimento" id="data_nascimento" value="<?= $model->data_nascimento?>"><br><br>

            <button type="submit">Salvar</button>
        </fieldset>

    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="testes2.css" media="screen"/> 
    <title>Testes</title>
</head>
<body>
    <form method="POST" action="resultado.php">
    <h1 class="titulo">Questionário</h1>
    <article>
        <p>
            <div class="perguntas border-radius border">
            <label>1-) Qual o maior marsupial do mundo?</label><br>
            <input type="radio" name="perg1" value="opt1"/> Coala
            <input type="radio" name="perg1" value="opt2"/> Tatu
            <input type="radio" name="perg1" value="opt3"/> Canguru
        </p>
        <p>
            <label>2-) Qual o solvete universal? </label><br>
            <input type="radio" name="perg2" value="opt1"/> Coca gelada
            <input type="radio" name="perg2" value="opt2"/> Água
            <input type="radio" name="perg2" value="opt3"/> Suco de macaruja
        </p>
        <p>
            <label>3-) Qual o maior tecnopolo do Planeta? </label><br>
            <input type="radio" name="perg3" value="opt1"/> Unicamp
            <input type="radio" name="perg3" value="opt2"/> Zona Franca de Manaus
            <input type="radio" name="perg3" value="opt3"/> Vale do Silicio
        </p>
        </div>
    </article>
    <input type="submit" class="btn" value="Ver Resultado">
    </form>
</body>
</html>
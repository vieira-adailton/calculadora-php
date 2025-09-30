<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="chamadaCalc.php" name="formulario" method="post">
    <input type="number" name="num1" required placeholder="Digite o primeiro número: ">
    <input type="number" name="num2" required placeholder="Digite o segundo número: ">
    <select name="operacao">
    <option value ="soma">Soma</option>
    <option value ="div">Divisão</option>
    <option value ="mult">Multiplicação</option>
    <option value ="sub">Subtração</option>
    
    </select>
    <button name="resul">Resultado</button>
    </form>
</body>
</html>
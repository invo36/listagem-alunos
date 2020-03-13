<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário do Professor</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-primary">
    <div class="container bg-white pb-1">
        <h2 class="display-3 text-center pb-4">Relatório de Presença</h2>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Aluno
                    <th scope="col" class="text-center">Frequência
            </thead>
        
        
        <?php
            $data = $_POST['data'];
            $data2 = preg_split('/-/', $data);
            $data2 = array_reverse($data2);
            echo "<div class='h6 text-center'>Essa aula foi ministrada no dia: ".$data2[0]. '/'. $data2[1]. '/'. $data2[2]."</div>";

            $nome = array();
            $pres = array();
        for($i = 0; $i < 10; $i++){
            array_push($nome, $_POST['nome'. ($i + 1)]);
            array_push($pres, $_POST['pres'. ($i + 1)]);
            echo '<tbody ><td>';
            echo $nome[$i]. '<td class="text-center">' .$pres[$i]. '<tr></tbody>';
        }
        ?>
        </table>
        <a href="index.php"><input type="button" class="btn btn-primary" value="Voltar"></a>
    </div>


    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body{
            margin: 0;
            padding: 0; 
            background: #3C5680;
        }
        label{
            display: block;
            margin-bottom: 5px;
        }
        span{
            display: block;
            margin: 10px 0 10px 0;
            font-weight: 1000;
            font-size: 17px;
        }
        h2{
            text-align: center;
        }
        div{
            background: #E8EFFF;
            width: 90vh;
            display: block;
            margin: auto;
            margin-top: 30px;
            border-radius: 15px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div>
        <h2>Relatório de Presença</h2>
        <table border='1'>
            <thead>
                <td>ALUNO
                <td>FREQUÊNCIA
            </thead>
        <?php 
            $data = $_POST['data'];
            $data2 = preg_split('/-/', $data);
            $data2 = array_reverse($data2);
            echo $data2[0]. '/'. $data2[1]. '/'. $data2[2];
            $nome = array();
            $pres = array();
        for($i = 0; $i < 10; $i++){
            array_push($nome, $_POST['nome'. ($i + 1)]);
            array_push($pres, $_POST['pres'. ($i + 1)]);
            echo '<td>';
            echo $nome[$i]. '<td>' .$pres[$i]. '<tr>';
        }
        ?>
    </table>
</div>
</body>
</html>
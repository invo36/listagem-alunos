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
        .todo{
            background: #E8EFFF;
            width: 90vh;
            display: block;
            margin: auto;
            margin-top: 30px;
            border-radius: 15px;
            padding: 20px;
        }
        .separa{
            margin-bottom: 15px;
            width: 100%;
            display: flex;
        }
        .separa2{
            width: 50%;
        }
        .flexbox{
            display: flex;
        }
    </style>

</head>
<body>

    <div class="todo">
        <h2>Diário de Presença</h2>
        <form action="result.php" method="POST">
        <input type="date" required name="data">
            <div class="flexbox">
                <div class="separa2">Aluno</div>
                <div class="separa2">Frequência</div>
            </div>
                <div class="separa">
                    <input type="text" readonly name="nome1" value="BOB"> 
                    <div class='separa2'>
                        <label>Presente:<input type="radio" name="pres1" checked value="Presente"></label>
                        <label>Falta:<input type="radio" name="pres1" value="Falta"></label>
                    </div>
                </div>
                <div class="separa">
                    <input type="text" readonly name="nome2"  value="Corona"> 
                    <label>Presente:<input type="radio" name="pres2" checked value="Presente"></label>
                    <label>Falta:<input type="radio" name="pres2" value="Falta"></label>
                </div>
                <div class="separa">
                    <input type="text" readonly name="nome3" value="Lucas">    
                    <label>Presente:<input type="radio" name="pres3" checked value="Presente"></label>
                    <label>Falta:<input type="radio" name="pres3" value="Falta"></label>
                </div>
                <div class="separa">
                    <input type="text" readonly name="nome4" value="ADM">    
                    <label>Presente:<input type="radio" name="pres4" checked value="Presente"></label>
                    <label>Falta:<input type="radio" name="pres4" value="Falta"></label>
                </div>
                <div class="separa">
                    <input type="text" readonly name="nome5" value="Kevin">    
                    <label>Presente:<input type="radio" name="pres5" checked value="Presente"></label>
                    <label>Falta:<input type="radio" name="pres5" value="Falta"></label>
                </div>
                <div class="separa">
                    <input type="text" readonly name="nome6" value="Walace">    
                    <label>Presente:<input type="radio" name="pres6" checked value="Presente"></label>
                    <label>Falta:<input type="radio" name="pres6" value="Falta"></label>
                </div>
                <div class="separa">
                    <input type="text" readonly name="nome7" value="Mão na vara">    
                    <label>Presente:<input type="radio" name="pres7" checked value="Presente"></label>
                    <label>Falta:<input type="radio" name="pres7" value="Falta"></label>
                </div>
                <div class="separa">
                    <input type="text" readonly name="nome8" value="Douglas">    
                    <label>Presente:<input type="radio" name="pres8" checked value="Presente"></label>
                    <label>Falta:<input type="radio" name="pres8" value="Falta"></label>
                </div>
                <div class="separa">
                    <input type="text" readonly name="nome9" value="Freitas e Nuguet(amor eterno)">    
                    <label>Presente:<input type="radio" name="pres9" checked value="Presente"></label>
                    <label>Falta:<input type="radio" name="pres9" value="Falta"></label>
                </div>
                <div class="separa">
                    <input type="text" readonly name="nome10" value="Felipe Neto">    
                    <label>Presente:<input type="radio" name="pres10" checked value="Presente"></label>
                    <label>Falta:<input type="radio" name="pres10" value="Falta"></label>
                </div>

            <input type="submit" value="Enviar">
    </form>
    </div>
</body>
</html>
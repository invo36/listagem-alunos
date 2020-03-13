<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário do Professor</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-primary">
    <div class="container bg-white pb-1">
        <h2 class="display-3 text-center pb-4">Diário de Presença</h2>

        <!-- Formulário -->

        <form action="result.php" method="post">
            <div class="form-group text-center">
                <p class="h5">Dia da aula</p>
                <input type="date" class="form-control" required name="data" style="width: 50%; margin: auto;">
            </div>
            <hr>
            <!-- Parte de colocar presença e falta -->

            <div class="row ml-5">
                <div class="col-sm-7">
                    <p class="h5">Aluno</p>

                    <!-- Alunos 1 -->
                    <div class="form-group">
                        <input type="text" readonly name="nome1" class="form-control" value="BOB">
                    </div>

                    <!-- Aluno 2 -->
                    <div class="form-group">
                        <input type="text" readonly name="nome2" class="form-control" value="Corona">
                    </div>

                    <!-- Aluno 3 -->
                    <div class="form-group">
                        <input type="text" readonly name="nome3" class="form-control" value="Lucas">
                    </div>

                    <!-- Aluno 4 -->
                    <div class="form-group">
                        <input type="text" readonly name="nome4" class="form-control" value="ADM">
                    </div>

                    <!-- Aluno 5 -->
                    <div class="form-group">
                        <input type="text" readonly name="nome5" class="form-control" value="Kevin">
                    </div>

                    <!-- Aluno 6 -->
                    <div class="form-group">
                        <input type="text" readonly name="nome6" class="form-control" value="Walace">
                    </div>

                    <!-- Aluno 7 -->
                    <div class="form-group">
                        <input type="text" readonly name="nome7" class="form-control" value="Mão na vara">
                    </div>

                    <!-- Aluno 8 -->
                    <div class="form-group">
                        <input type="text" readonly name="nome8" class="form-control" value="Douglas">
                    </div>

                    <!-- Aluno 9 -->
                    <div class="form-group">
                        <input type="text" readonly name="nome9" class="form-control" value="Freitas e Nuguet(amor eterno)">
                    </div>

                    <!-- Aluno 10 -->
                    <div class="form-group">
                        <input type="text" readonly name="nome10" class="form-control" value="Felipe Neto">
                    </div>
                </div>
                <div class="col-5">
                    <p class="h5">Frequência</p>
                    <!-- Frequência de aluno 2 -->
                    <div class="form-group pt-1">
                        <div class="form-check">
                            <label class="form-check-label" for="checka1">Presente:</label>
                            <input type="radio" id="checka1" name="pres1" checked value="Presente">

                            <label class="form-check-label" for="checkb1">Falta:</label>
                            <input type="radio" name="pres1" id="checkb1" value="Falta">
                        </div>
                    </div>
                    
                    <!-- Frequência de aluno 2 -->
                    <div class="form-group">
                        <div class="form-check pt-3">
                            <label class="form-check-label" for="checka2">Presente:</label>
                            <input type="radio" id="checka2" name="pres2" checked value="Presente">

                            <label class="form-check-label" for="checkb2">Falta:</label>
                            <input type="radio" name="pres2" id="checkb2" value="Falta">
                        </div>
                    </div>

                    <!-- Frequência de aluno 3 -->
                    <div class="form-group">
                        <div class="form-check pt-3">
                            <label class="form-check-label" for="checka3">Presente:</label>
                            <input type="radio" id="checka3" name="pres3" checked value="Presente">

                            <label class="form-check-label" for="checkb3">Falta:</label>
                            <input type="radio" name="pres3" id="checkb3" value="Falta">
                        </div>
                    </div>
                    
                    <!-- Frequência de aluno 4 -->
                    <div class="form-group">
                        <div class="form-check pt-3">
                            <label class="form-check-label" for="checka4">Presente:</label>
                            <input type="radio" id="checka4" name="pres4" checked value="Presente">

                            <label class="form-check-label" for="checkb4">Falta:</label>
                            <input type="radio" name="pres4" id="checkb4" value="Falta">
                        </div>
                    </div>

                    <!-- Frequência de aluno 5 -->
                    <div class="form-group">
                        <div class="form-check pt-2">
                            <label class="form-check-label" for="checka5">Presente:</label>
                            <input type="radio" id="checka5" name="pres5" checked value="Presente">

                            <label class="form-check-label" for="checkb5">Falta:</label>
                            <input type="radio" name="pres5" id="checkb5" value="Falta">
                        </div>
                    </div>

                    <!-- Frequência de aluno 6 -->
                    <div class="form-group">
                        <div class="form-check pt-3">
                            <label class="form-check-label" for="checka6">Presente:</label>
                            <input type="radio" id="checka6" name="pres6" checked value="Presente">

                            <label class="form-check-label" for="checkb6">Falta:</label>
                            <input type="radio" name="pres6" id="checkb6" value="Falta">
                        </div>
                    </div>

                    <!-- Frequência de aluno 7 -->
                    <div class="form-group">
                        <div class="form-check pt-3">
                            <label class="form-check-label" for="checka7">Presente:</label>
                            <input type="radio" id="checka7" name="pres7" checked value="Presente">

                            <label class="form-check-label" for="checkb7">Falta:</label>
                            <input type="radio" name="pres7" id="checkb7" value="Falta">
                        </div>
                    </div>

                    <!-- Frequência de aluno 8 -->
                    <div class="form-group">
                        <div class="form-check pt-3">
                            <label class="form-check-label" for="checka8">Presente:</label>
                            <input type="radio" id="checka8" name="pres8" checked value="Presente">

                            <label class="form-check-label" for="checkb8">Falta:</label>
                            <input type="radio" name="pres8" id="checkb8" value="Falta">
                        </div>
                    </div>

                    <!-- Frequência de aluno 9 -->
                    <div class="form-group">
                        <div class="form-check pt-3">
                            <label class="form-check-label" for="checka9">Presente:</label>
                            <input type="radio" id="checka9" name="pres9" checked value="Presente">

                            <label class="form-check-label" for="checkb9">Falta:</label>
                            <input type="radio" name="pres9" id="checkb9" value="Falta">
                        </div>
                    </div>

                    <!-- Frequência de aluno 10 -->
                    <div class="form-group">
                        <div class="form-check pt-2">
                            <label class="form-check-label" for="checka10">Presente:</label>
                            <input type="radio" id="checka10" name="pres10" checked value="Presente">

                            <label class="form-check-label" for="checkb10">Falta:</label>
                            <input type="radio" name="pres10" id="checkb10" value="Falta">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary mb-4" value="Enviar" style="display:block; margin: 0 auto;">
        </form>

    </div>

    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
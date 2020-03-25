<?php

    session_start();
    setlocale(LC_ALL,'pt_BR.UTF8');
    mb_internal_encoding('UTF8'); 
    mb_regex_encoding('UTF8');
    date_default_timezone_set('America/Fortaleza');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Requerimento</title>
    <meta charset="utf-8" >
    <link rel="stylesheet" type="text/css" href="css\requerimento.css">
</head>

<body class="">
    <div class="container box-shadow">
        <header style="display: flex;">
            <div class="image" style="border-bottom: 2px solid red">
                <img src="IFCE.png" alt="IFCE logo" width="100px;">
            </div>
            <div class="content">
                <div class="head" style="padding-bottom: 15px;">
                    <h1>Instituto Federal</h1>
                    <p>Ceará</p>
                    <p>Campus Cedro</p>
                </div>
                <div class="end" style="padding-bottom: 15px;">
                    GUIA DE REQUERIMENTO
                </div>
            </div>
        </header>
        <div>
            <form action="requerimento.php" method="post" >
                <p style="text-align: right; padding-top: 15px; margin-bottom: 15px;" id="p">Protocolo n.º <?=  $_SESSION['data']['p'] ?? null ?></p>
                <br>
                <div class="dados" style="margin: 0 30px 15px;">
                    REQUERENTE:
                    <input type="text" name="n_requerente" class="asign" size="50" value="<?= $_SESSION['data']['n_requerente'] ?? null ?>" disabled>
                    Nº DE MATRÍCULA:
                    <input type="text" name="n_matricula" class="asign" value="<?= $_SESSION['data']['n_matricula'] ?? null ?>" disabled>
                    <br> 
                    PREENCHER:
                    <br> 
                    DATA DE NASCIMENTO:
                    <input type="date" name="data" class="asign" value="<?= $_SESSION['data']['data'] ?? null ?>" disabled> 
                    NATURALIDADE:
                    <input type="text" name="naturalidade" class="asign" value="<?= $_SESSION['data']['naturalidade'] ?? null ?>" disabled> 
                    FILIAÇÃO:
                    <input type="text" name="filiacao" class="asign" size="10" value="<?= $_SESSION['data']['filiacao'] ?? null ?>" disabled>
                    <br> 
                    CURSO
                    <input type="text" name="curso" class="asign" size="45" value="<?= $_SESSION['data']['curso'] ?? null ?>" disabled> 
                    PERIODO
                    <input type="text" name="periodo" class="asign" size="15" value="<?= $_SESSION['data']['periodo'] ?? null ?>" disabled> 
                    TURNO
                    <input type="text" name="turno" class="asign" size="15" value="<?= $_SESSION['data']['turno'] ?? null ?>" disabled> 
                    TELEFONE
                    <input type="tel" name="telefone_1" class="asign" value="<?= $_SESSION['data']['telefone_1'] ?? null ?>" disabled> 
                    |
                    <input type="tel" name="telefone_2" class="asign" disabled> 
                    EMAIL
                    <input type="email" name="email" class="asign" value="<?= $_SESSION['data']['email'] ?? null ?>" disabled>
                </div>

                <div class="opc">
                    ASSINALE:
                    <table style="margin-top: 15px; border-radius: 5px; border: 1px solid black;">
                        <tr>
                            <td>
                                <input type="radio" value="2_via" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == '2_via' ? "checked" : '' ?> disabled>
                            </td>
                            <td>2° Via (especificar)</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="trancamento_d" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'trancamento_d' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Trancamento de Disciplina (especificar)</td>
                            <td>Coordenação dos Cursos</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="aproveitamento" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'aproveitamento' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Aproveitamento da disciplina (anexar Historico escolar e Programa da Disciplina)</td>
                            <td style="border-right: 2px solid #000;">Coordenação de Cursos</td>
                            <td>
                                <input type="radio" value="m_trancamento" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'm_trancamento' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Trancamento de Matrícula (anexar documentação comprobatória)</td>
                            <td>Coordenação Pedagógica</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="matricula_prazo" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'matricula_prazo' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Matricula fora do prazo (justificar)</td>
                            <td style="border-right: 2px solid #000">CAA</td>
                            <td>
                                <input type="radio" value="transferencia" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'transferencia' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Transferência para outra instituição</td>
                            <td>CAA</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="matricula_cancel" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'matricula_cancel' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Cancelamento da Matricula</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="validar" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'validar' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Validação de Conhecimento (especificar)</td>
                            <td>Coordenação do Cursos</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="c_grau_especial" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'c_grau_especial' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Colação de Grau / Colação Especial(justificar)</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="reajuste" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'reajuste' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Reajuste</td>
                            <td>CAA</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="declaracao" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'declaracao' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Declaração (especificar)</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="r_prova" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'r_prova' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Recorreção de Prova</td>
                            <td>Coordenação do Curso</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="diploma" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'diploma' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Diploma (especificar)</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="a_trasn" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'a_trasn' ? "checked" : '' ?> disabled>
                            </td>
                            <td>AUXÍLIO - Transporte</td>
                            <td>Serviço Social</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="histo_escolar" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'histo_escolar' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Histórico Escolar</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="a_moradia" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'a_moradia' ? "checked" : '' ?> disabled>
                            </td>
                            <td>AUXÍLIO - Moradia</td>
                            <td>Serviço Social</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="m_reabertura" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'm_reabertura' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Reabertura de Matrícula</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="a_oculos" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'a_oculos' ? "checked" : '' ?> disabled>
                            </td>
                            <td>AUXÍLIO - Óculos</td>
                            <td>Serviço Social</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="segunda_chamada" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'segunda_chamada' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Segunda Chamada (anexar justificativa e especificar)</td>
                            <td style="border-right: 2px solid #000;">Coordenação do Curso</td>
                            <td>
                                <input type="radio" value="a_pai_mae" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'a_pai_mae' ? "checked" : '' ?> disabled>
                            </td>
                            <td>AUXÍLIO - Pais e Mães</td>
                            <td>Serviço Social</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="reingreso" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'reingreso' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Reingresso</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="outros" name="opcoes" <?= isset($_SESSION['data']['opcoes']) && $_SESSION['data']['opcoes'] == 'outros' ? "checked" : '' ?> disabled>
                            </td>
                            <td>Outros (especificar)</td>
                        </tr>
                    </table>

                    <br> ESPECIFICAR:
                    <br>
                    <textarea name="especificar" style="width: 100%" disabled><?= $_SESSION['data']['especificar'] ?? null ?></textarea>
                    <br> JUSTIFICAR:
                    <br>
                    <textarea name="justificar" style="width: 100%" disabled><?= $_SESSION['data']['justificar'] ?? null ?></textarea>
                    <br>

                </div>

                <div style="text-align: center;">
                    <h3 style="text-align: center; margin-top: 15px">DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</h3>
                    <br>
                    <div style="display: flex; justify-content: center; width: 100%;">
                        <div class="assin">
                            <div>
                                <input type="text" name="a_1" class="asign" value="<?= $_SESSION['data']['a_1'] ?? null ?>" disabled>
                                <br>
                                <label> REQUERENTE (ASS. LEGÍVEL)</label>
                            </div>
                            <div>
                                <input type="text" name="a_2" class="asign" value="<?= $_SESSION['data']['a_2'] ?? null ?>" disabled>
                                <br>
                                <label>FUNCIONÁRIO (ASS. LEGÍVEL)</label>
                            </div>
                        </div>
                    </div>
                    <p style="text-align: center; margin-top: 50px"> CEDRO - CE, <?= strftime('%A, %d de %B de %Y', strtotime('today')); ?>
                </div>

                
                <div style="display: flex; justify-content: center; width: 100%; margin-top: 20px; border-radius: 15px; border: 1px solid black;">
                    <div class="assin">
                        <div style="border-right: 1px solid #000; text-align: center;">
                            <label style="text-align: center;">VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</label><br>
                            <input type="radio" name="armario" value="n" <?= isset($_SESSION['data']['armario']) && $_SESSION['data']['armario'] == 'n' ? "checked" : '' ?> disabled>O requerente NÃO deve chave de armário<br>  
                            <input type="radio" name="armario" value="d" <?= isset($_SESSION['data']['armario']) && $_SESSION['data']['armario'] == 'd' ? "checked" : '' ?> disabled>O requerente deve chave do armário:
                            <input type="text" name="coo" class="asign" value="<?= $_SESSION['data']['coo'] ?? null ?>" disabled>
                            <div style="display: flex; justify-content: center; width: 100%;">
                                <div class="assin">
                                    <div>
                                        <input type="text" name="a_3" class="asign" value="<?= $_SESSION['data']['a_3'] ?? null ?>" disabled>
                                        <br>
                                        <label>Responsável (ass. Legível)</label>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                        <div style="margin-left: 10px; text-align: center;">
                            <label>VISTO (BIBLIOTECA)</label><br>
                            <input type="radio" name="livro" value="n" <?= isset($_SESSION['data']['livro']) && $_SESSION['data']['livro'] == 'n' ? "checked" : '' ?> disabled>O requerente NÃO deve livros na biblioteca<br>    
                            <input type="radio" name="livro" value="d" <?= isset($_SESSION['data']['livro']) && $_SESSION['data']['livro'] == 'd' ? "checked" : '' ?> disabled>O requerente deve livros na biblioteca:
                            <input type="text" name="bibi" class="asign" value="<?= $_SESSION['data']['bibi'] ?? null ?>" disabled>
                            <div style="display: flex; justify-content: center; width: 100%;">
                                <div class="assin">
                                    <div>
                                        <input type="text" name="a_4" class="asign" value="<?= $_SESSION['data']['a_4'] ?? null ?>" disabled>
                                        <br>
                                        <label>Responsável (ass. Legível)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="text-align: right; margin-top: 15px">
                    <a href="Formulario.html" class="button button1">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    //verifica se existe conexão com bd; caso não tenta, cria uma nova

    $conexao = mysqli_connect('localhost/phpmyadmin/index.php?route=/database/export&db=bd_casadeapoio','','') //porta, usuário, senha
    
    or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão

    //$select_db = mysqli_select_db("bd_casadeapoio"); //seleciona o banco de dados

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $NOME_DOADOR = $_POST['nome']; 
    $CPF_DOADOR = $_POST['CPF']; 
    $DT_NASCIMENTO_DOADOR = $_POST['DT_NASCIMENTO_DOADOR'];
    $TELEFONE_COMERCIAL1 = $_POST['TELEFONE_COMERCIAL1']; 
    $TELEFONE_COMERCIAL2 = $_POST['TELEFONE_COMERCIAL2']; 
    $TELEFONE_FIXO = $_POST['TELEFONE_FIXO'];
    $TELEFONE_CELULAR = $_POST['TELEFONE_CELULAR'];  
    $email = $_POST['email'];
    

    $string_sql = "INSERT INTO DOADOR (id_DOADOR,nome,CPF_DOADOR,TELEFONE_COMERCIAL1,TELEFONE_COMERCIAL2,TELEFONE_FIXO,TELEFONE_CELULAR,email) VALUES (null,'$NOME_DOADOR','$CPF_DOADOR','$TELEFONE_COMERCIAL1','$TELEFONE_COMERCIAL2','$TELEFONE_FIXO','$TELEFONE_CELULAR','$email')"; //String com consulta SQL da inserção

    if(mysqli_query($conexao, $string_sql)){
        echo "Cadastro realizado com sucesso!"; } //Realiza cadastro
    else {
        echo "Erro: não foi possível inserir no banco de dados". $string_sql ."<br>". mysqli_error($conexao);
    }

    mysqli_close($conexao); //fecha conexão com banco de dados 
?>

<html>
    <head>
        <title>Projeto Senha</title>
    </head>

    <body>
        <form name="cadastro_cliente" method="post" action="cds_cliente.php">
            <fieldset>
                <legend>Cadastro</legend>
                <div class="cadastro" >
                    <label>     Nome:</label><input type="text" placeholder="Digite o Nome..." name="nome_cliente"><br>
                    <label>Sobrenome:</label><input type="text" placeholder="Digite o Sobrenome..." name="sobrenome_cliente"><br>
                    <label>      CPF:</label><input type="text" placeholder="Digite o Cpf..." name="cpf_cliente"><br>
                    <label> Telefone:</label><input type="text" placeholder="Digite o Telefone..." name="telefone_cliente"><br>
                    <label>   Cidade:</label><input type="text" placeholder="Digite a Cidade..." name="cidade_cliente"><br>
                    <label>   Estado:</label><input type="text" placeholder="Digite o Estado..." name="estado_cliente"><br>
                    <label> Endereço:</label><input type="text" placeholder="Digite o Endereço..." name="end_rua_cliente">
                    <label>   Número:</label><input type="text" placeholder="Digite o Número..." name="end_num_cliente"><br>
                    <label>   Bairro:</label><input type="text" placeholder="Digite o Bairro..." name="end_bairro_cliente"><br>
                    <input type="submit" value="Cadastrar" >
                    <input type="reset" value="Limpar" >
                </div> 
            </fieldset>
        </form>
    </body>
</html>

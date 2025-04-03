<html>
    <body>
        <?php
        $_usuarioc = "CAF";
        $_senhac = "MATEMATICA9"; 
        $_usuario = $_POST["usu"];
        $_senha = $_POST["sen"];

        if ($_usuarioc == $_usuario && $_senhac == $_senha){
            echo "Seja bem-vindo(a)\n <br>" ;
            
            echo "Você está online no servidor da empresa\n<br>";

            echo "Seu cargo é: Advogado(a)\n<br>";
        }else{
            echo "Usuario ou senha incorreto, Tente novamente\n<br>";

        }
        ?>
        <form action="exerc2.php" >
            <input type="submit" value="Voltar">
        </form>
    </body>
</html>
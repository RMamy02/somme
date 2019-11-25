<html>
<body>
<div class="macine">
    <h1>Voici le resultat</h1>
    Votre premier nombre: <?php echo $_POST["a"]; ?><br>
    Votre deuxieme nombre: <?php echo $_POST["b"]; ?> <br>
    <h3>Total :
    <?php
        $_POST["a"];
        $_POST["b"];
        echo ($_POST["a"] + $_POST["b"]);
    ?> </h3>
   <p><a href="Exercice1.html">Nouveau calcul</a></p> 
</div>
</body>
</html>
<style>
    .macine{
        background: rgba(202, 196, 196,0.4);
        position: relative;
        top: 100px;
        left: 25%;
        width: 50%;
        height: 50%;
        border-radius: 10px;
        text-align: center;
    }
    h1{
        color: rgb(70, 114, 155);
    }
    p {
        background: rgb(52, 90, 196);
        color: #fff;
        width: 30%;
        height: 50px;
        border-radius: 4px;
        margin-left:35%;
    }
    h3{
        color:Tomato;
    }
    p a{
        text-decoration:none;
        color:#fff;
        font-size:17px;
    }
</style>
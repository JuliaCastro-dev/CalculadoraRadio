<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Calculadora simples </title>
        <STYLE>
            
          body{
              color:#fff;
              background: #00C9FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #92FE9D, #00C9FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            display:absolute;
             }
.calch1{
    color: aliceblue;
    font-family:Medium;
    margin-top: 12%;
}
.julia{
    color: aquamarine;
    margin-left: 35px;
    margin-bottom: 20px;
}
.main{
    height: 300px;
    width: 250px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top:50px;
    transform:translateX(-50%) translateY(-50%);

}
#enviar,#limpar{
 background-color: #D8BFD8;
 font-family: 'PT Sans Narrow', sans-serif;;
  font-weight: bold;
  width:80px;
  border:none;
  color: #fff;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
  outline: 1px solid;
  outline-color: rgba(255, 255, 255, .5);
  outline-offset: 0px;
  text-shadow:  #9796f0;
  transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
}
#enviar:hover{
 border: 1px solid;
  box-shadow: inset 0 0 20px rgba(255,20,147,0.5), 0 0 20px rgba(255,20,147,0.2);
  outline-color:#fff;
  outline-offset:15px;
  text-shadow: 1px 1px 2px #427388; 
}
#limpar:hover{
     border: 1px solid;
 box-shadow: inset 0 0 20px rgba(255,20,147,0.5), 0 0 20px rgba(255,20,147,0.2);
  outline-color: #fff;
  outline-offset: 15px;
  text-shadow: 1px 1px 2px #427388; 
}
#val1,#val2{
  display: flex;
  justify-content: center;

}

input[type=text]{
    margin-bottom: 5px;
  background-image:none;
  border:1px solid #fff;
  border-radius:10px;
  transition:border-color .25s ease, box-shadow .25s ease;
  outline: none;
 
}
  #result{
      height: 40px;
      border-radius:10px;
  }
  h1{
      text-shadow: 
                  0 0 10px #1E90FF,
                  0 0 20px #F0F8FF,
                  0 0 40px #F0F8FF;
  }
  
        </STYLE>
        <script language="JavaScript">
           
            function clean()
            {
            document.getElementById("val1").focus();
            }
        </script>
    </head>
    <body>
        
        <center>
            <div id="caixa">
        <form method="post" action="result.php">
            <h1>Calculadora</h1>
            <span>By Julia Castro</span>
            <br>            <br>
            <input id="val1" name="txtval1"  type="text" placeholder="Digite um Valor"/>
            <input id="val2" name="txtval2"  type="text" placeholder="Digite um Valor"/> <br/><br/>
            <span>Escolha sua operação</span><br>
            <input type="radio" id="soma" name="ope" value="soma">
                <label for="soma">Somar</label>
                <input type="radio" id="sub" name="ope" value="sub">
                <label for="sub">Subtrair</label>
                <input type="radio" id="mult" name="ope" value="mult">
                <label for="mult">Multiplicação</label>
                <input type="radio" id="div" name="ope" value="div">
                <label for="div">Divisão</label><br><br>
            
               <br/><br/>
            <input type="submit" id="enviar" value="ENVIAR" onClick="submit()"/>
            <input type="reset" id = "limpar" value="LIMPAR" onClick="clean()"/>
            <br/><br/>
        </form>
    </div>
    </center>
    </body>
</html>

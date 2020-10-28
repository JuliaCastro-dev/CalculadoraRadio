
<?php
  if(!is_numeric($_POST['txtval1']) || !is_numeric($_POST['txtval2'])){
        // Volte para a página i
        header('location:Calculadora.php');
    }

    echo "<STYLE>
            BODY{
            color:#fff;
           background: #4169E1;

            }
            button{
            outline:0;
            border:none;
            background:none;
            color:#fff;
            letter-spacing:15px;
            -webkit-box-reflect: below 1px linear-gradient(transparent,#0004);
            line-height: 0.70em;
            
            animation: animate 5s linear infinite;
                }
              h1{
            margin-top:150px;
            position: relative;
            font-size:10em;
            letter-spacing:15px;
            color:#0e3742;
            text-transform:uppercase;
            width:100%;
            text-align:center;
            -webkit-box-reflect: below 1px linear-gradient(transparent,#0004);
            line-height: 0.70em;
            outline:none;
            animation: animate 5s linear infinite;
            }
            @keyframes animate{
            
                0%,18%,20%,50%,60%,65%,80%,90.1%,92%
                {
                 color:#03bcf4;
                 text-shadow: none;
                }
                18.1%,20.1%,30%,50%,60%,65%,80.1%,90%,92.1%,100%
                {
                 color:#ffff;
                  text-shadow: 
                  0 0 10px #03bcf4,
                  0 0 20px #03bcf4,
                  0 0 40px #03bcf4,
                  0 0 80px #03bcf4,
                  0 0 160px #03bcf4;
                }
              
            </style>";
            


  
        $valor1 = $_POST['txtval1'];
        $valor2 = $_POST['txtval2'];
        $ope = $_POST['ope'];

            switch($ope) {
                case 'soma':
                    $result = $valor1 + $valor2;
                     echo "<div class='RESULTADO'>
                        <center>
                        <h1>$result</h1>
                        <a href='Calculadora.php'>  
                        <button class='button'> VOLTAR </button>
                        </center>
                    </div>";
                    break;
                case 'sub':
                    $result = $valor1 - $valor2;
                    echo "<div class='RESULTADO'>
                    
                       <center>
                        <h1>$result</h1>
                        <a href='Calculadora.php'>  
                        <button class='button'> VOLTAR </button>
                        </center>
                        
                    </div>";
                    break;
                case 'mult':
                    $result = $valor1 * $valor2;
                    echo "<div class='RESULTADO'>
                     <center>
                        <h1>$result</h1>
                        <a href='Calculadora.php'>  
                        <button class='button'> VOLTAR </button>
                        </center>
                    </div>";
                    break;
                case 'div':
                      $result = $valor1 / $valor2;
                    echo "<div class='RESULTADO'>
                        <center>
                        <h1>$result</h1>
                        <a href='Calculadora.php'>  
                        <button class='button'> VOLTAR </button>
                        </center>
                    </div>";
                    break;
                default: $result = "Escolha uma opção";

            }



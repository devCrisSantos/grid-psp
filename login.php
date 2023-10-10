<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Grid PSP</title>
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--<section class="ftco-section"> -->
        <br><div class="container">			
			<div class="row justify-content-center">				
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
				        <center><img src="logoPsp.png" width="280"><br><font size=4 color=green>Programação para o Serviço de Pioneiro</font></center>
				        <div class="login-wrap p-4 p-md-3"></div><div class="login-wrap p-4 p-md-1"></div>
				        <form action="loginAcesso.php?cmd=check" method="POST" class="login-form">
		      		        <script>
                                const urlParams = new URLSearchParams(window.location.search);
                                const erroValue = urlParams.get('erro');
                                if(erroValue>0) document.write(`<p><center><b><font color=red>Login incorreto. Tente novamente.</font></b></p>`);
                            </script>
							
		      		        <div class="form-group">
		      			        <font size=3 color=green>E-mail::</font>
								<input type="text" name="email" class="form-control rounded-left" placeholder="E-mail" autofocus required><br>		      		        
								<font size=3 color=green>Senha:</font>
	                            <input type="password" name="pass" class="form-control rounded-left" placeholder="Senha" required>
							</div>
	                        <div class="form-group d-md-flex">
	            	            <div class="w-8"></div>
	            	        </div><br>
	            	        <center><button type="submit" style="width: 180px; height: 50px;"><font color=green size=3><b>Acessar</b></font>&nbsp;&nbsp;<img src="entrar.png" width="30" height="30" border="0"></button>
							<center><a href='../grid' <br><img src="voltar.png" width="20">&nbsp;<b><font color=green size=2>Voltar</font></b></a></center>
	                    </form>
	                </div>
				</div>
			</div>
		</div>
	<!--</section>-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
    <script> document.form1.</script>
    
    
</body>
</html>

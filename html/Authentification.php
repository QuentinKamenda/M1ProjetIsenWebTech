

<div>

	<!-- Login Page> </!--> 
	<div id='loginPage'>

			<h1>Authentification Page</h1>

			<div class="login">
				<h2>Login</h2>	<!-- Title > </!-->
				<!-- Bloc du formulaire ></!-->
				<form name="form" role="form" action="usercheck.php" method="post">
					<!-- Partie Username ></!-->
					<div class="form-group">
						<div class="input-group">
							<!-- Avant la case></!-->
							<label class="input-group-addon">Username</label>
							<!-- Case pour input></!-->
							<input type="text" name="username" class="form-control" id="input-connexion-username" aria-describedby="ipadd" placeholder="Username">
							<!-- Après la case >
							<span class="help-block">Username unavailable or invalid.</span></!-->
						</div>
					</div>
					<!-- Partie Password ></!-->
					<div class="form-group">
						<label for="password">Password :</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Password" required />
						
					</div>
					<!-- Partie Boutons ></!-->
					<div class="form-actions">
						<!-- Bouton confirmer ></!-->
						<button type="submit" class="submit-btn">Login</button>
						<!-- Bouton de lien vers la page "Register" ></!-->
						<a href="index.php?action=Register" class="submit-link">Create an account</a>
					</div>
				</form>
			</div>
	</div>

</div>

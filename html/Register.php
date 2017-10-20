

<div>

<!-- Register Page> </!-->
<div id="registerPage">

		<h1>Register Page</h1>

		<div class="login">
			<h2>Register</h2>
			<!-- Bloc du formulaire ></!-->
			<form name="form" role="form" action="account.php" method="post">
				<!-- Partie Username ></!-->
				<div class="form-group">
					<div class="input-group">
						<!-- Avant la case ></!-->
						<label class="input-group-addon">Username :</label>
						<!-- Case pour input></!-->
						<input type="text" class="form-control" name="username" id="input-connexion-username" aria-describedby="ipadd" placeholder="Username"required/>
						<!-- Après la case >
						<span class="help-block">Username unavailable or invalid.</span></!-->
					</div>
				</div>
				<!-- Partie Mail ></!-->
				<div class="form-group">
					<label for="mail">Mail address</label>
					<input type="text" name="mail" id="input-connexion-mail" class="form-control" placeholder="exemple@exemple.com" required />
					
				</div>
				<!-- Partie Password ></!-->
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="pass" id="password" class="form-control password" placeholder="Password" required/>
					
				</div>
				<!-- Partie Confirm Password ></!-->
				<div class="form-group">
					<label for="password">Confirm password</label>
					<input type="password" name="confirmpass" id="password" class="form-control" placeholder="Password" required/>
					
				</div>
				<!-- Partie Boutons ></!-->
				<div class="form-actions">
					<!-- Bouton confirmer ></!-->
						<button type="submit" class="submit-btn">Register</button>
					<!-- Bouton de lien vers la page "Register" ></!-->
					<a href="index.php?action=Authentification" class="submit-link">Already registered</a>
				</div>
			</form>
			
		</div>
</div>
		



		
</body>


</div>		
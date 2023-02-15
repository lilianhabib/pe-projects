var thePage = {}


thePage.welcome = `

	<div class='welcome-content'>
		<text-content>
			<h1 class='loud-voice'>Pizza Crafter</h1>
			<p class='intro-voice'>Who's hungry? Make delectable pizzas for your guests using this interactive pizza game!</p>
		</text-content>

		<div class='welcome-container'>
			<button data-screen="login" class='login-btn small-voice'>Login</button> 
		</div>
	</div>



`;

thePage.login = `
	<div class='logsn-content'>
		<text-content>
			<h1 class='loud-voice'>Pizza Crafter</h1>
		</text-content>

		<form method='POST'>
			<div class='fields'> 
				<label class='label-voice'>Username</label>
				<input type='text' class='input-text'>
			</div> 

			<div class='fields'> 
				<label class='label-voice'>Password</label>
				<input type='text' class='input-text'>
			</div>

			<div class='login-btn-container'>
				<button data-screen="instructions" class='login-btn small-voice'>Login</button> 
			</div>
		</form>
	</div>

`;

thePage.instructions = `<p>THIS IS THE INSTRUCTIONS PAGE</p>`



export default thePage; 

</head>
<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>TheBlog</h1>
			<p> 
			    Hi! <br> 
			    We speak about any  <br> 
			    world issues related to AI(Artificial Inteligence). <br>
			</p>
			<a href="register.php" class="btn">Sign Up!</a>
		</div>

		<div class="login_div">
			<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
				<h2>Login</h2>
				<div style="width: 60%; margin: 0px auto;">
					<?php include(ROOT_PATH . '/includes/errors.php') ?>
				</div>
				<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
				<input type="password" name="password"  placeholder="Password"> 
				<button class="btn" type="submit" name="login_btn">Sign in</button>
				<button type="submit" class="btn" name="forgot_btn">Forgot Password?</button>
			</form>
		</div>
	</div>
<?php } ?>
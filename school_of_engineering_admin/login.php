<?php if (!isset($Translation)) {
	@header('Location: index.php?signIn=1');
	exit;
} ?>
<?php if (MULTI_TENANTS) redirect(SaaS::loginUrl(), true); ?>
<?php include_once(__DIR__ . '/header.php'); ?>

<?php if (Request::val('loginFailed')) { ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
<?php } ?>

<div class="form-content">
	<div class="main-form-container">
		<div class="" id="login_splash">
			<!-- customized splash content here -->
		</div>
		<div class="d-flex dir-col j-space-between a-center">
			<div class="d-flex dir-col j-space-between a-center">

				<div class="sign-in-header-container">
					<p class="sign-in-header">Welcome to School Of Engineering</p>
					<p>Login here using your username and password</p>

				</div>

				<div class="d-flex dir-col j-space-between a-center">
					<?php if (sqlValue("SELECT COUNT(1) from `membership_groups` WHERE `allowSignup`=1")) { ?>
						<a class="" href="membership_signup.php"><?php echo $Translation['sign up']; ?></a>
						<div class="clearfix"></div>
					<?php } ?>

					<form method="post" class="d-flex dir-col j-space-between a-center login-form" action="index.php">
						<div class="">
							<label class="" for="username"><?php echo $Translation['username']; ?></label> <br>
							<input class="" name="username" id="username" type="text" placeholder="<?php echo $Translation['username']; ?>" required>
						</div>
						<div class="">
							<label class="" for="password"><?php echo $Translation['password']; ?></label> <br>
							<input class="" name="password" id="password" type="password" placeholder="<?php echo $Translation['password']; ?>" required>
						</div>
						<div class="d-flex j-space-between ">
							<label class="" for="rememberMe">
								<input type="checkbox" name="rememberMe" id="rememberMe" value="1">
								<?php echo $Translation['remember me']; ?>
							</label>
							<span class="forgot-pass"><a href="">Lost password?</a></span>
						</div>
						<div class="login-btn">
							<button name="signIn" type="submit" id="submit" value="signIn" class=""><?php echo $Translation['sign in']; ?></button>
						</div>
					</form>
				</div>

				<?php if (is_array(getTableList()) && count(getTableList())) { /* if anon. users can see any tables ... */ ?>
					<div class="panel-footer">
						<a href="index.php"><i class=""></i> <?php echo $Translation['continue browsing as guest']; ?></a>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
</div>

<script>
	document.getElementById('username').focus();
</script>
<?php include_once(__DIR__ . '/footer.php');

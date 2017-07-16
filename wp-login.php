<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-US">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>xGem &lsaquo; Log In</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' href='/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='wsl-widget-css'  href='/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='gglcptch-css'  href='/wp-content/plugins/google-captcha/css/gglcptch.css?ver=1.30' type='text/css' media='all' />
	<!-- Login Logo plugin for WordPress: http://txfx.net/wordpress-plugins/login-logo/ -->
	<style type="text/css">
		.login h1 a {
			background: url(/wp-content/login-logo.png?v=1490499504) no-repeat top center;
			width: 312px;
			height: 99px;
			margin-left: 8px;
			padding-bottom: 16px;
			background-size: contain; -o-background-size: contain; -webkit-background-size: contain; -khtml-background-size: contain; -moz-background-size: contain; -ms-background-size: contain; 		}
	</style>
<meta name='robots' content='noindex,follow' />
	<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="/wp-content/uploads/2016/12/cropped-logo-cuadrado-32x32.jpg" sizes="32x32" />
<link rel="icon" href="/wp-content/uploads/2016/12/cropped-logo-cuadrado-192x192.jpg" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="/wp-content/uploads/2016/12/cropped-logo-cuadrado-180x180.jpg" />
<meta name="msapplication-TileImage" content="http://www.xgem.com.ar/wp-content/uploads/2016/12/cropped-logo-cuadrado-270x270.jpg" />
	</head>
	<body class="login login-action-login wp-core-ui  locale-en-us">
		<div id="login">
		<h1><a href="/" title="xGem" tabindex="-1">xGem</a></h1>
	
<form name="loginform" id="loginform" action="/wp-login.php" method="post">
	<p>
		<label for="user_login">Username or Email Address<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
	
<!--
	wsl_render_auth_widget
	WordPress Social Login 2.3.3.
	http://wordpress.org/plugins/wordpress-social-login/
-->

<style type="text/css">
.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>

<div class="wp-social-login-widget">

	<div class="wp-social-login-connect-with">Connect with:</div>

	<div class="wp-social-login-provider-list">

		<a rel="nofollow" href="/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Facebook&#038;redirect_to=http%3A%2F%2F%2Fwp-login.php" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
			<img alt="Facebook" title="Connect with Facebook" src="/wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom//facebook.png" />
		</a>

		<a rel="nofollow" href="/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Google&#038;redirect_to=http%3A%2F%2F%2Fwp-login.php" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
			<img alt="Google" title="Connect with Google" src="/wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom//google.png" />
		</a>

		<a rel="nofollow" href="/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Twitter&#038;redirect_to=http%3A%2F%2F%2Fwp-login.php" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
			<img alt="Twitter" title="Connect with Twitter" src="/wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom//twitter.png" />
		</a>

		<a rel="nofollow" href="/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=LinkedIn&#038;redirect_to=http%3A%2F%2F%2Fwp-login.php" title="Connect with LinkedIn" class="wp-social-login-provider wp-social-login-provider-linkedin" data-provider="LinkedIn">
			<img alt="LinkedIn" title="Connect with LinkedIn" src="/wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom//linkedin.png" />
		</a>

	</div>

	<div class="wp-social-login-widget-clearing"></div>

</div>

<!-- wsl_render_auth_widget -->

	<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
		<input type="hidden" name="redirect_to" value="http://www.xgem.com.ar/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
<a rel="nofollow" href="/wp-login.php?action=register">Register</a> | 	<a href="/my-account/lost-password/">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

/**
 * Filters whether to print the call to `wp_attempt_focus()` on the login screen.
 *
 * @since 4.8.0
 *
 * @param bool $print Whether to print the function call. Default true.
 */
wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="/">&larr; Back to xGem</a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	
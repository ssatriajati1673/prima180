<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prima 180 | Log in</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

	<link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/template') ?>/dist/css/adminlte.min.css?v=3.2.0">
	<script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwTG9nJTIwaW4lMjIlMkMlMjJ4JTIyJTNBMC4yNDExODUwMzYwMTM1NDg4JTJDJTIydyUyMiUzQTEzNjYlMkMlMjJoJTIyJTNBNzY4JTJDJTIyaiUyMiUzQTY1NyUyQyUyMmUlMjIlM0ExMzY2JTJDJTIybCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGYWRtaW5sdGUuaW8lMkZ0aGVtZXMlMkZ2MyUyRnBhZ2VzJTJGZXhhbXBsZXMlMkZsb2dpbi5odG1sJTIyJTJDJTIyciUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZS5jb20lMkYlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTQyMCUyQyUyMnElMjIlM0ElNUIlNUQlN0Q="></script>
	<script nonce="165016e0-fcc9-4606-8f58-d63d93b9d669">
		(function(w, d) {
			! function(a, e, t, r) {
				a.zarazData = a.zarazData || {};
				a.zarazData.executed = [];
				a.zaraz = {
					deferred: []
				};
				a.zaraz.q = [];
				a.zaraz._f = function(e) {
					return function() {
						var t = Array.prototype.slice.call(arguments);
						a.zaraz.q.push({
							m: e,
							a: t
						})
					}
				};
				for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
				a.zaraz.init = () => {
					var t = e.getElementsByTagName(r)[0],
						z = e.createElement(r),
						n = e.getElementsByTagName("title")[0];
					n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
					a.zarazData.x = Math.random();
					a.zarazData.w = a.screen.width;
					a.zarazData.h = a.screen.height;
					a.zarazData.j = a.innerHeight;
					a.zarazData.e = a.innerWidth;
					a.zarazData.l = a.location.href;
					a.zarazData.r = e.referrer;
					a.zarazData.k = a.screen.colorDepth;
					a.zarazData.n = e.characterSet;
					a.zarazData.o = (new Date).getTimezoneOffset();
					a.zarazData.q = [];
					for (; a.zaraz.q.length;) {
						const e = a.zaraz.q.shift();
						a.zarazData.q.push(e)
					}
					z.defer = !0;
					for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
						try {
							a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
						} catch {
							a.zarazData["z_" + t.slice(7)] = e.getItem(t)
						}
					}));
					z.referrerPolicy = "origin";
					z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
					t.parentNode.insertBefore(z, t)
				};
				["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
			}(w, d, 0, "script");
		})(window, document);
	</script>
</head>

<body class="login-page" style="min-height: 496.781px;">
	<div class="login-box" style="text-align: center;">
	<img src="<?= base_url('assets/img') ?>/Logo BPS PGA.png" alt="AdminLTE Logo"
	style="width:300px;" class="brand-image">
		<div class="login-logo">
			<a href="../../index2.html"><b>Prima</b>180</a>
		</div>

		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Silakan Log in</p>
				<?php echo form_open('login/ceklogin') ?>
					<div class="input-group mb-3">
						<input type="text" name="user" class="form-control" placeholder="Username">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-address-book"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="pass" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<div class="icheck-primary">
							</div>
						</div>

						<div class="col-4">
							<button type="submit" name="login" value="LOGIN" class="btn btn-primary btn-block">Sign In</button>
						</div>
					</div>
				<?php echo form_close() ?>
			</div>

		</div>
	</div>

	<script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/template') ?>/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
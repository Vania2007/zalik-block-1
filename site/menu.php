<nav class="site-nav">
	<div class="container">
		<div class="site-navigation">
			<a href="./" class="logo m-0">Dreamtour<span class="text-primary"> .</span></a>
				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li><a href="./">Головна</a></li>
					<li><a href="./tours.php">Тури</a></li>
					<li><a href="contacts.php">Контакти</a></li>
				<?php if (isset($_GET['login'])): ?>
                   <li><a class="nav-item nav-link" href="logout.php">Вийти</a></li>
    	           	<?php else: ?>
	               	<li><a href="login.php">Увійти</a></li>
        	       	<?php endif; ?>
				</ul>
			<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
				<span></span>
			</a>
		</div>
	</div>
</nav>

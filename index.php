<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>HTML5/CSS3 - Website Responsivo</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body class="body">
		<!-- header -->
		<header class="main-header">
			<img src="img/logo.png" alt="Logo Topo Site">
			<!-- nav -->
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Sobre</a></li>
					<li><a href="#">Portfólio</a></li>
					<li><a href="#">Contato</a></li>
				</ul>
			</nav>
		</header>
		<!-- Main content -->
		<div class="main-content">
			<div class="content">
				<article class="block-content">
					<header>
						<h2><a href="#" title="Primeiro Post">Segundo Post</a></h2>
					</header>
					
					<content>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat lacus id enim convallis, eget mollis dui rutrum. 
							Etiam et tellus quis velit ultricies lobortis id ullamcorper nibh. Mauris tincidunt, massa quis interdum dignissim, eros nisl 
							commodo purus, quis mollis nulla justo vitae sem. Etiam vel lacus rutrum, mattis magna sit amet, placerat tellus. Phasellus 
							luctus condimentum urna, vitae ultricies lorem efficitur pulvinar. Proin venenatis maximus faucibus. Ut at consectetur sem. 
							Aliquam odio lorem, dapibus mattis nibh ac, congue mattis ex. Maecenas ut dui mauris. Etiam ut lacus non lacus convallis sagittis 
							pharetra ac orci. In felis leo, feugiat ac facilisis id, pellentesque non magna. Nam augue urna, ultricies at scelerisque a, 
							lobortis eget erat. Cras massa ex, blandit ornare augue vel, tincidunt vulputate magna.
						</p>
					</content>
					
					<footer>
						<p class="post-info">Este post foi escrito por Leandro Marchon</p>
					</footer>
				</article>
				
				<article class="block-content">
					<header>
						<h2><a href="#" title="Primeiro Post">Primeiro Post</a></h2>
					</header>
					<content>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat lacus id enim convallis, eget mollis dui rutrum. 
							Etiam et tellus quis velit ultricies lobortis id ullamcorper nibh. Mauris tincidunt, massa quis interdum dignissim, eros nisl 
							commodo purus, quis mollis nulla justo vitae sem. Etiam vel lacus rutrum, mattis magna sit amet, placerat tellus. Phasellus 
							luctus condimentum urna, vitae ultricies lorem efficitur pulvinar. Proin venenatis maximus faucibus. Ut at consectetur sem. 
							Aliquam odio lorem, dapibus mattis nibh ac, congue mattis ex. Maecenas ut dui mauris. Etiam ut lacus non lacus convallis sagittis 
							pharetra ac orci. In felis leo, feugiat ac facilisis id, pellentesque non magna. Nam augue urna, ultricies at scelerisque a, 
							lobortis eget erat. Cras massa ex, blandit ornare augue vel, tincidunt vulputate magna.
						</p>
					</content>
					<footer>
						<p class="post-info">Este post foi escrito por Leandro Marchon</p>
					</footer>
				</article>
			</div>
		</div>
		<!-- sidebar -->
		<aside class="sidebar">
			<article>
				<h2>Top Sidebar</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat lacus id enim convallis, eget mollis dui rutrum.
				</p>
				<footer>
					<p class="sidebar-info"><a href="#">Leia mais...</a></p>
				</footer>
			</article>
		</aside>
		
		<aside class="sidebar">
			<article>
				<h2>Middle Sidebar</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat lacus id enim convallis.
				</p>
				<footer>
					<p class="sidebar-info"><a href="#">Leia mais...</a></p>
				</footer>
			</article>
		</aside>
		
		<aside class="sidebar">
			<article>
				<h2>Bottom Sidebar</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</p>
				<footer>
					<p class="sidebar-info"><a href="#">Leia mais...</a></p>
				</footer>
			</article>
		</aside>
		<!-- footer -->
		<footer class="main-footer">
			<p>Copyright &copy; <?php echo date('Y');?> - <a href="#">Leandro Marchon</a></p>
		</footer>
	</body>
</html>
<nav>
<ul>
<li><a href="/index.php">Início</a></li>
<li><a href="/programacao.php">Programação</a></li>
<li><a href="/cadastro.php">Cadastro</a></li>
<li><a href="/participantes.php">Participantes</a></li>

<?php if(isset($_SESSION['admin'])): ?>
<li><a href="/admin/dashboard.php">Dashboard</a></li>
<li><a href="/logout.php">Sair</a></li>
<?php else: ?>
<li><a href="/login.php">Login</a></li>
<?php endif; ?>
</ul>
</nav>

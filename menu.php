<ul>
			<li class="active"><a href="http://localhost/hindun4/index.php#" title="">Home</a></li>
			<li><a href="http://localhost/hindun4/pendaftaran.php" title="">Pendaftaran</a></li>
			<li><a href="http://localhost/hindun4/profilDTA.php" title="">Profil DTA</a></li>
			<?php
			if(isset($_SESSION['login_user'])){
			?>
			<li><a href="http://localhost/hindun4/profilsantri.php" title="">Profil Santri</a></li>
			<?php
			}
			?>
			<li><a href="http://localhost/hindun4/profilguru.php" title="">Profil Guru</a></li>
			<li><a href="http://localhost/hindun4/informasi.php" title="">Informasi DTA</a></li>
		</ul>
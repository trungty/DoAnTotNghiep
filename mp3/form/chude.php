<?php
	session_start();
	include("config.php");
?>
<div class="box w_1">
	<h1>Chủ đề hot<br class="clr"></h1>
	<div class="padding">
		<ul>
            <?php 
							 $menu=mysqli_query($link,"select chude from chude ORDER BY chude ASC limit 10");
							 if(mysqli_num_rows($menu)>0)
							 {
								while($row=mysqli_fetch_array($menu))
								{
							?>
								<li><a href="#"><?php echo $row['chude'];?></a></li>
							<?php
							}
							}
							?>
		</ul>
	</div>
</div>                                	
<div class="box w_1">
	<h1>Ca Sỹ</h1>
	<div class="padding">
		<ul>
            <?php 
							 $menu=mysqli_query($link,"select casy from casy order by casy asc limit 42");
							 if(mysqli_num_rows($menu)>0)
							 {
								while($row=mysqli_fetch_array($menu))
								{
							?>
								<li><a href="./?mod=bhcasy&ten=<?php echo $row['casy'];?>"><?php echo $row['casy'];?></a></li>
							<?php
							}
							}
							?>
		</ul>
	</div>
</div>

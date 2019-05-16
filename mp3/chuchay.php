<center>
	<marquee onMouseOver="this.stop();" onMouseOut="this.start();" behavior="scroll" direction="left" scrollamount="5" width="900px">
		<font color="red">
		<b>
			<?php
                $noidung=mysqli_query($link,"select * from chuchay where id='1'");
                $row=mysqli_fetch_array($noidung);
                echo $row['noidung'];
                    
            ?>
		</b>
        </font>
	</marquee>
</center>
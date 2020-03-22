<HTML>
<HEAD>
	<TITLE> D&eacute;lice des fruits et l&eacute;gumes</TITLE>
</HEAD>
<BODY>
<BR><BR><BR>
	<H1> <CENTER> D&eacute;lice des fruits &amp; l&eacute;gumes</CENTER> </H1>
<BR><BR><BR>	

	<TABLE WIDTH = 70% align = "center">
		<tr>					
			<?php		
				$Images = array("Images/i1.jpg", "Images/i2.jpg", "Images/i3.jpg" ,"Images/i4.jpg", "Images/i5.jpg" ,"Images/i6.jpg") ;
				shuffle ($Images) ; 
			?>
				
			<?php for ($i=0 ; $i<3 ; $i++){?>
				<td width="250" height="330" bgcolor="white" ><div align="center"><img src="<?php echo $Images[$i]; ?>" width=\"280\" height=\"230\" border=\"2\"/> </div> </td>
			<?php } ?>
			
		</tr>
	</TABLE>

</BODY>
</HTML>
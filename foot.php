<footer id="footer"><p>Copyrights 2016-2017  version: <?php 
$sql="SELECT * FROM `theme`";
$result=$mysqli->query($sql);
$row = $result->fetch_assoc();
echo $row["version"];
?>
</p</footer>
</body>
</html>

<footer id="footer"><p>version: <?php 
$sql="SELECT * FROM `theme`";
$result=$mysqli->query($sql);
$row = $result->fetch_assoc();
echo $row["version"];
?>
</p</footer>
</body>
</html>

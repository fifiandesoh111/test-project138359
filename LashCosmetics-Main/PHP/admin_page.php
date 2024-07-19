
 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="content">
                
                </div>
                <div id="child2">
                    <div id="child2sChild1">
                        <form action="login.php" method="post"></form>
                        <h1 style="color:hotpink;" id="indexHeaderText">LASH COSMETICS</h1>
                        <p style="color:hotpink;" id="indexSloganText"><i>Vibrant Slay & Glow!</i></p>
                    </div>
                </div>
            </div>
            <nav id="nav">
                <ul>
                  <li><a href="index.html">Home</a></li>




    <!-- Download report button -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="download_report" value="Download Users Report">
    </form>

    <?php
    // Handle download report action
    if (isset($_POST['download_report'])) {
        downloadReport();
    }
    ?>

</body>
</html>

<?php
// Close database connection
$conn->close();
?>

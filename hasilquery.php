<!DOCTYPE HTML>
<html>
<head>
  <title>STBI</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php"> SISTEM ONLINE | STBI </a></h1>
          <h2>Sistem Temu Kembali Informasi</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="upload.php">Upload</a></li>
          <li><a href="download.php">Download</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="stemming.php">Stemming</a></li>
          <li><a href="tokenisasi.php">Tokenisasi</a></li>
          <li class="selected"><a href="query.php">Query</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content ul li">
        <!-- insert the page content here -->
        <div class="col-sm-8 text-left"> 
              <hr>
              <h3>Hasil Dari Pencarian</h3>
               <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nama File</th>
                <th>Token</th>
                <th>Tokenstem</th>
              </tr>
            </thead>



         <?php
         //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
         //ALTER TABLE dokumen
        //ADD FULLTEXT INDEX `FullText` 
        //(`token` ASC, 
         //`tokenstem` ASC);
         
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbstbi";
        $katakunci="";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $hasil=$_POST['katakunci'];
        $sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` where token like '%$hasil%'";
        //$sql = "SELECT distinct nama_file,token FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil')";



        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            	?>
            <tbody>
              <tr>
                <td><?php echo "" . $row["nama_file"].""?></td>
                <td><?php echo "" . $row["token"].""?></td>
                <td><?php echo "" . $row["tokenstem"].""?></td>
              </tr>
            </tbody>

            	<?php
              
            }
        } else {
            echo "0 results";
        }
        $conn->close();

        ///

        ?>
        </table>
          </div>
                </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="upload.php">Upload</a> | <a href="stemming.php">Stemming</a> | <a href="tokenisasi.php">Tokenisasi</a> | <a href="download.php">Download</a> | <a href="search.php">Search</a> | <a href="query.php">Query</a></p>
      <p>Dewi Rahayuni 16.01.63.0035 | Indriani  14.01.53.0129</a> | Siti Adha Zuliani 14.01.53.0108</a></p>
    </div>
  </div>
</body>
</html>
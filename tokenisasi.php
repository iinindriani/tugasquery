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
          <h1><a href="index.php">SISTEM ONLINE | STBI </a></h1>
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
          <li class="selected"><a href="tokenisasi.php">Tokenisasi</a></li>
          <li><a href="query.php">Query</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content ul li">
        <!-- insert the page content here -->
        <?php
        //membuat koneksi ke database
        $host = 'localhost';
          $user = 'root';      
          $password = '';      
          $database = 'dbstbi';   
          $konek_db = mysqli_connect($host='localhost', $user='root', $password='');    
          $find_db =  mysqli_select_db($database="dbstbi") ;
        ?>
        <br>
        <a>Kosongkan Tabel : </a> <a href="empty.php" color="red"> KOSONGKAN </a> 

        <center> 
        HASIL TOKENISASI DAN STEMMING
        <br>
        <br>

        <!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

        <table  border='1' Width='500'>  
        <tr>
            <th> Nama File </th>
            <th> Tokenisasi </th>
            <th> Stemming Porter </th>
            
        </tr>

        <?php  
        // Perintah untuk menampilkan data
        $queri="Select * From dokumen" ;  //menampikan SEMUA

        $hasil=Mysqli_query ($queri);    //fungsi untuk SQL

        // perintah untuk membaca dan mengambil data dalam bentuk array
        while ($data = mysqli_fetch_array ($hasil)){
        $id = $data['dokid'];
         echo "    
                <tr>
                <td>".$data['nama_file']."</td>
                <td>".$data['token']."</td>
                <td>".$data['tokenstem']."</td>
                
                </tr> 
                ";
        }

        ?>

        </table>
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

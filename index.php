<?php

 try {
  $host = '127.0.0.1';
$dbname ='test';
$username ='root';
$password = '';

     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     
     // execute the stored procedure
    echo  $sql = 'CALL GetCustomers()';
    //the stored procedure
     $q = $pdo->query($sql);
     print_r($q->setFetchMode(PDO::FETCH_ASSOC));
     
 } catch (PDOException $e) {
     die("Error occurred:" . $e->getMessage());
 }
 ?>
        <table>
            <tr>
                <th>Customer Name</th>
                <th>Credit Limit</th>
            </tr>
            <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo $r['salary'] ?></td>
                    <td><?php echo  $r['name'] ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>?><?php 
 exit;
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" title="Laragon">Laragon</div>
     
                <div class="info"><br />
                      <?php print($_SERVER['SERVER_SOFTWARE']); ?><br />
                      PHP version: <?php print phpversion(); ?>   <span><a title="phpinfo()" href="/?q=info">info</a></span><br />
                      Document Root: <?php print ($_SERVER['DOCUMENT_ROOT']); ?><br />

                </div>
                <div class="opt">
                  <div><a title="Getting Started" href="https://laragon.org/docs">Getting Started</a></div>
                </div>
            </div>

        </div>
    </body>
</html>
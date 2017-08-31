<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
        $hostname = gethostname();
        echo "<p>Hello! You are connected to $hostname </p>";

        echo "<p>Here are the contents of /etc/resolv.conf, /etc/hosts, and /etc/ntp.conf:</p>";

        echo "-- resolv.conf --<br>";
        echo nl2br (file_get_contents( "/etc/resolv.conf" ));
        echo "<br>";

        echo "-- hosts --<br>";
        echo nl2br ( file_get_contents( "/etc/hosts" ));
        echo "<br>";

        echo "-- ntp.conf--<br>";
        echo nl2br (`cat /etc/ntp.conf server | grep ^server`);
        echo "<br>";


 ?>
 </body>
</html>

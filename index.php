<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $sıcaklık =20;
         if($sıcaklık <= -30 and $sıcaklık >= -10 )
         $durum = "cok soguk";

         elseif($sıcaklık >= -10 and $sıcaklık <= 0 )
         $durum = "soguk";

         elseif($sıcaklık >= 1 and $sıcaklık <= 10 )
         $durum = "serin";

         elseif($sıcaklık >= 11 and $sıcaklık <=30 )
         $durum = "sıcak";

         else
         $durum = "cok sıcak";
         echo $durum;
    ?>
</body>
</html>

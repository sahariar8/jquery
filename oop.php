<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class man
{
    public $name;
   

    public function info($name)
    {
        $this->name = $name;
        echo  $this->name;
      
    }
}
$up = new man();
$up->info("shaariar");
// man::info("shahariar");
// echo $sahariar->age.'my age from my property';

// $jim = new man();
// $sahariar->info("Jim");
?>
</body>
</html>
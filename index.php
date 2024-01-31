<?php 
class Item
{
    public $itemName;
    public $price;
    public $img;


    public function __construct($_itemName, $_price, $_img)
    {
        $this->itemName = $_itemName;
        $this->price = $_price;
        $this->img = $_img;
    }
}

class SubItem extends Item
{
    public $type;
    public $animal;

    function __construct($_itemName, $_price, $_img, $_type, Animals $_animal)
    {
        parent::__construct($_itemName, $_price, $_img);
        $this->type = $_type;
        $this->animal = $_animal;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>php-oop-2</title>
</head>
<body>
    
</body>
</html>
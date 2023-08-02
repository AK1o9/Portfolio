<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmed Khalifa - Test</title>
</head>
<body>
<?php
    class Page
    {
        public $title;
        public $subtitle; //i.e. page description
        private $pageCount;

        function __construct($title, $subtitle, $pageCount)
        {
            $this->title = $title;
            $this->subtitle = $subtitle;
            $this->pageCount = $pageCount;
        }

        function getPageCount(){
            return $this->pageCount;
        }

        function setPageCount($pageCount){
            $this->pageCount = $pageCount;
        }
    }

    $homePage = new Page("Home", "Welcome to the home page.", 2);
    $homePage->setPageCount(1);
    echo "<h1>$homePage->title</h1>";
    echo "<h2>$homePage->subtitle</h2>";
    echo "This page has " . $homePage->getPageCount() . " page(s)."
    ?>

</body>
</html>
<?php
switch ($_SERVER['PHP_SELF']){
    case "/firstpage":
        $firstPageController=new FirstPageController();
        $firstPageController->main();
        break;
    
    case "/secondpage":
        $secondPageController=new SecondPageController();
        $secondPageController->main();
        break;
}


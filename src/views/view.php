<?php

class View {
    public static function show($viewName, $data = null) {
        include("header.php");
        include("$viewName.php");
        include("footer.php");
   }
}

?>
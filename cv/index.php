<?php
    $dbserver = 'localhost'
    $dbuser = 'root'
    $dbpass = 'madrid0644'
?>
<!DOCTYPE html>

<?php
    $mysql_id = mysql_connect($dbserver, $dbuser, $dbpass);
    if(!$mysql) {
        die('Cannot connect: ' . mysql_error());
    }
    else { ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html">
        <meta name="author" content="kwendenarmo" >
        <!-- Based on the template by Jake Rocheleau -->
        <title><?php echo Información Profesional ?></title>        
            
        mysql_select_db('cv', $mysql_id);
    }
    mysql_close($mysql_id);
?>
<?
echo "Variable $saludo: $HTTP_GET_VARS["saludo"] <br>n";
echo "Variable $texto: $HTTP_GET_VARS["texto"] <br>n"
?>

        <title>Información Profesional</title>
        <link rel="shortcut icon" href="http://kwendenarmo.es/favicon.ico">
        <link rel="icon" href="http://kwendenarmo.es/favicon.ico">
        <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
        <link rel="stylesheet" type="text/css" media="all" href="css/font-awesome.min.css">
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    </head>
    <body>
        <div id="header">
            <i class="icon-flag icon-medium"></i> Idioma: 
            <select id="lang_box" name="lang" size="1">
                <option value="es_ES" label="[ES] Español" selected="selected"></option>
                <option value="en_GB" label="[EN] English"></option>
            </select>
        </div>

        <script>
            $(function() {
                // bind change event to select
                $('#lang_box').bind('change', function () {
                    var lang = $(this).val(); // get selected value
                    if (lang) { // require a URL
                        window.location = index.php?l=lang&v=; // redirect
                    }
                    return false;
                });
            });
        </script>
    </body>
</html>

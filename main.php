<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body leftmargin="0" marginheight="0" marginwidth="0" topmargin="0">
        <table cellspacing="0" cellpadding="0" border="0" align="center">
            <tr>
                <?php
                $folder = "galerie";
                if (file_exists($folder))
                    {
                    $files = scandir($folder);
                    sort($files);
                    $count = 1;
                    foreach ($files as $file)
                    {
                        if(preg_match('/.jpg/', $file) OR preg_match('/.png/', $file))
                        {
                            if($file != "." && $file != ".." &&  !is_dir($file))
                            {
                                echo "<td><img src=$folder/$file border='0' height='450'>&nbsp;</td>";
                                if($count%2==0)
                                {
                                    echo "</tr>\n<tr>";
                                }
                                $count = $count + 1;
                            }
                        }
                    }
                }
                ?>
            </tr>
        </table>
    </body>
</html>


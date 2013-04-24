<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>ASCII Christmas Tree Generator</title>
    </head>
    <body>
        <?php
        // Script 10.2 - sticky1.php 
       
        function drawStarTree($size=5) {            
            $s = intval($size);
            print "<pre>\n";
            
            // top tree part
            for ($count = 1; $count <= $s; $count++) {
                
                // print left spaces
                for ($leftSpaces = $s-$count; $leftSpaces>0; $leftSpaces--) {
                    print "&nbsp;";
                }
                
                // print stars
                for ($stars = 0; $stars < ( (2*$count)-1 ); $stars++) {
                    print "*";
                }
                print "<br />\n";

            }
            // trunk
            $trunkheight = ($s / 3);
            
            for ($k=1; $k <= $trunkheight; $k++) {
                for ($a=1; $a < $s; $a++) {
                    print "&nbsp;";
                }
                print "#<br />\n";
            }
            
            print "\n</pre>";
            
        } // end tree function
        
        
        if ( isset($_POST['treeSize'])) {
            print drawStarTree($_POST['treeSize']);
        }
        
        ?>

        Print a christmas tree! Enter how tall you want your tree in vertical lines
        <form action="" method="post">
            Size of tree? <input type="number" name="treeSize" />
            <input type="submit" name="submit" value="Make Tree!" />
        </form>
    </body>
</html>
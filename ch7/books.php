<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Larry Ullman's Books and Chapters</title>
    </head>
    <body>
        <h1>Some of Larry Ullman's books</h1>
        <?php // Script 7.4 books.php
            // set error handling
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            
            $phpvqs = array(1 => 'Getting Started with PHP',
                              'Variables', 'HTML Forms and PHP',
                              'Using Numbers');
            $phpadv = array(1 => 'Advanced PHP Techniques', 'Developing Web Applications',
                                'Advanced Database Concepts', 'Security Techniques');
            
            $phpmysql = array(1 => 'Introduction to PHP', 'Programming with PHP', 
                                'Creating Dynamic Web Sites', 'Introduction to MySQL');
            
            // multi dimensional array
            $books = array( 'PHP VQS' => $phpvqs,
                            'PHP Advanced VQP' => $phpadv,
                            'PHP and MySQL VQP' => $phpmysql
                          );
            
            print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
            print "<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>";
            print "<p>The fourth chapter of my fourth book is <i>{$books['PHP and MySQL VQP'][4]}</i>.</p>";
            
            // single foreach loop
            foreach ($books as $key => $value) {
                print "<p>$key: $value</p>\n";
            }
            print "<hr />";
            
            // double foreach loop
            foreach($books as $key => $title) {
                print "<p>$key</p>\n";
                foreach($title as $number => $chaptitle) {
                    print "<p>$number: $chaptitle</p>\n";
                } 
                    
            }
        ?>
    </body>
</html>

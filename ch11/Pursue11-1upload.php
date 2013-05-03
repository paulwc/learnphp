<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Upload a File</title>
    </head>
    <body>
        <?php
        // Pursue11-1upload - based on upload_file.php
        /* This script displays and handles an HTML form. This script takes a file upload and stores it on the server. */

        $upload_directory = "../../../uploads/";

        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) { // Handle the form.
            if ( file_exists($upload_directory) && is_writable($upload_directory) ) {
                // Try to move the uploaded file:
                if ( move_uploaded_file($_FILES['the_file']['tmp_name'], $upload_directory."{$_FILES['the_file']['name']}") ) {

                    print '<p>Your file has been uploaded.</p>';
                }
                else { // Problem!
                    print '<p style="color: red;">Your file could not be uploaded because: ';

                    // Print a message based upon the error:
                    switch ($_FILES['the_file']['error']) {
                        case 1:
                            print 'The file exceeds the upload_max_filesize setting in php.ini';
                            break;
                        case 2:
                            print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';
                            break;
                        case 3:
                            print 'The file was only partially uploaded';
                            break;
                        case 4:
                            print 'No file was uploaded';
                            break;
                        case 6:
                            print 'The temporary folder does not exist.';
                            break;
                        default:
                            print 'Something unforeseen happened.';
                            break;
                    }

                    print '.</p>'; // Complete the paragraph.
                } // End of move_uploaded_file() IF.
            } // end of file existence and writable check
            else {
                print '<p>The uploads directory does not exist or is not writeable</p>';
            }
        } // End of submission IF.

        // Leave PHP and display the form:
        ?>

        <form action="Pursue11-1upload.php" enctype="multipart/form-data" method="post">
            <p>Upload a file using this form:</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
            <p><input type="file" name="the_file" /></p>
            <p><input type="submit" name="submit" value="Upload This File" /></p>
        </form>

    </body>
</html>
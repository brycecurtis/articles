This is the PhoneGap Camera Upload Demo application.

It demonstrates how to upload a picture from an Android device to a server.

Setup:

The "Android" directory contains an Android Project that can be imported into Eclipse.

    1. Edit index.html to point to your server URL.  Search for input element with id = "serverUrl" and edit it's value.
     
The "Server" directory contains "upload.php" that can be installed on a web server with PHP enabled.  The directory where the the uploaded pictures are to be stored may need to be modified in "upload.php".

    1. Edit upload.php to specify the upload directory.  Search for $dirname and edit it's value.

To use:

    1. Take a picture or select a picture from the photo album using the Camera service.
    2. Specify the URL of the server where upload.php is located.
    3. Upload the picture to the server using the FileTransfer service.
    4. View the uploaded pictures on the server using XHR.
    

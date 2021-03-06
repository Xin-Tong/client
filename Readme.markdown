# Client.php
----------------------------------------

This php file is used for sending request to the front-end of Openphoto using
Linux command line. This client is rewritten based on the openphoto-php client
[here](https://github.com/photo/openphoto-php)

----------------------------------------

## Configure the OAuth Environment Variables

Run source oauth.sh to configure 4 OAuth credentials, which are generated by
OpenPhoto website. You can get your credentials by going to
http://domainname/v1/oauth/flow.  Once completed the credentials you just
created will be given in the url.

----------------------------------------

## Meaning for each flag
* -h: the address of the host
* -o: the operation the user want to perform
* -i: the photo ID
* -p: the path of the photo needed to be processed (e.g., upload)
* -t: tags added to the specific photo

----------------------------------------

## Example
* Send hello message to front-end host 1.2.3.4
    + Command: 
        $php client.php -h 1.2.3.4 -o hello
    + Output: 
        {
          "message" : "Hello, world!",
          "code" : 200,
          "result" : {
            "__route__" : "\/hello.json",
            "oauth_consumer_key" : ""
          }
        }
* Upload a photo to front-end host 54.85.111.90
    + Command: 
        $php client.php -h 54.85.111.90 -o upload -p ./test.png
    + Output: 
        {
          "message" : "Photo b uploaded successfully",
          "code" : 201,
          "result" : {
            "id" : "b",
            "owner" : "tongxinhit@gmail.com",
            "actor" : "tongxinhit@gmail.com",
            "appId" : "openphoto-frontend",
            "host" : "54.85.65.72-xin.s3.amazonaws.com",
            "title" : "",
            "description" : "",
            "key" : null,
            "hash" : "df8d2b91596908d53ab2a135d3bb470e7dfda989",
            "size" : "303",
            "width" : "1280",
            "height" : "1024",
            "rotation" : "0",
            "latitude" : null,
            "longitude" : null,
            "views" : "0",
            "status" : "1",
            "permission" : "0",
            "license" : "",
            "dateTaken" : "1399663343",
            "dateTakenDay" : "9",
            "dateTakenMonth" : "5",
            "dateTakenYear" : "2014",
            "dateUploaded" : "1399663344",
            "dateUploadedDay" : "9",
            "dateUploadedMonth" : "5",
            "dateUploadedYear" : "2014",
            "dateSortByDay" : "20140509113736",
            "filenameOriginal" : "phpyR1LOi",
            "pathOriginal" : "http:\/\/54.85.65.72-xin.s3.amazonaws.com\/original\/201405\/-536d2aefcf244.hpyR1LOi",
            "pathBase" : "http:\/\/54.85.65.72-xin.s3.amazonaws.com\/base\/201405\/-53bb52.hpyR1LOi",
            "albums" : [
              
            ],
            "groups" : null,
            "tags" : [
              "2014",
              "May"
            ],
            "path100x100xCR" : "http:\/\/54.85.65.72-xin.s3.amazonaws.com\/custom\/201405\/-53bb52_100x100xCR.jpg",
            "exifFNumber" : "",
            "exifFocalLength" : "",
            "photo100x100xCR" : [
              "http:\/\/54.85.65.72-xin.s3.amazonaws.com\/custom\/201405\/-53bb52_100x100xCR.jpg",
              100,
              100
            ],
            "pathDownload" : "http:\/\/54.85.111.90\/photo\/b\/download",
            "url" : "http:\/\/54.85.111.90\/photo\/b\/view"
          }
        }

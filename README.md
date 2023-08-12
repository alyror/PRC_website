# PRC_website

- download ngrok app (https://ngrok.com/) and login
- Make sure you have xampp control panel installed on your machine for webhosting and database.
- On Linux or Mac OS X you can unzip ngrok from a terminal with the following command. (unzip /path/to/ngrok.zip) On Windows, just double click ngrok.zip to extract it. 
- Put the extracted file on your Local disk C
- run as administrator ngrok.exe
- copy and paste your authentication token to the ngrok command prompt (ex. ngrok config add-authtoken 6Q4tkcnKffp2bUQx1n7OeX4JfPK_4Q767H3WfG4vUPfC2UtsR) 
- type ngrok.exe http 80, to open the host.
- in xampp control panel, start the apche server and mysql server
- go to your browser and type http://localhost/phpmyadmin/
- and import the tbl_user.sql to your localhost then try the website

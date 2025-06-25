# digital-art-exhibitions-site
The website is dedicated to virtual exhibitions of artworks. All registered users can submit a request to have their exhibition published, which is then reviewed by the site administrator. Made with HTML, CSS, PHP, MySQL, Adobe Illustrator.

# getting started
To access the created system, you need a XAMPP software installed. Once the program is open, start Apache and MySQL. In the same window, click “Explorer” to open the XAMPP folder. Inside the “htdocs” folder, place the unzipped project folder. In your web browser, go to localhost to see the uploaded project files.
To access the database system, go to localhost/phpmyadmin in your browser. There, import the provided database file neatrasta.sql.
Login credentials are provided in the konfiguracija.php file.
In the main phpMyAdmin window, click “New”, set the database name as specified in the konfiguracija.php file (or choose your own and update the file accordingly). Set the collation to utf8_bin and click “Create”. Then, click on the newly created database, go to the top menu, select “Import”, choose the neatrasta.sql file, and click “Go”.
Return to localhost, click on the project folder, and you will be redirected to the system’s main page.
To access the system as an administrator, log in with the following credentials: email: admin@neatrasta.lt, password: admin123

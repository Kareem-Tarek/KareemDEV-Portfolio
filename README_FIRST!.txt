* You could change "index.php" to "index.html", and the portfolio will work serverless
    => But the "./mail/contact_me.php" won't work because HTML is just static!

* You should better run the portfolio (index.php) with PHP server like that "php -S localhost:8000" 
in the terminal in the current directory, but you need to have "Composer" & "PHP" installed first on your 
machine of course.

* How to run my portfolio project on your localhost?
    - Install Composer (https://getcomposer.org/download/) PHP (https://windows.php.net/download) on your local machine
    - Open the terminal or cmd in this current directory
    - Type in the terminal or cmd => php -S localhost:8000
    - Then open a browser and go to http://localhost:8000 or http://localhost:8000/index.php
    - The page will load and show up everything
        # My portfolio project is a Single Page Application (SPA), so the "index.php" includes 
        everything Home, About Me, Services, Contact Me, etc.



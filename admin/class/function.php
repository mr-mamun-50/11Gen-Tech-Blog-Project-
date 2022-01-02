<?php

class adminBlog
{
    private $conn;

    public function __construct()
    {
        // Database host, Database user, Database Pass, Database Name

        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'blog_project';

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$this->conn) {
            die("Database Connection Error!!");
        }
    }
}

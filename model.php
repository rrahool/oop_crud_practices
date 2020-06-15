<?php

    Class Model {
        private $server = "localhost";
        private $username = "root";
        private $password;
        private $db = "oop_crud";
        private $conn;

        public function __construct(){
            try {

                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
            } catch (Exception $e) {
                echo "connection failed" . $e->getMessage();
            }
        }

        public function insert(){
            if(isset($_POST['submit'])){
                if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])){
                    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $mobile = $_POST['mobile'];
                        $address = $_POST['address'];

                        $query = "INSERT INTO records (name, email, mobile, address) VALUES ('$name', '$email', '$mobile', '$address')";

                        if ($sql = $this->conn->query($query)) {
                            echo "<script>alert('records added successfully');</script>";
                            echo "<script>window.location.href = 'index.php'</script>";
                        } else {
                            echo "<script>alert('failed');</script>";
                            echo "<script>window.location.href = 'index.php'</script>";
                        }
                        
                    } else {
                        echo "<script>alert('empty');</script>";
                        echo "<script>window.location.href = 'index.php'</script>";
                    }
                }
            }
        }

    }


?>
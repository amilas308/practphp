<?php
    class User{
        public $name;
        public $email;
        public $password;
        function __construct($name, $email, $password){
            $this->name = $name;
            $this->email = $email;
            $this->name = $password;
        }
        function get_name(){
            return $this->name;
        }
    }
    class Employee extends User{
        public function __construct($name, $email, $password, $title){
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }
        function get_title(){
            return $this->title;
        }
    }
    $user1 = new User('Kelly', 'kelly@gmail.com', '44444');
    $employer = new Employee('Atinuke', 'atinuke@gmial.com', '4444', 'Madamoiselle');
    // $email_ext = explode('@', $employer->email);
    // $email_ext = strtolower(end($emial_ext));
    // print_r($email_ext);
    if(!empty($user1->email) && !empty($employer->title)){
        echo $employer->title. '<br><hr>';
        echo $user1->email. '<br><hr>';
    }







?>
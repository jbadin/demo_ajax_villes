<?php
class database
{
    public function __construct()
    {
        try {
            return new PDO('mysql:dbname=demo_ajax_villes;host=localhost;charset=utf8', 'user_demo_ajax_villes', 'mdp_demo_ajax_villes');
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }
}

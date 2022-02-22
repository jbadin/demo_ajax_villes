<?php
if (!empty($_GET['zipcode'])) {
    require_once '../models/database.php';
    require_once '../models/citiesModel.php';
    $cities = new cities();
    $cities->zipcode = $_GET['zipcode'];
    echo json_encode($cities->selectCitiesList());
} else {
}

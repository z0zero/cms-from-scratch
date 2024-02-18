<?php

$connect = mysqli_connect('localhost', 'cms', 'admin', 'cms');

if (mysqli_connect_errno()) {
    exit('Gagal terhubung ke MySQL: ' . mysqli_connect_error());
}
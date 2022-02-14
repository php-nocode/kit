<?php

echo "Post = ";
print_r($_POST);

echo "Headers = ";
print_r(getallheaders());

echo "Server = ";
print_r($_SERVER);

echo "Body = "";
print_r(file_get_contents('php://input'));

<?php
session_start();
session_destroy();
header('Location: index.php');
exit;
?>

style:
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container, .login-container {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    text-align: center;
}

h1, h2 {
    margin-bottom: 20px;
}

input {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    width: 100%;
}

button {
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #218838;
}

ul {
    list-style: none;
    margin-top: 20px;
}

li {
    background-color: #f9f9f9;
    padding: 10px;
    margin-bottom: 5px;
    border: 1px solid #ddd;
    border-radius: 3px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

a {
    color: red;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.error {
    color: red;
    margin-top: 10px;
}
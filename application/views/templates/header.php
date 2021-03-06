<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>

  <li <?php
    if($title=='home'){
        echo 'style="background-color: red;"';
    } ?>><a href="<?php echo base_url(); ?>">Home</a></li>
  
  <li class="dropdown"  <?php
    if($title=='service'){
        echo 'style="background-color: red;"';
    } ?>>
    <a href="<?php echo base_url(); ?>pages/view/service" class="dropbtn">Service</a>
    <div class="dropdown-content">
      <a href="<?php echo base_url(); ?>pages/view/servweb">Web Apps</a>
      <a href="<?php echo base_url(); ?>pages/view/servmob">Mobile Apps</a>
      <a href="<?php echo base_url(); ?>pages/view/servnet">Networking</a>
    </div>
  </li>
  <li <?php
    if($title=='news'){
        echo 'style="background-color: red;"';
    } ?>><a href="<?php echo base_url(); ?>news">News</a></li>
  <li <?php
    if($title=='faq'){
        echo 'style="background-color: red;"';
    } ?>><a href="<?php echo base_url(); ?>faq">FAQ</a></li>
  <li <?php
    if($title=='about'){
        echo 'style="background-color: red;"';
    } ?>><a href="<?php echo base_url(); ?>spages/view/about">About</a></li>
</ul>
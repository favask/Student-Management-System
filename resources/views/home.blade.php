<!DOCTYPE html>
<html lang="en">
@extends('layout')
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/students-list">Students List</a></li>
        <li><a href="/mark-list">Mark List</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12 text-left"> 
        <img src="{{url('sms.jpg')}}" class="text-center" />
      <h1 class="text-center">Student Management System</h1>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>copyright@Favas 2022</p>
</footer>

</body>
</html>

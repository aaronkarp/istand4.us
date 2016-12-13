<?php
  require_once('db_connection.php');

  function confirm_query($result_set) {
    global $query;
    if(!$result_set) {
      die("Database query failed. {$query}");
    }
  }
  
  function get_stances($orientation) {
    global $connection;
    global $query;
    $query = "SELECT * FROM stands";
    if ($orientation === 'for' || $orientation === 'against') {
      $query .= " WHERE orientation = " . $orientation;
    }
    $stance_set = mysqli_query($connection, $query);
    confirm_query($stance_set);
    return $stance_set;
  }
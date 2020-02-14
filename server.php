<?php 
  $conn = mysqli_connect('localhost:3307', 'root', '', 'bajkaipatrik');
  if (!$conn) {
    die('Connection failed ' . mysqli_error($conn));
  }
  if (isset($_POST['save'])) {
    $nev = $_POST['nev'];
    $ar = $_POST['ar'];
    $szin = $_POST['szin'];
    $keret = $_POST['keret'];
    mysqli_query($conn, "SET NAMES 'utf8'");
  	$sql = "INSERT INTO villanykapcsolok (nev, ar, szin, keret) VALUES ('{$nev}', {$ar}, '{$szin}', '{$keret}')";
  	if (mysqli_query($conn, $sql)) {
  	  $id = mysqli_insert_id($conn);
      $saved_comment = '<div class="comment_box">
      		<span class="delete" data-id="' . $id . '" >delete</span>
      		<span class="edit" data-id="' . $id . '">edit</span>
      		<div class="display_name">'. $nev .'</div>
      		<div class="comment_text">' . "Ár: ". $ar . "Ft , Szín: " . $szin . ", Keret: " . $keret .'</div>
      	</div>';
  	  echo $saved_comment;
  	}else {
  	  echo "Error: ". mysqli_error($conn);
  	}
  	exit();
  }

  // delete comment fromd database
  if (isset($_GET['delete'])) {
  	$id = $_GET['id'];
  	$sql = "DELETE FROM villanykapcsolok WHERE id=" . $id;
  	mysqli_query($conn, $sql);
  	exit();
  }
  if (isset($_POST['update'])) {
  	$id = $_POST['id'];
  	$nev = $_POST['nev'];
    $ar = $_POST['ar'];
    $szin = $_POST['szin'];
    $keret = $_POST['keret'];
    mysqli_query($conn, "SET NAMES 'utf8'");
  	$sql = "UPDATE villanykapcsolok SET nev='{$nev}', ar={$ar}, szin='{$szin}', keret='{$keret}' WHERE id=".$id;
  	if (mysqli_query($conn, $sql)) {
  		$id = mysqli_insert_id($conn);
  		$saved_comment = '<div class="comment_box">
  		  <span class="delete" data-id="' . $id . '" >delete</span>
  		  <span class="edit" data-id="' . $id . '">edit</span>
  		  <div class="display_name">'. $nev .'</div>
  		  <div class="comment_text">'. "Ár: " . $ar . "Ft , Szín: " . $szin . ", Keret: " . $keret . ", " .'</div>
  	  </div>';
  	  echo $saved_comment;
  	}else {
  	  echo "Error: ". mysqli_error($conn);
  	}
  	exit();
  }

  // Retrieve comments from database
  mysqli_query($conn, "SET NAMES 'utf8'");
  $sql = "SELECT * FROM villanykapcsolok";
  $result = mysqli_query($conn, $sql);
  $comments = '<div id="display_area">'; 
  while ($row = mysqli_fetch_array($result)) {
  	$comments .= '<div class="comment_box">
  		  <span class="delete" data-id="' . $row['id'] . '" >delete</span>
  		  <span class="edit" data-id="' . $row['id'] . '">edit</span>
  		  <div class="display_name">'. $row['nev'] .'</div>
  		  <div class="comment_text">'. "Ár: " . $row['ar'] . "Ft , Szín: ". $row['szin']. ", Keret: " . $row['keret'] .'</div>
  	  </div>';
  }
  $comments .= '</div>';

?>
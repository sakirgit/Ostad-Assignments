<!--
/* #####################################################################################
 * index.php 	<<<<<<<<<<
 * "uploads" directory and
 * "users.csv" file in root
 * ##################################################################################### */
-->
<?php

// Check if form is submitted
if(isset($_POST['submit'])) {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $profile_pic = $_FILES['profile_pic'];

  // Validate form data
  if(empty($name) || empty($email) || empty($password) || empty($profile_pic['name'])) {
    echo "Please fill out all fields.";
    exit;
  }

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit;
  }

  // Save profile picture to server
  $uploads_dir = 'uploads/';
  $tmp_name = $profile_pic['tmp_name'];
  $ext = pathinfo($profile_pic['name'], PATHINFO_EXTENSION);
  $filename = uniqid() . '_' . date('YmdHis') . '.' . $ext;
  $destination = $uploads_dir . $filename;

  if(move_uploaded_file($tmp_name, $destination)) {
    // Save user data to CSV file
    $data = array($name, $email, $filename);
    $fp = fopen('users.csv', 'a');
    fputcsv($fp, $data);
    fclose($fp);

    // Start session and set cookie
    session_start();
    $_SESSION['name'] = $name;
    setcookie('name', $name, time()+3600);

    // Redirect to users page
    header('Location: users.php');
    exit;
  } else {
    echo "Error uploading file.";
    exit;
  }
}
?>
<form method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required><br>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required><br>

  <label for="password">Password:</label>
  <input type="password" name="password" id="password" required><br>

  <label for="profile_pic">Profile Picture:</label>
  <input type="file" name="profile_pic" id="profile_pic" required><br>

  <input type="submit" name="submit" value="Submit">
</form>




<!--
/* #####################################################################################
 * users.php 	<<<<<<<<<<
 * "uploads" directory and
 * "users.csv" file in root
 * ##################################################################################### */
 -->
 <?php
// Read data from CSV file
$data = array_map('str_getcsv', file('users.csv'));
?>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Profile Picture</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $row): ?>
      <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td>    <img src="uploads/<?php echo $row[2]; ?>" width="100"></td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>





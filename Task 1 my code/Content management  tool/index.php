<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- Style sheet link -->
<link rel="stylesheet" type="text/css" href="cms.css">
<link rel="stylesheet" type="text/css" href="cms.css">


</head>
<body>
<div class="center">
  <h2>Content Management Tool</h2>
</div>

<fieldset>
  <form action="" method="GET">
    <legend>Create a Blog</legend>
    <table>
      <tr>
        <th>Title:</th>
        <td><input type="text" name="name" id="name"></td>
      </tr>
      <tr>
        <th>Content:</th>
        <td><textarea name="cnt" id="cnt" placeholder="Content here..."></textarea></td>
      </tr>
      <tr>
        <th>Image:</th>
        <td><input type="file" id="img" name="img" alt="Image"></td>
      </tr>
      <tr>
        <th>Video:</th>
        <td><input type="file" id="video" name="video" alt="video"></td>
      </tr>
    </table>
    <div class="center">
      <button type="submit" name="submit">Create Blog</button>
    </div>
  </form>

<?php
if (isset($_GET['submit'])) {
  // Access the information about blog details
  $name = $_GET['name'];
  $content = $_GET['cnt'];
  $image = $_GET['img'];
  $video = $_GET['video'];
?>

<hr>
<div class="center">
  <h3>Blog Details</h3>
</div>
<table>
  <tr>
    <th>Title:</th>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <th>Content:</th>
    <td><?php echo $content; ?></td>
  </tr>
  <tr>
    <th>Image:</th>
    <td><?php echo "<img src='${image}' alt='Image'>"; ?></td>
  </tr>
  <tr>
    <th>Video:</th>
    <td><?php echo "<video src='${video}' controls></video>"; ?></td>
  </tr>
</table>
<?php
}
?>
</fieldset>
</body>
</html>

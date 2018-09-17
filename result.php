<?php
$email = htmlspecialchars($_POST['email']);
$content = htmlspecialchars($_POST['content']);



if (isset($email) AND ! empty($email)) {
?>

<p>E-mail : <?php echo $email; ?></p>
<?php
} else {
  header(Location: 'contact.php');
  exit;
}

if (isset($content) AND ! empty($content)) {
?>
<p>Message: <?php echo $content; ?></p>

<?php
} else {
  header(Location: 'contact.php');
}
 ?>

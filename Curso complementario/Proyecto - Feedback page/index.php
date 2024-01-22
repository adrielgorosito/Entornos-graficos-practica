<?php include 'inc/header.php'; ?>

<?php
$name = $email = $body = $nameErr = $emailErr = $bodyErr = '';

if (isset($_POST['submit'])) {
  empty($_POST['name']) ? $nameErr = 'Name is required' : $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  empty($_POST['email']) ? $emailErr = 'Email is required' : $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  empty($_POST['body']) ? $bodyErr = 'Body is required' : $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
    $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";

    if (mysqli_query($conn, $sql)) {
      header('Location: feedback.php');
    } else {
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>

<img src="../file uploads/phpLogo.png" style="height: 70px; width: 70px">
<h2>Feedback</h2>
<p class="lead text-center">Leave feedback for Project Media</p>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-4 w-75">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control <?php echo !$nameErr ?: 'is-invalid'; ?>" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control <?php echo !$emailErr ?: 'is-invalid'; ?>" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Feedback</label>
    <textarea class="form-control <?php echo !$bodyErr ?: 'is-invalid'; ?>" name="body" placeholder="Enter your feedback"><?php echo $body; ?></textarea>
  </div>
  <div class="mb-3">
    <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
  </div>
</form>

<?php include 'inc/footer.php'; ?>
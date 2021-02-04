<?php
require('../app/functions.php');

// $message = trim(filter_input(INPUT_GET, 'message'));
// $message = $message !== '' ? $message : '...';


$colorFromGet = filter_input(INPUT_GET, 'color') ?? 'transparent';
// setcookie('color', $colorFromGet);
$_SESSION['color'] = $colorFromGet;

include('../app/_parts/_header.php');
?>

<p><?= h($colorFromGet) ?></p>
<p><a href="index.php">Go back</a></p>

<?php include('../app/_parts/_footer.php');

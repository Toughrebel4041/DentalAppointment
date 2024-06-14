<?php

require_once('./../class/class.Mail.php');

$to = "radimeninggal@gmail.com";
$name = "radkerad";
$subject = "Test Aja Bray";

// Check if POST data is set, otherwise set default values
$reqName = isset($_POST['req-name']) ? strip_tags($_POST['req-name']) : 'default name';
$reqEmail = isset($_POST['req-email']) ? strip_tags($_POST['req-email']) : 'default@example.com';
$typeOfChange = isset($_POST['typeOfChange']) ? strip_tags($_POST['typeOfChange']) : 'default change';
$urgency = isset($_POST['urgency']) ? strip_tags($_POST['urgency']) : 'default urgency';
$urlMain = isset($_POST['URL-main']) ? strip_tags($_POST['URL-main']) : 'default URL';
$addURLS = isset($_POST['addURLS']) ? strip_tags($_POST['addURLS']) : '';
$curText = isset($_POST['curText']) ? htmlentities($_POST['curText']) : '';
$newText = isset($_POST['newText']) ? htmlentities($_POST['newText']) : '';

$message = '<html><body>';
$message .= '<h1>Hello, ' . htmlspecialchars($name) . '!</h1>';
$message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . htmlspecialchars($reqName) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . htmlspecialchars($reqEmail) . "</td></tr>";
$message .= "<tr><td><strong>Type of Change:</strong> </td><td>" . htmlspecialchars($typeOfChange) . "</td></tr>";
$message .= "<tr><td><strong>Urgency:</strong> </td><td>" . htmlspecialchars($urgency) . "</td></tr>";
$message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . htmlspecialchars($urlMain) . "</td></tr>";
if (!empty($addURLS)) {
    $message .= "<tr><td><strong>URL To Change (additional):</strong> </td><td>" . htmlspecialchars($addURLS) . "</td></tr>";
}
if (!empty($curText)) {
    $message .= "<tr><td><strong>CURRENT Content:</strong> </td><td>" . htmlspecialchars($curText) . "</td></tr>";
}
$message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlspecialchars($newText) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

Mail::SendMail($to, $name, $subject, $message);

echo "email berhasil dikirim";
?>

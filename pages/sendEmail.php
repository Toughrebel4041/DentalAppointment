<?php

    require_once('./class/class.mail.php');

    $to = "tatadelvili.yanti@students.esqbs.ac.id";
    $name = "Tata";
    $subject = "Test Aja Bray";
    $message = '<html><body>';
    $message .= '<h1>Hello, '.$name.'!</h1>';
    $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['req-name']) . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['req-email']) . "</td></tr>";
    $message .= "<tr><td><strong>Type of Change:</strong> </td><td>" . strip_tags($_POST['typeOfChange']) . "</td></tr>";
    $message .= "<tr><td><strong>Urgency:</strong> </td><td>" . strip_tags($_POST['urgency']) . "</td></tr>";
    $message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>";
    $addURLS = $_POST['addURLS'];
    if (($addURLS) != '') {
    $message .= "<tr><td><strong>URL To Change (additional):</strong> </td><td>" . strip_tags($addURLS) . "</td></tr>";
    }
    $curText = htmlentities($_POST['curText']);           
    if (($curText) != '') {
    $message .= "<tr><td><strong>CURRENT Content:</strong> </td><td>" . $curText . "</td></tr>";
    }
    $message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlentities($_POST['newText']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    Mail::SendMail($to, $name, $subject, $message); 

    echo "email berhasil dikirim";

?>
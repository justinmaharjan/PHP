<?php
require 'connect.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $contact_id = $_GET['id'];

    // Delete contact from the database
    $deleteSql = "DELETE FROM contacts WHERE id = ?";
    $stmt = mysqli_prepare($conn, $deleteSql);
    mysqli_stmt_bind_param($stmt, "i", $contact_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if (mysqli_affected_rows($conn) > 0) {
        // Redirect to the home page after successful deletion
        header('Location: /');
        exit;
    } else {
        // Display an error message if the contact was not found
        echo "Contact not found or could not be deleted.";
    }
} else {
    // Handle invalid or missing contact ID parameter
    echo "Invalid contact ID.";
}
?>

<?php
require_once '../databasefunction/dbfunctions.php';

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['cid'], $data['pid'])) {
    $cid = $data['cid'];
    $pid = $data['pid'];

    if (addSubscription($cid, $pid)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to add subscription.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid input.']);
}
?>

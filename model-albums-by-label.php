<?php
function selectAlbumsByLabel($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.label_id, label_name, label_yearestablished, title, year FROM `label` c join album s on s.label_id = c.label_id where s.label_id=?");
        $stmt->bind_param("i", $cid);

        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertAlbumsByLabel($title, $year) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `albums` (`title`, `year`) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $year);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>

<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT artist_id, artist_name, artist_genre FROM `artist`");

        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertArtists($aAName, $aGenre) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `artist` (`artist_name`, `artist_genre`) VALUES (?, ?)");
        $stmt->bind_param("ss", $aAName, $aGenre);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateArtists($aAName, $aGenre, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `artist` set `artist_name` = ?, `artist_genre` = ? where artist_id = ?");
        $stmt->bind_param("ssi", $aAName, $aGenre, $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteArtists($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from artist where artist_id=?");
        $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

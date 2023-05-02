<?php
require_once 'dbconnection.php';
require_once 'Utility.php';

class TodoController extends Controller {
    public function addAction() {
        $db = DBConnection::getInstance();

        $stmt = $db->prepare("INSERT INTO elements (uuid, name) VALUES (:uuid, :name)");
        $stmt->bindValue(':uuid', Utility::generateUUID(), PDO::PARAM_STR);
        $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $stmt->execute();

        $result = [
            'status' => 'success',
            'data' => [
                'id' => $db->lastInsertId(),
                'name' => $_POST['name']
            ]
        ];
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function removeAction() {
        $db = DBConnection::getInstance();

        $stmt = $db->prepare("DELETE FROM elements WHERE id=:id");
        $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
        $stmt->execute();

        $result = [
            'status' => 'success'
        ];
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function listAction() {
        $db = DBConnection::getInstance();

        $stmt = $db->prepare("SELECT * FROM elements ORDER BY id DESC");
        $stmt->execute();

        $result = [
            'status' => 'success',
            'data' => []
        ];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result['data'][] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'uuid' => $row['uuid']
            ];
        }
        header('Content-Type: application/json');
        echo json_encode($result);
    }
}

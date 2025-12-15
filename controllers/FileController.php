<?php
class FileController {

    public function index() {
        include "views/index.php";
    }

    public function upload() {
        if (!is_dir("files")) {
            mkdir("files");
        }
        if ($_FILES['myfile']['name'] != "") {
            move_uploaded_file($_FILES['myfile']['tmp_name'], "files/" . $_FILES['myfile']['name']);
        }
        header("Location: /");
    }

    public function check() {
        $name = $_POST['filename'];
        if (file_exists("files/" . $name)) {
            echo "Файл существует";
        } else {
            echo "Файл не найден";
        }
    }

    public function delete() {
        if (isset($_GET['name'])) {
            $file = "files/" . $_GET['name'];
            if (file_exists($file)) {
                unlink($file);
            }
        }
        header("Location: /");
    }
}
?>

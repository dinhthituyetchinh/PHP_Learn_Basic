<?php
const HOST = 'localhost';
const DB = 'baikiemtra2';
const USERNAME = 'root';
const PASSWORD = '';

function connectDb()
{
    $dsn = 'mysql:host=' . HOST . ';dbname=' . DB . ';charset=utf8';

    try {
        $pdo = new PDO($dsn, USERNAME, PASSWORD);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        // Handle connection error
        echo 'Connection failed: ' . $e->getMessage();
        return null;
    }
}

function fetchQuanHuyen($maTinh)
{
    $pdo = connectDb();

    if ($pdo === null) {
        return [];
    }

    $stmt = $pdo->prepare("SELECT * FROM quanhuyen WHERE matinh = ?");

    $stmt->execute([$maTinh]);

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $results;
}

function searchDoanhNghiep($tinh, $quanHuyen, $keyword)
{
    $pdo = connectDb();

    $sql = "SELECT doanhnghiep.*, quanhuyen.tenquanhuyen 
            FROM doanhnghiep 
            LEFT JOIN quanhuyen ON doanhnghiep.maquanhuyen = quanhuyen.maquanhuyen
            WHERE 1";

    $params = [];

    if (!empty($tinh)) {
        $sql .= " AND quanhuyen.matinh = ?";
        $params[] = $tinh;
    }

    if (!empty($quanHuyen)) {
        $sql .= " AND doanhnghiep.maquanhuyen = ?";
        $params[] = $quanHuyen;
    }

    if (!empty($keyword)) {
        $sql .= " AND (doanhnghiep.tendn LIKE ? OR doanhnghiep.nguoidaidien LIKE ?)";
        $params[] = "%$keyword%";
        $params[] = "%$keyword%";
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    $doanhNghiepList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $doanhNghiepList;
}


<?php

header('Content-Type: application/json');

$appsScriptUrl = "https://script.google.com/macros/s/AKfycbz-NKyg-asGGDtAjDpue0EQMq9LirsWaG79YgPwPwBARF8Il0MZQjQ7dirHbxNtxf9m/exec";

$allowedInginDaftar = [
    "tni_ad",
    "tni_au",
    "tni_al",
    "polri",
    "cpns",
];

$allowedSumber = [
    "google",
    "brosur",
    "website",
    "keluarga",
    "instagram",
    "tiktok",
    "facebook",
    "teman",
];

$input = [
    "nama" => trim($_POST["nama"] ?? ""),
    "nomor_hp" => trim($_POST["nomor_hp"] ?? ""),
    "ingin_daftar" => trim($_POST["ingin_daftar"] ?? ""),
    "email" => trim($_POST["email"] ?? ""),
    "paket" => trim($_POST["paket"] ?? ""),
    "sumber" => trim($_POST["sumber"] ?? "website"),
];

$errors = [];

if ($input["nama"] === "") {
    $errors["nama"] = "Nama lengkap wajib diisi.";
}

if ($input["nomor_hp"] === "") {
    $errors["nomor_hp"] = "Nomor WhatsApp wajib diisi.";
}

if ($input["email"] === "" || !filter_var($input["email"], FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "Email wajib diisi dengan format yang benar.";
}

if (!in_array($input["ingin_daftar"], $allowedInginDaftar, true)) {
    $errors["ingin_daftar"] = "Pilihan daftar tidak valid.";
}

if ($input["paket"] === "") {
    $errors["paket"] = "Paket wajib dipilih.";
}

if (!in_array($input["sumber"], $allowedSumber, true)) {
    $errors["sumber"] = "Sumber informasi tidak valid.";
}

if ($errors !== []) {
    http_response_code(422);
    echo json_encode([
        "success" => false,
        "message" => reset($errors),
        "errors" => $errors,
    ]);
    exit;
}

$ch = curl_init($appsScriptUrl);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($input));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: text/plain;charset=utf-8",
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);

$response = curl_exec($ch);
$error = curl_error($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);



if ($error) {
    http_response_code(502);
    echo json_encode([
        "success" => false,
        "message" => $error,
    ]);
    exit;
}

if ($statusCode < 200 || $statusCode >= 300) {
    http_response_code(502);
    echo json_encode([
        "success" => false,
        "message" => "Google Apps Script gagal memproses pendaftaran.",
        "status" => $statusCode,
        "response" => $response,
    ]);
    exit;
}

$decodedResponse = json_decode($response, true);

if (!is_array($decodedResponse)) {
    http_response_code(502);
    echo json_encode([
        "success" => false,
        "message" => "Response Google Apps Script bukan JSON valid.",
        "response" => substr($response, 0, 500),
    ]);
    exit;
}

if (($decodedResponse["success"] ?? false) !== true) {
    http_response_code(502);
    echo json_encode([
        "success" => false,
        "message" => $decodedResponse["message"] ?? "Google Apps Script gagal memproses pendaftaran.",
        "response" => $decodedResponse,
    ]);
    exit;
}

echo json_encode([
    "success" => true,
    "message" => $decodedResponse["message"] ?? "pendaftaran berhasil! data kamu sudah kami terima.",
]);

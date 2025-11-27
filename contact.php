<?php


session_start();

// DB config
$host = 'localhost';
$db   = 'portfolio_db';
$user = 'root';
$pass = ''; // XAMPP default
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// simple logging helper
$logDir = __DIR__ . '/logs';
$logFile = $logDir . '/contact_errors.log';
function log_err($msg, $file) {
    $when = date('Y-m-d H:i:s');
    @file_put_contents($file, "[$when] $msg\n", FILE_APPEND | LOCK_EX);
}

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (Exception $e) {
    // log DB connection error
    if (!is_dir($logDir)) @mkdir($logDir, 0755, true);
    log_err("DB connection failed: " . $e->getMessage(), $logFile);
    header("Location: index.php?sent=0#contact");
    exit;
}

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

// Basic spam/bot protections

// 1) Honeypot: add a hidden field named "hp" in your form; bots will fill it
$honeypot = $_POST['hp'] ?? '';
if (!empty($honeypot)) {
    // suspected bot — silently fail or redirect with failure
    header("Location: index.php?sent=0#contact");
    exit;
}

// 2) Simple rate limiting (one submit every 30 seconds per session)
$now = time();
$last = $_SESSION['last_contact_submit'] ?? 0;
$minInterval = 30; // seconds
if ($now - $last < $minInterval) {
    header("Location: index.php?sent=0#contact");
    exit;
}

// Sanitize + validate input
$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

// Basic validation
if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?sent=0#contact");
    exit;
}

// Further sanitize before storing (strip tags)
$safeName = strip_tags($name);
$safeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$safeMessage = strip_tags($message);

// Insert to DB
$sql = "INSERT INTO contacts (name, email, message, created_at) VALUES (?, ?, ?, NOW())";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([$safeName, $safeEmail, $safeMessage]);

    // update session submit time
    $_SESSION['last_contact_submit'] = $now;

    // success — redirect back to contact section
    header("Location: index.php?sent=1#contact");
    exit;
} catch (Exception $e) {
    // log error
    if (!is_dir($logDir)) @mkdir($logDir, 0755, true);
    log_err("DB insert error: " . $e->getMessage(), $logFile);

    header("Location: index.php?sent=0#contact");
    exit;
}

<?php
require_once 'config/database.php';

// JWT functions
function generateJWT($data) {
    try {
        $issuedAt = time();
        $expire = $issuedAt + (60 * 60 * 24); // 24 hours
        
        $payload = array_merge($data, [
            'iat' => $issuedAt,
            'exp' => $expire,
            'iss' => 'school_website',
            'aud' => 'school_website'
        ]);
        
        $header = [
            'typ' => 'JWT',
            'alg' => 'HS256'
        ];
        
        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode(json_encode($header)));
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode(json_encode($payload)));
        
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, JWT_SECRET, true);
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
        
        return $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
    } catch (Exception $e) {
        error_log("JWT generation failed: " . $e->getMessage());
        return false;
    }
}

function verifyJWT($token) {
    try {
        if (empty($token)) {
            throw new Exception('Token is required');
        }

        $parts = explode('.', $token);
        if (count($parts) !== 3) {
            throw new Exception('Invalid token format');
        }
        
        list($base64UrlHeader, $base64UrlPayload, $base64UrlSignature) = $parts;
        
        $signature = base64_decode(str_replace(['-', '_'], ['+', '/'], $base64UrlSignature));
        $expectedSignature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, JWT_SECRET, true);
        
        if (!hash_equals($signature, $expectedSignature)) {
            throw new Exception('Invalid signature');
        }
        
        $payload = json_decode(base64_decode(str_replace(['-', '_'], ['+', '/'], $base64UrlPayload)), true);
        
        if (!$payload) {
            throw new Exception('Invalid payload');
        }
        
        if (!isset($payload['exp']) || $payload['exp'] < time()) {
            throw new Exception('Token expired');
        }
        
        if (!isset($payload['iss']) || $payload['iss'] !== 'school_website') {
            throw new Exception('Invalid issuer');
        }
        
        if (!isset($payload['aud']) || $payload['aud'] !== 'school_website') {
            throw new Exception('Invalid audience');
        }
        
        return $payload;
    } catch (Exception $e) {
        error_log("JWT verification failed: " . $e->getMessage());
        return false;
    }
}

// Email functions with better error handling
function sendEmail($to, $subject, $body) {
    try {
        require_once 'vendor/autoload.php';
        
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = SMTP_PORT;
        
        // Recipients
        $mail->setFrom(SMTP_USER, 'Modern School');
        $mail->addAddress($to);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        
        return $mail->send();
    } catch (Exception $e) {
        error_log("Email sending failed: " . $e->getMessage());
        return false;
    }
}

// SMS functions using Twilio
function sendSMS($to, $message) {
    try {
        $url = "https://api.twilio.com/2010-04-01/Accounts/" . TWILIO_ACCOUNT_SID . "/Messages.json";
        
        $data = [
            'To' => $to,
            'From' => TWILIO_PHONE_NUMBER,
            'Body' => $message
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, TWILIO_ACCOUNT_SID . ":" . TWILIO_AUTH_TOKEN);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }
        
        curl_close($ch);
        
        if ($httpCode !== 200) {
            throw new Exception("SMS sending failed with HTTP code: " . $httpCode);
        }
        
        return json_decode($response, true);
    } catch (Exception $e) {
        error_log("SMS sending failed: " . $e->getMessage());
        return false;
    }
}

// Generate a unique 12-digit admission number
function generateAdmissionNumber() {
    try {
        $year = date('y');
        $random = str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);
        return $year . $random;
    } catch (Exception $e) {
        error_log("Admission number generation failed: " . $e->getMessage());
        return false;
    }
}

// Generate a 6-digit MPIN
function generateMPIN() {
    try {
        return str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
    } catch (Exception $e) {
        error_log("MPIN generation failed: " . $e->getMessage());
        return false;
    }
}

// Input validation function
function validateInput($data, $rules) {
    try {
        $errors = [];
        
        foreach ($rules as $field => $rule) {
            $ruleArray = explode('|', $rule);
            
            foreach ($ruleArray as $singleRule) {
                if ($singleRule === 'required' && (!isset($data[$field]) || empty($data[$field]))) {
                    $errors[$field][] = ucfirst($field) . ' is required';
                }
                
                if (strpos($singleRule, 'min:') === 0) {
                    $min = substr($singleRule, 4);
                    if (isset($data[$field]) && strlen($data[$field]) < $min) {
                        $errors[$field][] = ucfirst($field) . ' must be at least ' . $min . ' characters';
                    }
                }
                
                if ($singleRule === 'email' && isset($data[$field]) && !filter_var($data[$field], FILTER_VALIDATE_EMAIL)) {
                    $errors[$field][] = 'Invalid email format';
                }
                
                if ($singleRule === 'numeric' && isset($data[$field]) && !is_numeric($data[$field])) {
                    $errors[$field][] = ucfirst($field) . ' must be a number';
                }
                
                if (strpos($singleRule, 'in:') === 0) {
                    $allowedValues = explode(',', substr($singleRule, 3));
                    if (isset($data[$field]) && !in_array($data[$field], $allowedValues)) {
                        $errors[$field][] = ucfirst($field) . ' must be one of: ' . implode(', ', $allowedValues);
                    }
                }
            }
        }
        
        return $errors;
    } catch (Exception $e) {
        error_log("Input validation failed: " . $e->getMessage());
        return ['error' => 'Validation failed'];
    }
}

// Response helper function
function jsonResponse($data, $statusCode = 200) {
    http_response_code($statusCode);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

// Security functions
function sanitizeInput($data) {
    if (is_array($data)) {
        return array_map('sanitizeInput', $data);
    }
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verifyCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// File handling functions
function uploadFile($file, $destination, $allowedTypes = ['jpg', 'jpeg', 'png', 'pdf'], $maxSize = 5242880) {
    try {
        if (!isset($file['error']) || is_array($file['error'])) {
            throw new Exception('Invalid file parameters');
        }

        switch ($file['error']) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new Exception('File size exceeds limit');
            case UPLOAD_ERR_NO_FILE:
                throw new Exception('No file uploaded');
            default:
                throw new Exception('Unknown upload error');
        }

        if ($file['size'] > $maxSize) {
            throw new Exception('File size exceeds limit');
        }

        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->file($file['tmp_name']);
        
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($extension, $allowedTypes)) {
            throw new Exception('Invalid file type');
        }

        $fileName = bin2hex(random_bytes(16)) . '.' . $extension;
        $filePath = $destination . '/' . $fileName;

        if (!move_uploaded_file($file['tmp_name'], $filePath)) {
            throw new Exception('Failed to move uploaded file');
        }

        return $fileName;
    } catch (Exception $e) {
        error_log("File upload failed: " . $e->getMessage());
        return false;
    }
}

// Logging function
function logActivity($userId, $action, $details = null) {
    try {
        $db = getDBConnection();
        $stmt = $db->prepare("INSERT INTO activity_logs (user_id, action, details) VALUES (?, ?, ?)");
        $stmt->execute([$userId, $action, $details]);
        return true;
    } catch (Exception $e) {
        error_log("Activity logging failed: " . $e->getMessage());
        return false;
    }
}

// Password handling functions
function hashPassword($password) {
    return password_hash($password, PASSWORD_ARGON2ID, [
        'memory_cost' => 65536,
        'time_cost' => 4,
        'threads' => 3
    ]);
}

function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}

// Session handling
function startSecureSession() {
    if (session_status() === PHP_SESSION_NONE) {
        ini_set('session.cookie_httponly', 1);
        ini_set('session.cookie_secure', 1);
        ini_set('session.use_strict_mode', 1);
        session_start();
    }
}

function regenerateSession() {
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_regenerate_id(true);
    }
}

// Error handling
function handleError($errno, $errstr, $errfile, $errline) {
    $error = [
        'type' => $errno,
        'message' => $errstr,
        'file' => $errfile,
        'line' => $errline
    ];
    
    error_log(json_encode($error));
    
    if (ini_get('display_errors')) {
        printf("<pre>%s</pre>", htmlspecialchars(json_encode($error, JSON_PRETTY_PRINT)));
    }
    
    return true;
}

set_error_handler('handleError');
?> 
<?php
require_once 'config/database.php';
require_once 'config/config.php';
require_once 'utils.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Database Connection Test</h2>";

try {
    // Test database connection
    $db = getDBConnection();
    echo "<p style='color: green;'>✓ Database connection successful!</p>";
    
    // Check if admin table exists
    $stmt = $db->query("SHOW TABLES LIKE 'admin'");
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✓ Admin table exists</p>";
        
        // Check if admin user exists
        $stmt = $db->prepare("SELECT COUNT(*) FROM admin WHERE username = ?");
        $stmt->execute([ADMIN_USERNAME]);
        $count = $stmt->fetchColumn();
        
        if ($count == 0) {
            echo "<p style='color: orange;'>⚠ No admin user found. Creating default admin...</p>";
            
            // Create default admin user
            $stmt = $db->prepare("INSERT INTO admin (username, password, email) VALUES (?, ?, ?)");
            $stmt->execute([
                ADMIN_USERNAME,
                password_hash(ADMIN_PASSWORD, PASSWORD_ARGON2ID),
                ADMIN_EMAIL
            ]);
            
            echo "<p style='color: green;'>✓ Default admin user created</p>";
        } else {
            echo "<p style='color: green;'>✓ Admin user exists</p>";
        }
    } else {
        echo "<p style='color: orange;'>⚠ Admin table not found. Creating tables...</p>";
        
        // Initialize database
        initializeDatabase();
        echo "<p style='color: green;'>✓ Database tables created successfully</p>";
    }
    
    // Test JWT functions
    echo "<h2>JWT Function Test</h2>";
    
    $testData = [
        'userId' => 1,
        'role' => 'admin',
        'username' => 'test'
    ];
    
    $token = generateJWT($testData);
    if ($token) {
        echo "<p style='color: green;'>✓ JWT token generation successful</p>";
        
        $payload = verifyJWT($token);
        if ($payload) {
            echo "<p style='color: green;'>✓ JWT token verification successful</p>";
            echo "<pre>Token payload: " . json_encode($payload, JSON_PRETTY_PRINT) . "</pre>";
        } else {
            echo "<p style='color: red;'>✗ JWT token verification failed</p>";
        }
    } else {
        echo "<p style='color: red;'>✗ JWT token generation failed</p>";
    }
    
    // Display current configuration
    echo "<h2>Current Configuration</h2>";
    echo "<pre>";
    echo "DB_HOST: " . DB_HOST . "\n";
    echo "DB_NAME: " . DB_NAME . "\n";
    echo "ADMIN_USERNAME: " . ADMIN_USERNAME . "\n";
    echo "ADMIN_EMAIL: " . ADMIN_EMAIL . "\n";
    echo "</pre>";
    
} catch (Exception $e) {
    echo "<p style='color: red;'>✗ Error: " . $e->getMessage() . "</p>";
    echo "<pre>Stack trace:\n" . $e->getTraceAsString() . "</pre>";
}
?> 
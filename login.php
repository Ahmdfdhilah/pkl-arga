<?php
session_start();

include 'sistem/koneksi.php';

// Debug info
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Current user: " . get_current_user() . "<br>";
echo "PHP SAPI: " . php_sapi_name() . "<br>";

$conn = open_connection();

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: Database tidak dapat terhubung");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk memeriksa email dan password
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            // Set session dan redirect ke a_home.php
            $_SESSION['loggedin'] = true;
            header("Location: a_home.php");
            exit;
        } else {
            $error = "Email atau password salah!";
        }
        
        mysqli_stmt_close($stmt);
    } else {
        $error = "Terjadi kesalahan sistem: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet"/>
    <style>
        * {
            box-sizing: border-box;
        }
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            overflow-x: hidden;
        }
        .container {
            display: flex;
            height: 100vh;
            width: 100vw;
        }
        .left {
            flex: 1;
            position: relative;
            background-color: #a9c97a;
            color: #1f3a0a;
            font-weight: 700;
            font-size: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }
        .left img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.3;
            pointer-events: none;
            user-select: none;
        }
        .left-text {
            position: relative;
            z-index: 1;
            line-height: 1.3;
        }
        .right {
            flex: 1;
            background: #fff;
            border-top-left-radius: 60px;
            border-bottom-left-radius: 60px;
            padding: 40px 50px 50px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .right img.illustration {
            width: 100%;
            max-width: 320px;
            height: auto;
            margin-bottom: 40px;
            align-self: center;
        }
        form {
            width: 100%;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            font-family: 'Nunito', sans-serif;
            font-size: 1.3rem;
            padding: 18px 20px;
            margin-bottom: 25px;
            border-radius: 15px;
            border: none;
            box-shadow: 3px 3px 8px #d9d9d9;
            outline-offset: 2px;
            outline-color: transparent;
            transition: outline-color 0.3s ease;
        }
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline-color: #a9c97a;
        }
        .checkbox-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 35px;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        input[type="checkbox"] {
            width: 26px;
            height: 26px;
            border-radius: 6px;
            background-color: #6a9a5a;
            border: none;
            box-shadow: 3px 3px 6px #4f7a3f;
            cursor: pointer;
            appearance: none;
            position: relative;
        }
        input[type="checkbox"]:checked::after {
            content: "\2713";
            color: white;
            font-weight: 700;
            font-size: 18px;
            position: absolute;
            top: 1px;
            left: 5px;
        }
        label {
            font-family: 'Nunito', sans-serif;
            font-size: 1.1rem;
            color: #2f2f2f;
            user-select: none;
        }
        .forgot-password {
            font-family: 'Nunito', sans-serif;
            font-size: 1.1rem;
            color: #3a7f2a;
            cursor: pointer;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        button {
            width: 100%;
            background-color: #6a9a5a;
            border: none;
            border-radius: 15px;
            padding: 18px 0;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 1.6rem;
            color: white;
            cursor: pointer;
            box-shadow: 3px 3px 8px #4f7a3f;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #5a7f4a;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
                min-height: 100vh;
            }
            .left, .right {
                flex: none;
                width: 100%;
                border-radius: 0;
            }
            .left {
                height: 200px;
                font-size: 1.5rem;
                padding: 20px;
            }
            .right {
                padding: 30px 20px 40px 20px;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
                justify-content: flex-start;
            }
            .right img.illustration {
                max-width: 260px;
                margin-bottom: 30px;
            }
            input[type="email"],
            input[type="password"] {
                font-size: 1.1rem;
                padding: 14px 16px;
                margin-bottom: 20px;
                border-radius: 12px;
            }
            .checkbox-row {
                margin-bottom: 25px;
            }
            label, .forgot-password {
                font-size: 1rem;
            }
            button {
                font-size: 1.3rem;
                padding: 14px 0;
                border-radius: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left" aria-label="Welcome message with green abstract background">
            <img src="image/bg.jpg" alt="Background Image"/>
            <div class="left-text">
                WELCOME
                <br/>
                PT. ARGA BUMI INDONESIA
            </div>
        </div>
        <div class="right" role="main">
            <img src="image/bg2.png" class="illustration" alt="Illustration"/>
            <form method="POST" action="">
                <input aria-label="Enter Email" placeholder="Enter Email" required type="email" name="email"/>
                <input aria-label="Enter Password" placeholder="Enter Password" required type="password" name="password"/>
                <div class="checkbox-row">
                    <div class="checkbox-container">
                        <input aria-checked="true" checked id="remember" type="checkbox"/>
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
                <button aria-label="Login" type="submit">Login</button>
                <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
            </form>
        </div>
    </div>
</body>
</html>

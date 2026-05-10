<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You - QuickPOS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .thankyou-page { min-height: 100vh; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #6c63ff, #3f3d56); color: #fff; text-align: center; }
        .thankyou-box { background: rgba(255,255,255,0.1); padding: 60px 80px; border-radius: 20px; }
        .thankyou-box i { font-size: 80px; color: #ffd700; margin-bottom: 25px; display: block; }
        .thankyou-box h1 { font-size: 42px; margin-bottom: 15px; }
        .thankyou-box p { font-size: 18px; opacity: 0.85; margin-bottom: 30px; }
    </style>
</head>
<body>
    <div class="thankyou-page">
        <div class="thankyou-box">
            <i class="fas fa-check-circle"></i>
            <h1>Thank You!</h1>
            <p>Your message has been received.<br>We'll get back to you within 24 hours.</p>
            <a href="index.php" class="btn-primary">Back to Home</a>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajayi Olamilekan Isaiah's Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body style="background-color: skyblue;">

<div class="container">
    <div class="profile">
        <!-- Profile Image -->
        <img src="C:\Users\user\Downloads\my profile pic.png" alt="Profile Picture" id="profilePic" style="display: block; margin: auto; width: 150px; height: 150px; border-radius: 50%;">

        <!-- PHP to display a dynamic greeting based on time of day -->
        <?php
        date_default_timezone_set('Africa/Lagos'); // Adjust to your timezone
        $hour = date('G');
        if ($hour >= 5 && $hour < 12) {
            echo '<h2>Good Morning! I\'m Ajayi Olamilekan Isaiah.</h2>';
        } elseif ($hour >= 12 && $hour < 18) {
            echo '<h2>Good Afternoon! I\'m Ajayi Olamilekan Isaiah.</h2>';
        } else {
            echo '<h2>Good Evening! I\'m Ajayi Olamilekan Isaiah.</h2>';
        }
        ?>

        <!-- Profile Description -->
        <p>🚀 Software Architect & Innovator 🌟 | Transforming Ideas into Digital Wonders 💡 | Passionate about crafting elegant solutions to complex problems 🧩 | Lifelong Learner & Tech Enthusiast 📚💻 | Making the world a better place, one line of code at a time ✨ | Let's build the future together 🌐</p>

        <!-- Any additional sections like contact form, projects, etc. -->
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="script.js"></script> <!-- Link to your JavaScript file -->

</body>
</html>

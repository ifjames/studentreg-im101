<?php
// Initialize variables
$submitted = false;
$fullName = '';
$email = '';
$age = '';
$course = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submitted = true;
    $fullName = htmlspecialchars($_POST['fullName'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $age = htmlspecialchars($_POST['age'] ?? '');
    $course = htmlspecialchars($_POST['course'] ?? '');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Student Registration</h1>
        
        <?php if (!$submitted): ?>
        <!-- Registration Form -->
        <form id="registrationForm" method="POST" action="">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" min="1" max="120" required>
            </div>
            
            <div class="form-group">
                <label for="course">Course</label>
                <select id="course" name="course" required>
                    <option value="">-- Select a Course --</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Business Administration">Business Administration</option>
                    <option value="Engineering">Engineering</option>
                </select>
            </div>
            
            <button type="submit" class="submit-btn">Submit</button>
        </form>
        <?php endif; ?>
        
        <?php if ($submitted): ?>
        <!-- Student Info Card -->
        <div class="student-card">
            <h2>Student Information</h2>
            <div class="info-row">
                <span class="label">Full Name:</span>
                <span class="value"><?php echo $fullName; ?></span>
            </div>
            <div class="info-row">
                <span class="label">Email:</span>
                <span class="value"><?php echo $email; ?></span>
            </div>
            <div class="info-row">
                <span class="label">Age:</span>
                <span class="value"><?php echo $age; ?></span>
            </div>
            <div class="info-row">
                <span class="label">Course:</span>
                <span class="value"><?php echo $course; ?></span>
            </div>
            <a href="index.php" class="back-btn">Register Another Student</a>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>

<?php
try{
    include_once '../dbconfig/connection.php';
    echo 'DB connected successfully';
}catch(PDOException $e) {
    echo 'connection exception '.$e->getMessage();
}
    include_once 'validation/test_input.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $fname = test_input($_POST['fname']);
        $lname = test_input($_POST['lname']);
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $age = test_input($_POST['age']);
        $gender = test_input($_POST['gender']);
        $qualification = test_input($_POST['qualification']);
        $Experience = test_input($_POST['Experience']);
        $lang = test_input($_POST['lang']);
        $services = test_input($_POST['services']);
        $salary = test_input($_POST['salary']);
        $photo = test_input($_POST['photo']);
        $resume = test_input($_POST['resume']);

        echo $fname.'<br/>'.$email.'<br/>'.$password.'<br/>'.$age.'<br/>'.$salary.'<br/>'.$gender;
        if($fname !== '' && $email !== '' && $password !== ''){
            $sql = 'INSERT INTO tourguide (name,lname,email,password,age,gender,qualification,experience,lang,services,salaryPerHour,photo,resume) VALUES(:fname,:lname,:email,:password,:age,:gender,:qualification,:Experience,:lang,:services,:salary,:photo,:resume)';
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(':fname',$fname);
           $stmt->bindParam(':lname',$lname);
           $stmt->bindParam(':email',$email);
           $stmt->bindParam(':password',$password);
           $stmt->bindParam(':age',$age);
           $stmt->bindParam(':gender',$gender);
           $stmt->bindParam(':qualification',$qualification);
           $stmt->bindParam(':Experience',$Experience);
           $stmt->bindParam(':lang',$lang);
           $stmt->bindParam(':services',$services);
           $stmt->bindParam(':salary',$salary);
           $stmt->bindParam(':photo',$photo);
           $stmt->bindParam(':resume',$resume);
           $stmt->execute();
            $saved = "saved";
            echo "<script>alert($saved)</script>";
            header('Location: tourguides.php');
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Tour Guide</title>
    <style>
        form.form{
            max-width: 300px;
            margin: 100px 0 0 100px;
        }
    </style>
</head>
<body>
    <form method="POST" class="form">
        <div class="mb-3">
            <label for="fname" class="form-label">Tour Guide First Name</label>
            <input type="text" class="form-control" name="fname" id="fname" placeholder="Tour Guide Name">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Tour Guide Last Name</label>
            <input type="text" class="form-control" name="lname" id="lname" placeholder="Tour Guide Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name = 'email' id="email" placeholder="Email address">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name = 'password' id="password" placeholder="password">
        </div>
        <div class="mb-3">
            <label for="Age" class="form-label">Age</label>
            <input type="number" class="form-control" name = 'age' id="age" placeholder="age">
        </div>
        <div class="mb-3">
            <label for="qualification" class="form-label">Qualifications</label>
            <input type="text" class="form-control" name = 'qualification' id="qualification" placeholder="Qualifications">
        </div>
        <div class="mb-3">
            <label for="Experience" class="form-label">Experience</label>
            <input type="number" class="form-control" name = 'Experience' id="Experience" placeholder="Experience">
        </div>
        <div class="mb-3">
            <label for="lang" class="form-label">Language Skills</label>
            <input type="text" class="form-control" name = 'lang' id="lang" placeholder="Tigirigna, Amharic ...">
        </div>
        <div class="mb-3">
            <label for="services" class="form-label">Services</label>
            <input type="text" class="form-control" name = 'services' id="services" placeholder="Reflection, Driving ...">
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" class="form-control" step="0.01" name = 'salary' id="salary" placeholder="salary per hour">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" name = 'photo' id="photo">
        </div>
        <div class="mb-3">
            <label for="resume" class="form-label">Resume</label>
            <textarea class="form-control" name = "resume" id="resume" rows="3"></textarea>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="submit">Save</button>
        </div>
    </form>
</body>
</html>
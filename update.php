<?php include('server.php'); 

    if(empty($_SESSION['email'])){
        header('location: home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>AUST CSE SOCIETY</title>

    <!-- Bootstrap -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/fixed.css">
    <link rel="stylesheet" href="assets/css/animate.css">
</head>

<body>

    <!--    loader animation start    -->
   
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!--    loader animation end   -->
    
    <!--    booktable section start    -->
    
    <div>
        <div class="container specials1" data-aos="fade-up" data-aos-duration="1000">
            <div class="row" style="margin: 2rem 0 2rem;">
                <div class="col-md-6 mr-auto">
                    <div class="section">
                        <h2>update</h2>
                    </div>
                    <h1 class="names">Update Profile</h1>
                </div>
                <div class="col-md-6" style="text-align: right; margin-top: 5px;">
                        <a href="index.php" class="btn btn-lg btn-outline-secondary">Home</a>
                </div>
            </div>

            <form method="post" action="update.php" name="createprofile">
                <?php include('errors.php'); ?>
                <div class="form-row">
                    <div class="col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="text" class="form-control" name="username" id="name" value="<?php echo $_SESSION['username'];?>" required>
                    </div>

                    <div class="col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $_SESSION['phone'];?>" required>
                    </div>

                    <div class="col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="text" class="form-control" name="id" id="id" value="<?php echo $_SESSION['id'];?>" required>
                    </div>

                    <div class="col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="text" class="form-control" name="dept" id="dept" value="<?php echo $_SESSION['dept'];?>" required>
                    </div>

                    <div class="col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <select class="form-select" aria-label="Default select" name="semester" required>
                            <option value="<?php echo $_SESSION['sem'];?>" style="display: none;"><?php echo $_SESSION['sem'];?></option>
                            <option value="N/A">N/A</option>
                            <option value="1.1">1.1</option>
                            <option value="1.2">1.2</option>
                            <option value="2.1">2.1</option>
                            <option value="2.2">2.2</option>
                            <option value="3.1">3.1</option>
                            <option value="3.2">3.2</option>
                            <option value="4.1">4.1</option>
                            <option value="4.2">4.2</option>
                        </select>
                    </div>

                    <div class="col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="text" class="form-control" name="club" id="club" value="<?php echo $_SESSION['club'];?>" required>
                    </div>

                    <div class="col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <select class="form-select" aria-label="Default select" name="profession" required>
                            <option value="<?php echo $_SESSION['prof'];?>" style="display: none;"><?php echo $_SESSION['prof'];?></option>
                            <option value="Student">Student</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Soceity Member">Soceity Member</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" name="update" class="btn btn-lg btn-outline-secondary" >update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!--    booktable section end    -->
    
    <!--    scroll top button start    -->
    
    <div class="scrolltop float-right">
        <i class="fa fa-arrow-up" onclick="topFunction();" id="myBtn"></i>
    </div>

    <!--    scroll top button end    -->


    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="main.js"></script>


    <script>
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
</body>

</html>
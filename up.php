<html>
<head>
  <style>
 /* Mobile-first styles */

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
        background-color: #1c1c1c;
        font-family: Arial, sans-serif;
        display:inherit;
      
}

form {
  margin: 50px auto;
  padding: 20px;
  max-width: 500px;
  background-color: #FFFFFF;
  border-radius: 10px;
  text-align: center;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
}

label, input[type="submit"] {
  display: block;
  font-size: 18px;
  font-weight: bold;
  color: #444444;
  margin-bottom: 10px;
}
#home{
	margin-left: 45%;
    margin-right: 45%;
	}
 a:-webkit-any-link {
    color: #ffffff;
    cursor: pointer;
    text-decoration: none;
}
input[type="file"], input[type="Submit"],#home {
  display: inline-table;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        background-color: #7f00ff;
        color: #fff;
        border: none;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 10px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

input[type="file"]:focus , input[type="submit"]:hover {
   background-color: #5e00b3;
   box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
}
  h1 {
        font-size: 36px;
        font-weight: bold;
        color: #1c1c1c;
        margin-bottom: 20px;
      }

/* Media queries for larger screens */

@media only screen and (min-width: 600px) {
  form {
    margin: 50px auto;
    padding: 40px;
  }
  
  input[type="file"], input[type="submit"] {
    width: auto;
  }
}

  </style>
</head>
<body>

<form action="up.php" method="post" enctype="multipart/form-data">
  <h1 for="fileToUpload">Select File to Share</h1>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Share File" name="submit">
</form>
<button id="home"><a href= "index.html">Go to Home</a></button>
</body>
</html>
<?php

if(isset($_POST["submit"])) {
	$target_dir = "/shares/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	define ('SITE_ROOT', realpath(dirname(__FILE__)));
	if (file_exists($target_file)) {
	  echo "Sorry, file already exists.";
	  $uploadOk = 0;
	}

	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	} 
		try {
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], SITE_ROOT.$target_file);
		echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	  } catch(Exception $ex) {
	  $code = $ex->getCode();
	  $message = $ex->getMessage();
	  $file = $ex->getFile();
	  $line = $ex->getLine();
	  echo "Exception thrown in $file on line $line: [Code $code]
	  $message";
	  }
	}
?>



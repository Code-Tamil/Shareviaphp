<!DOCTYPE html>
<html>
  <head>
    <title>List of Files</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      /* Set the body background color to greyish-black */
      body {
        background-color: #1c1c1c;
        font-family: Arial, sans-serif;
      }
      
      /* Center the page content */
      .container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        text-align: center;
      }
      
      /* Style the buttons */
      .button ,#home{
        display: inherit;
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
      #home{
		  margin-left: 45%;
    margin-right: 45%;}

      /* Style the file name and download button as a table */
      table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
      }
      
      table, th, td {
        border: 1px solid #fff;
        text-align: left;
      }

      th, td {
        padding: 8px;
        font-weight: bold;
        color: #fff;
        font-size: 18px;
      }

      /* Style the Share button on hover */
      #share-button:hover {
        background-color: #5e00b3;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
      }
      
      /* Style the Receive button on hover */
      #receive-button:hover {
        background-color: #4d4d4d;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
      }
      
      /* Style the h1 and p tags */
      h1 {
        font-size: 36px;
        font-weight: bold;
        color: #ffffff;
        margin-bottom: 20px;
      }
       a:-webkit-any-link {
    color: #ffffff;
    cursor: pointer;
    text-decoration: none;
}
      
      /* Style the buttons on mobile devices */
      @media only screen and (max-width: 600px) {
        .button {
          width: 100%;
        }
        
        #receive-button {
          margin-top: 20px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>List of Files</h1>
      <?php
        $dir = "shares/";
        $files = scandir($dir);
        echo "<table>";
        foreach ($files as $file) {
          if ($file != "." && $file != "..") {
            echo "<tr><td>{$file}</td><td><a href='{$dir}{$file}' download class='button'>Download</a></td></tr>";
          }
        }
        echo "</table>";
      ?>
    </div>
    <button id="home"><a href= "index.html">Go to Home</a></button>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- css Files -->
   <link href="/images/favicon.png" rel="icon" type="image/png" />
  <meta name="author" content="Flying Penguins">
  <meta name="description"
    content=" The Jain International School is one of the best-equipped schools in India with facilities that support excellence in all areas.">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="/src/extra/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/style.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/colors/color1.css" id="colors" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/animate.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/select2.min.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/custom.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/funky.css" rel="stylesheet" type="text/css" />
  <link href="https://www.jaininternationalnagpur.edu.in/" rel="canonical" /><!-- Latest compiled and minified CSS -->
  <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.1/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" rel="stylesheet" />
    
    <!-- end Css files-->
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
       box-sizing: border-box;
      background: url('/media/careers/image.jpg') center/cover no-repeat;
      height: 80%;
       
           background-size: 125% 79%;
    background-position-y: -24px;
    background-position-x: -74px;
      
       
    }

    .v-container {
     width: 80%;
    max-width: 600px;
    margin: 50px auto;
    background: url(your-form-box-background-image.jpg) center/cover no-repeat;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgb(0 0 0 / 69%);
    margin-top: 13%;
    margin-bottom: 16.5%;
    background-color: #77795c1c;
}

    .v-form {
      display: grid;
      gap: 15px;
    }

    .v-header {
      text-align: center;
      font-size: 24px;
      color: #000;
      margin-bottom: 20px;
    }

    .v-label {
      font-weight: bold;
    }

    .v-input,
    .v-select,
    .v-button {
      width: 100%;
      background: unset;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
      transition: border-color 0.3s;
    }
    .v-input{
            border-radius: 12px;
    }

    .v-input:hover {
      border-color: #3498db;
    }

    .v-file-input-container {
      position: relative;
      overflow: hidden;
      background: transparent;
      display: flex;
      align-items: center;
      transition: background-color 0.3s;
    }

    .v-file-input-container:hover {
      background-color: #e3dddd5e;
      z-index: -1;
    }

    .v-file-input {
      position: absolute;
      font-size: 16px;
      opacity: 0;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      cursor: pointer;
    }

    .v-file-input-label {
      flex-grow: 1;
      padding: 10px;
      border-radius: 4px;
      cursor: pointer;
      text-align: center;
    }

    .v-file-input-label:hover {
      color: #fff;
    }

    .v-button {
      background-color: #a68e8e42;
      color: #ffffff;
      cursor: pointer;
      border: none;
      border-radius: 50px;
      padding: 15px;
      margin-top: 15px;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .v-button:hover {
      background-color: #a68e8e;
    }
    @media screen and (min-width:1024px) {
      .v-input{
        width: 92%;
    background: unset;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #827d7d;
    border-radius: 4px;
    transition: border-color 0.3s;

      }
      body{
         background-size: 108% 72%;
      }
    }
    
    
    @media screen and (max-width:1020px) {
      .v-input{
        width: 85%;
    background: unset;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #827d7d;
    border-radius: 4px;
    transition: border-color 0.3s;

      }
      
      body{
          background-size: 108% 56%;
      }
    }

    @media screen and (max-width: 768px) {
      .v-container {
        width: 80%;
      }
      body{
             background-size: 131% 53%;
      }
    }

    @media screen and (max-width: 480px) {
      .v-container {
        width: 70%;
      }
      body{
          background-size: 150% 48%;
      }
    }
  </style>
  <title>Career | JIS</title>
</head>
<body>
    <!--========Loader=========-->
  
  <!--========End Loader=========-->


  <!--==========Header===========-->
    <? include'./Header/header.php' ?>
    
    <!--==========End Header===========-->

  <div class="v-container">
    <h2 class="v-header">Apply</h2>
    <form  enctype="multipart/form-data" class="v-form" action="https://getform.io/f/91412ba4-8faa-4e3c-9c1e-11eb6ebf908f" method="POST" >
        
        
      <label for="vFullName" class="v-label">Full Name:</label>
      <input type="text" id="vFullName" name="name" class="v-input" style="    border-radius: 13px;" required>

     <label for="vMobileNumber" class="v-label">Mobile Number:</label>
      <input type="tel" id="vMobileNumber" name="number" pattern="[0-9]{5} [0-9]{5}" class="v-input" style="    border-radius: 13px;" required >
      <small>Format: 12345 67890</small>

      <label for="vEmail" class="v-label">Email:</label>
      <input type="email" id="vEmail" name="mail" class="v-input" style="    border-radius: 13px;" required>

      <div class="v-file-input-container" style="background: #7975680a;">
          
        <input type="file" id="vResume" name="file" class="v-file-input" accept=".pdf, .doc, .docx"   required >
        <label for="vResume" class="v-file-input-label" >Upload Resume</label>
      </div>

      <button type="submit" class="v-button">Submit</button>
    </form>
  </div>

 <div class="footerr">
  </div>  
  
  <script type="text/javascript" src="./footer.js">
  </script>
</body>
</html>

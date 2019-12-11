<?php
    require('./connexion.php') ;
 ?>
  <!DOCTYPE html>
  <html>
    <head>
      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
      <title> Login </title>
    </head>
    <body class="flex content-center justify-center flex-wrap bg-gray-200">
      <div class="w-full max-w-xs my-24">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method=POST action="./login.php" >
    <div class="flex flex-wrap -mx-3 mb-6">
      <h4 class="block uppercase text-center w-full tracking-wide text-blue-500 text-xs font-bold mb-2">
        Interface d'adminstration
      </h4>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Username
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required id="grid-first-name" name="username" type="text" placeholder="Jane">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Password
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 " required id="grid-password" name="password" type="password" placeholder="******************">
    </div>
    <?php
      if ( isset($_SESSION['error']) && $_SESSION['error'] == true ) {
        echo ' <div class="w-full px-3">
          <p class="text-red-500 text-xs italic font-bold "> Check your credentials please !</p>
        </div> ' ;
        $_SESSION['error'] = false ;
      }
     ?>
  </div>
    <div class="flex items-center flex-row-reverse justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline rounded-full" type="submit">
        Sign In
      </button>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2019 - All rights reserved.
  </p>
</div>

    </body>
  </html>

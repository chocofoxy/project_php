<?php
  require('./checkSession.php') ;
  if ( isset($_GET['id']) ) {
    $id = $_GET['id'] ;
    $res = $conn->query("SELECT * FROM etudiant WHERE nce='$id' ")->fetch();
    if ( !$res || count($res) == 0 ) {
      header('Location:./dashboard_etudiant.php');
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title> Dashboard </title>
</head>

<body class="flex content-center justify-center flex-wrap bg-gray-200">
  <div class="bg-white border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md w-full" role="alert">
    <div class="flex">
      <div class="py-1">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" class="fill-current h-6 w-6 text-blue-500 mr-4 svg-inline--fa fa-home fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <path fill="currentColor"
            d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
          </path>
        </svg></div>
      <div class="w-full">
        <p class="font-bold">Welcome to the dashboard </p>
        <p class="text-sm">You are currently loged in as <?php echo $_SESSION['username'] ; ?></p>
      </div>
      <a href="./logout.php">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="fill-current hover:text-red-500 h-6 w-6 text-blue-500 mr-4 svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512">
          <path fill="currentColor"
            d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z">
          </path>
        </svg></a>
    </div>
  </div>
  </div>
  <div class="bg-white w-full mt-4 mx-4  shadow-md">
    <nav class="flex flex-col content-center justify-center sm:flex-row">
      <a href="./dashboard.php" class="text-gray-600 uppercase py-4 px-6 block hover:text-blue-500 focus:outline-none">
        les soutenances
      </a><a href="./dashboard_etudiant.php" class="text-gray-600 uppercase py-4 px-6 block hover:text-blue-500 focus:outline-none">
        les etudiants
      </a><a href="./dashboard_enseignant.php" class="text-gray-600 uppercase py-4 px-6 block hover:text-blue-500 focus:outline-none">
        les enseignants
      </a>
    </nav>
  </div>
  <div class="bg-white w-full mt-4 mx-4 px-8 pt-2 shadow-md">
    <form method=POST action='./modify.php' >
    <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full md:w-1/6 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
          NCE
        </label>
        <input name="nce" value="<?php echo $res['nce'] ?>" readonly required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" min="0" placeholder="12">
      </div>
      <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          nom
        </label>
        <input name="nom" value="<?php echo $res['nom'] ?>" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Ahmed">
        </div>
      <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          prenom
        </label>
        <input name="prenom" value="<?php echo $res['prenom'] ?>" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Ben mohamed">
      </div>
      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
          classe
        </label>
        <input required name="classe" value="<?php echo $res['classe'] ?>" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="DSI22">
      </div>
    </div>
      <div class="w-full flex flex-row-reverse m-3 mt-6">
        <button type="submit" value="submit" class="bg-orange-500 mx-1 uppercase hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full">
            modify
        </button>
    </div>
    </div>
  </form>
</body>

</html>

<?php
  require('./checkSession.php') ;
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
      </a><a href="./dashboard_etudiant.php" class="text-gray-600 py-4 px-6 block uppercase hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
        les etudiants
      </a><a href="./dashboard_enseignant.php" class="text-gray-600 uppercase py-4 px-6 block hover:text-blue-500 focus:outline-none">
        les enseignants
      </a>
    </nav>
  </div>
  <div class="bg-white w-full mt-4 mx-4 px-8 pt-2 shadow-md">
    <form method=POST action='./add_etudiant.php' >
    <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full md:w-1/6 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
          NCE
        </label>
        <input name="nce" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" min="0" placeholder="12">
      </div>
      <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          nom
        </label>
        <input name="nom" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Ahmed">
        </div>
      <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          prenom
        </label>
        <input name="prenom" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Ben mohamed">
      </div>
      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
          classe
        </label>
        <input required name="classe" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="DSI22">
      </div>
    </div>
      <div class="w-full flex flex-row-reverse m-3 mt-6">
        <button type="submit" value="submit" class="bg-green-500 mx-1 uppercase hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
            ajouter
        </button>
    </div>
    </div>
  </form>
  </div>
  <div class="w-full h-full m-4">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <table class="table-fixed w-full">
        <thead>
          <tr>
            <th class="w-1/6 px-4 py-2">Nce</th>
            <th class="w-1/3 px-4 py-2">Nom</th>
            <th class="w-1/3 px-4 py-2">Prenom</th>
            <th class="w-1/4 px-4 py-2">Classe</th>
            <th class="w-1/4 px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $res = $conn->query("SELECT * FROM etudiant ")->fetchAll();
             if ( !$res || count($res) == 0) {
               echo "<tr><td class='border px-4 py-4 text-center italic' colspan=6 > Il n'y a pas des etudiants </td></tr>" ;
             } else {
               $table = '' ;
               foreach ($res as $etudiant) {
                 $table .= '<tr><td class="text-center border px-4 py-2">'.$etudiant['nce'].'</td>' .
                           '<td class="text-center border px-4 capitalize py-2">'.$etudiant['nom'].'</td>' .
                           '<td class="text-center border px-4 capitalize py-2">'.$etudiant['prenom'].'</td>' .
                           '<td class="text-center border px-4 uppercase py-2">'.$etudiant['classe'].'</td>' .
                           '<td class="text-center border px-4 py-2 flex justify-center">
                           <a href="./delete_etudiant.php?id='.$etudiant['nce'].'">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" class="fill-current h-6 w-6 text-red-500 mr-4 svg-inline--fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                           <path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z">
                           </path></svg>
                            </a>
                            <a href="./modify_etudiant.php?id='.$etudiant['nce'].'">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" class="fill-current h-6 w-6 text-orange-500 mr-4 svg-inline--fa fa-user-edit fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"></path></svg>
                             </a>
                           </td></tr>';
               }
               echo $table  ;
             }

           ?>
        </tbody>
      </table>
    </div>
    <p class="text-center text-gray-500 text-xs">
      &copy;2019 - All rights reserved.
    </p>
  </div>
</body>

</html>

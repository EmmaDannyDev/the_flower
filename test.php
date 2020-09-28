<?php

   $user->getLastName(), => $user->getFirstName(),
   $user->getLastName(), => $user->getFirstName(),
   $user->getLastName(), => $user->getFirstName(),
   $user->getLastName(), => $user->getFirstName(),
   $user->getLastName(), => $user->getFirstName(),
   $user->getLastName(), => $user->getFirstName(),
   $user->getLastName(), => $user->getFirstName(),
   $user->getLastName(), => $user->getFirstName(),



   'email'      =>
   'password'   =>
   'firstName'  =>
   'lastName'   =>
   'address'    =>
   'postalCode' =>
   'city'       =>


   echo $user->getEmail();
   echo $user->getPassword();
   echo $user->getFirstName();
   echo $user->getLastName();
   echo $user->getAddress();
   echo $user->getPostalCode();
   echo $user->getCity();


   INSERT INTO users ( email, password, firstName, lastName , adress, postalCode, city )
   VALUES ( 'rdzoaijzao@live.fr', 783783, 'eiojdoa', 'eiojdoa', 'eiojdoa', 1111, 'eiojdoa' )


   <?php

   include('view/form.php');
   include('model/User.class.php');
   include('model/Connection.class.php');
   include('model/manager/UserManager.class.php');

   if ($_POST['post'] == 1)
   {
     $user = new User;

     $donnees = array(
       'password'=> $_POST['password'],
       'email'=> $_POST['email'],
       'firstName' => $_POST['firstName'],
       'lastName' => $_POST['lastName'],
       'address' => $_POST['address'],
       'postalCode' => $_POST['postalCode'],
       'city' => $_POST['city'],
     );

     $user->hydrate($donnees);
     $conn = new Connection();
     $db = $conn->getDb();

     $Manager = new UserManager($db);

     $Manager->create($user);
   }






   ?>



?>

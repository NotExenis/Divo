<?php 
if(isset($_SESSION['role'])){
    if($_SESSION['role'] == 'admin'){
        $navitems = array(
            array('home_admin', 'Home'),
            array('add_partij', 'Add partij'),
            array('add_beheer', 'Add beheer'),
            array('logout', 'Logout')

        );
    }
    elseif($_SESSION['role'] == 'user'){
        $navitems = array(
            array('home', 'Home'),
            array('logout', 'Logout')

        );
    }

}
else{
    $navitems = array(
        array('login', 'Login'),
        array('register', 'Registreer'),
        array('login_admin', 'Admin')
    );
}


?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <ul class="navbar-nav">
<?php foreach((array)$navitems as $navitem){?>
 <li class="nav-item">
      <a class="font-weight-bold nav-link text-light" href="index.php?page=<?= $navitem[0] ?>"><?= $navitem[1]?></a>
    </li>
 <?php } ?>
  </ul>
</nav> 
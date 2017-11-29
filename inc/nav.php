<header id='header'>

    <section id='section-one'>
      <h2>Novine</h2>
    </section>

    <section id='section-two'>
      <!--Pretraga novosti po tagu ili kategoriji-->
      <form>
        <input type="text" name="s" placeholder="Unesite zeljeni naslov,sadrzaj...">
        <input type="submit" value="Pretrazi">
      </form>
    </section>

    <section id='section-three'>
      <nav id='nav'>
        <ul>
          <li><a href='index.php'>Pocetna</a></li>
          <!--AKO IMA SESIJA DA SE PRIKAZE PROFIL I ODJAVLJIVANJE.. AKO JE KORISNIK VECEG RANGA PRKAZATAI ZA NJEGA NAVIGACIJU-->
          <!--AKO NEMA SESIJE LOGIN- REGISTER-->
          <?php
          $category = "<li><a href='?p=addCategory'>Kategorija</a></li>";
          $users = "<li><a href='?p=users'>Korisnici</a></li>";
          $news = "<li><a href='?p=news'>Vest</a></li>";
          if($session->sessionExists('level')){
            if($session->getSession('level') == 'admin'){
              echo $news;
              echo $category;
            }elseif($session->getSession('level') == 'superadmin'){
              echo $news;
              echo $category;
              echo $users;
            }
          }
          if($session->sessionExists('user_id')){
            $name = $session->getSession('name');
            echo '<li><a href="?p=profil">' . $name . '</a></li>';
            echo '<li><a href="?p=logout">Odjavi me</a></li>';
          }
          else{?>
            <li><a href='?p=login'>Login</a></li>
            <li><a href="?p=register">Register</a><li>
          <?php
          }

          ?>
        </ul>
        <div class="clear"></div>
      </nav>
    </section>
    <div class="clear"></div>
</header>

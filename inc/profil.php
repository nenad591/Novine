<?php
if(!$session->sessionExists('user_id')){
  header('Location: index.php?p=login');
}
echo "
<div class='profil'>
  <h2>Profilne informacije</h2>
  <p><b>Ime:</b> <span> " . $session->getSession('name') . "</span></p>
  <p><b>Prezime:</b>  <span> " . $session->getSession('lastName') . "</span></p>
  <p><b>E-mail:</b> <span> " . $session->getSession('email') . "</span></p>
  <p><b>Pol:</b>  <span> " . $session->getSession('gender') . "</span></p>
  <p><b>Datum rodjenja:</b>  <span> " . $session->getSession('date') . "</span></p>
  <a href='?p=changeInfo'>Izmeni profilne informacije</a> |
  <a href='?p=changePass'>Promeni sifru</a>
</div>
";
//mogo bi samo email da se sakrije sa **** da bude fora:D ako mozda neko drugi uspe da vidi neciji profil pa pokusa da upadne ili tako nesto :D
//mogucnost izmene sifre i nekih informacija(ime prezime i datum..)
?>

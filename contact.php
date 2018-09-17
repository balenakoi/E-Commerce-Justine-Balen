
<?php include('header.php');?>

 <main>

   <section>
     <h1>Donnez nous votre avis !</h1>
   </section>
   <form class="" action="result.php" method="post">
     <label for="email">E-mail</label>
     <input type="email" name="email" value="" required>

     <label for="content">Message</label>
     <textarea name="content" required></textarea>

     <input type="submit" name="envoyer" value="Envoyer">
   </form>
 </main>

<?php include('footer.php'); ?>

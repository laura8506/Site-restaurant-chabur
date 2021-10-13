<?php include 'header.php' ?>

<div class="section contact">
    <br><br>
    <h3>CONTACT</h3>
    <br>
    <form action="" method="post">
        <div>
            <label for="name">Votre nom (obligatoire)</label><br>
            <input class="formulaire_contact" id="name" type="text" name="nom">
        </div><br>
        <div>
            <label for="email">Votre adresse email (obligatoire)</label><br>
            <input class="formulaire_contact" id="email" type="email" name="email">
        </div><br>
        <div>
            <label for="object">Objet</label><br>
            <input class="formulaire_contact" id="object" type="text" name="objet">
        </div><br>
        <div>
            <label for="message">Votre message</label><br>
            <textarea class="formulaire_contact" id="message" name="message"></textarea>
        </div><br>
        <button type="submit" class="bouton_contact"><a href="#">Envoyer</a></button><br><br>
    </form>
</div>

<?php include 'footer.php' ?>
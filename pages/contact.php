<div class="starter-template">
    <h1>Contact</h1>
    <p class="lead">
        Prenez contact avec moi via ce formulaire :
    </p>
</div>
<div class="container">
    <?php
        require_once('includes/form-validation.php');
        $errors = [];
        if (count($_POST) > 0) {
            ?>
            <!-- <div style="position:fixed;left:0;top:0;width:100%;height:100%;background:rgba(255,255,255,0.7);z-index:1031;"></div> -->
            <?php
            $errors = checkContactForm($_POST, $validators);
        }
    ?>
    <form method="post">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="contactFormEmail">Email</label>
                <input type="email" class="form-control" id="contactFormEmail" name="contactFormEmail" aria-describedby="emailHelp" placeholder="Entrez votre email" required>
                <small id="emailHelp" class="form-text text-muted">Vous recevrez votre réponse sur cet email.</small>
                <?php
                    if (count($errors) > 0 && isset($errors['email'])) {
                ?>
                    <small class="text-danger">
                        <?=$errors['email']?>
                    </small>
                <?php
                    }
                ?>
            </div>
            <div class="form-group col-md-6">
                <label for="contactFormName">Nom</label>
                <input type="text" class="form-control" id="contactFormName" name="contactFormName" placeholder="Prénom ou surnom..." required>
                <?php
                    if (count($errors) > 0 && isset($errors['name'])) {
                ?>
                    <small class="text-danger">
                        <?=$errors['name']?>
                    </small>
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="contactFormSubject">Objet</label>
            <input type="text" class="form-control" id="contactFormSubject" name="contactFormSubject" placeholder="Objet du message" required>
            <?php
                if (count($errors) > 0 && isset($errors['subject'])) {
            ?>
                <small class="text-danger">
                    <?=$errors['subject']?>
                </small>
            <?php
                }
            ?>
        </div>
        <div class="form-group">
            <label for="contactFormMessage">Message</label>
            <textarea class="form-control" id="contactFormMessage" name="contactFormMessage" required></textarea>
            <?php
                if (count($errors) > 0 && isset($errors['message'])) {
            ?>
                <small class="text-danger">
                    <?=$errors['message']?>
                </small>
            <?php
                }
            ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
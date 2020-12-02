<div class="container">

        <h3>Ajouter une Voiture</h3>
        <form action="<?php echo base_url();?>index.php/BackOfficeController/ajouterCarBut" method="post">

        <fieldset>
            <input name="nom" placeholder="nom" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
            <input name="prix" placeholder="prix" type="text" tabindex="2" required>
        </fieldset>
        <label>Année de la voiture</label>
        <fieldset>
            <select id="anneee" name="annee" placeholder="année">
                <?php for($i=1900;$i<=2018;$i++){ ?>
                    <option id="annee" name="annee"><?php echo $i;?></option>
                <?php } ?>
            </select>

        </fieldset>
            <br/>


        <fieldset>
            <br/>
            <input name="description" placeholder="desciption" type="text" tabindex="2" required>
        </fieldset>

        <labe>Ajoueter l'image du voiture</labe>
        <fieldset>
            <br/>
            <input name="image" type="file" class="filestyle" data-classButton="btn btn-primary" data-input="false" data-classIcon="icon-plus" data-buttonText="Choisissez votre dossier">
        </fieldset>
            <br/>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Ajouter</button>
            </fieldset>

    </form>

</div>

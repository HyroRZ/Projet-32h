<div class="row">
            <div class="col">
                <h1 class="garage_h1">Tongasoa</h1>
                <p> Le site web A-TAKALO est un site sur lequel nos utilisateurs peuvent echanger des objets diverses.
                    On met ici en place un site qui permet de faire des échanges d’objet : Takalo-takalo (en Malagasy).
                    Les utilisateurs inscrits sur le site mettent en ligne leurs objets (vêtement, livre, DVD,
                    etc…). Ils peuvent voir les objets des autres utilisateurs et proposer un échange entre 2 objets.
                    Si l’autre utilisateur accepte, l’objet change donc de propriétaire.
                </p>
                <form action="<?php echo base_url('/DatabaseHandler/search') ?>" class="search-bar" method="GET">
                    <input type="text" name="search" id="" placeholder="search anything">
                    <select name="category" id="">
                        <option value="">Tous</option>
                        <?php for ($i=0; $i <count($categories['id']) ; $i++) { ?>
                            <option value="<?php echo $categories['id'][$i] ?>"><?php echo $categories['nom'][$i] ?></option>
                        <?php } ?>
                    </select>
                    <button type="submit"><img src="<?php echo base_url('/assets/img/search.png') ?>" alt=""></button>
                </form>
            </div>
        </div>
    </div>

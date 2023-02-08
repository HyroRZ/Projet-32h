<div class="row">
            <div class="col">
                <h1 class="garage_h1">Welcome</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Soluta aperiam iure sed eveniet quibusdam porro provident, nihil beatae nemo ex. 
                    Repudiandae ad a culpa ex dolores provident omnis laborum voluptatum.
                </p>
                <form action="<?php echo base_url('/DatabaseHandler/search') ?>" class="search-bar" method="GET">
                    <input type="text" name="search" id="" placeholder="search anything">
                    <select name="category" id="">
                        <?php for ($i=0; $i <count($categories['id']) ; $i++) { ?>
                            <option value="<?php echo $categories['id'][$i] ?>"><?php echo $categories['nom'][$i] ?></option>
                        <?php } ?>
                    </select>
                    <button type="submit"><img src="<?php echo base_url('/assets/img/search.png') ?>" alt=""></button>
                </form>
            </div>
        </div>
    </div>

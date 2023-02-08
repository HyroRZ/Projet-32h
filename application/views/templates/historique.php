</div>
<link rel="stylesheet" href="<?php echo base_url('/assets/css/StyleHisto.css') ?>">
<div class="tableau">
    <?php if (isset($historique)&&!empty($historique)) { ?>
        <h1>Historique des transactions</h1>
        <table>
            <tr>
                <th>Id Transaction</th>
                <th>Objet Echange</th>
                <th>Ancien Proprietaire</th>
                <th>Nouvel Objet</th>
                <th>Proprietaire Actuel</th>
                <th>Date</th>
            </tr>
            <?php for ($i=0; $i <count($historique['idEchange']) ; $i++) { ?>
                <tr>
                    <td><?php echo $historique['idEchange'][$i] ?></td>
                    <td><?php echo $historique['nom1'][$i] ?></td>
                    <td><?php echo $historique['user1'][$i] ?></td>
                    <td><?php echo $historique['nom2'][$i] ?></td>
                    <td><?php echo $historique['user2'][$i] ?></td>
                    <td><?php echo $historique['date'][$i] ?></td>
                </tr>
            <?php } ?>
         
        </table>
    <?php } else { ?>
        <h1>Aucun echange effectue</h1>
    <?php } ?>
</div>
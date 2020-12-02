<style>
    #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 1366px;
        margin-left: 77px;
        margin-top: 30px;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #dcb134;
        color: white;
    }
    .button {
        background-color: #dab033;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

</style>
<body>

<table id="customers">
    <tr>
        <th>Nom</th>
        <th>argent</th>
        <th>contact</th>
        <th>mail</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($listeUser as $list){ ?>
        <tr>
            <td><?php echo $list['login'];?></td>
            <td><?php echo $list['argent']; ?></td>
            <td><?php echo $list['contact']; ?></td>
            <td><?php echo $list['mail']; ?></td>

            <td><button class="button" type="submit">modifier</button></td>

            <form action="<?php echo base_url();?>index.php/BackOfficeController/supprimerUser" method="post">
                <input type="hidden" name="idUser" value="<?php echo $list['idUser']; ?>">
            <td><button class="button" type="submit">supprimer</button></td>
            </form>
        </tr>
    <?php } ?>
</table>

</body>
</html>

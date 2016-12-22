<main>
    <header>
        <h1>Garage Programmeren 4</h1>
    </header>
    <article>
        <nav>
            <a href="/oefeningen/oefeningPdoMvc/oefeningPdoMvc.php/Home/Inserting">Inserting</a>
            <a href=""></a>
        </nav>
        <section>
            <?php
                if (count($model->getList()) > 0) { ?>
                <table>
                    <?php foreach($model->getList() as $item) { ?>
                    <tr>
                        <td>
                            <?php echo $item['Name'];?>
                        </td>
                        <td>
                            <?php echo $item['PurchaseDate'];?>
                        </td>
                        <td>
                            <?php echo $item['Price'];?>
                        </td>
                        <td><a href="/oefeningen/oefeningPdoMvc/oefeningPdoMvc.php/Home/Updating/<?php echo $item['Id'];?>">Updating</a></td>
                        <td>Delete</td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                } else { ?>
                    <p>Geen artikels gevonden</p>
                <?php 
                } ?>
        </section>
    </article>
    <footer></footer>
</main>
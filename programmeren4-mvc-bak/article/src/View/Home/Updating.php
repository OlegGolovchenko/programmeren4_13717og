<main>
    <header>
        <h1>Garage Programmeren 4</h1>
    </header>
    <article>
        <nav>
            <a href=""></a>
            <a href=""></a>
        </nav>
        <form action="/article.php/Home/Update" method="post">
            <input name="ArticleId" type="text" value="<?php echo $model->getId();?>"/>
            <div>
                <label for="ArticleName">Naam</label>
                <input type="text" name="ArticleName" value="<?php echo $model->getName();?>"></div>
            <div>
                <label for="ArticlePurchaseDate">Aankoopdatum</label>
                <input type="text" name="ArticlePurchaseDate" value="<?php echo $model->getPurchaseDate();?>"></div>
            <div>
                <label for="ArticlePrice">Kostprijs</label>
                <input type="text" name="ArticlePrice" value="<?php echo $model->getPrice();?>"></div>
            <button type="submit">Update</button>
        </form>
    </article>
</main>
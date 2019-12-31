<?php require 'header.php'; ?>
    <div class="container">
        <form method="POST">
            <p>Quais suas linguagens de programação favoritas?</p>
            <input type="checkbox" value="PHP" name="languages[]"> PHP <br />
            <input type="checkbox" value="Java" name="languages[]"> Java <br />
            <input type="checkbox" value="C#" name="languages[]"> C# <br />
            <input type="checkbox" value="Python" name="languages[]"> Python <br />
            <input type="submit" name="btnSend" value="Enviar dados" />
        </form>
        <?php if($return): ?>
            <h4>Você selecionou as seguintes linguagens:</h4>
            <?php foreach($languages as $lang): ?>
                <p><?php echo $lang; ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php require 'footer.php'; ?>

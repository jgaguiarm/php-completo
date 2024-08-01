<div class="titulo">Integração CSS</div>

<h1>
    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Mundo!';
        echo '</small>';
    ?>
</h1>

<?= "<div>Outra forma de me 'expressar'!" ?>

<br>
<div><button><?= "Legal" ?></button></div>

<style>
    button {
        padding: 5px 20px;
        background: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }
    [center] {
        display: flex;
        justify-content: center;
    }

    [dobro] {
        font-size: 2rem;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        font-size: <?= 10 -8?>rem;
    }

</style>
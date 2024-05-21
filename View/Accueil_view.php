<?php
if (isset($_SESSION['information'])) {
    echo '<label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert warning">
                    <span class="alertClose">X</span>
                    <span class="alertText">'.$_SESSION['information'].'</span>
                </div>
            </label>'."\n";
    session_unset();
}
?>
<style>
    label {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<div id="contenu"
	<h1>Bienvenue sur le projet WR213 un site de jeux.</h1>
	<p>un site de jeux, pour vous</p>
	<p class="centre">
        <img src="../View/img/wr213_logo2.png" alt="Deux."/>
    </p>
	<div class="remarque"></div>
</div>

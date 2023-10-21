<?php

    include_once '../templates/header.php'

?>

<main id="cursospage">
    <?php 
        $teste_cursos = ['1', '2', '3', '4', '5', '6', '7'];
        $teste_cursos = array_chunk($teste_cursos, 3);
    ?>

    <div class="titlePage">
        <h1>Meus Cursos</h1>
    </div>

    <?php foreach($teste_cursos as $key => $grupo_de_cursos): ?>
        <div class="container <?php if($key != 0):  ?> mt-5 <?php else: ?> mt-3 <?php endif  ?> ">
            <div class="row">
                <?php foreach($grupo_de_cursos as $curso): ?>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <a href="https://pypl.github.io/PYPL/All.png" target="_blank">
                                <img src="https://pypl.github.io/PYPL/All.png" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <?php endforeach ?>

</main>
<?php
include "./includes/header.php";
// require "./consultas.php";
?>

<main class="main-content">

    <div class="filtro">
        <h2 class="section-title">your tasks</h2>
        <div class="searcher">
            <form>
                <div class="searcher-div">
                    <svg style="margin-left:10px" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                    </svg>
                    <input class="searcher" type="text" placeholder="Search">
                </div>
            </form>
        </div>
    </div>

    <section>
        <div class="tasks-section">

        <?php
            echo mostrarTasks();
        ?>
        </div>

        <div class="paginacion">
            <button class="btn-paginacion">1</button>
            <button class="btn-paginacion">2</button>
            <button class="btn-paginacion">3</button>
        </div>
    </section>

</main>
<?php
include "./includes/header.php";
?>

<main class="main-content">
    <div class="task-options">
        <h2 class="section-title">task name</h2>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#022E66" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
            </svg>
        </div>
    </div>

    <section>
        <h3>Form</h3>
        <form class="form">
            <div class="inputBox">
                <label>Hours</label>
                <input type="time">
            </div>

            <div class="inputBox">
                <label>Fecha</label>
                <input type="date">
            </div>

            <div class="inputBox">
                <label>File</label>
                <input type="file">
            </div>

            <div class="inputBox">
                <label>Work</label>
                <textarea>
                </textarea>
            </div>

            <button class="btn btn-primary" type="submit" name="login">Submit</button>
        </form>
    </section>
</main>
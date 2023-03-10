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
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#022E66" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <line x1="9" y1="12" x2="15" y2="12" />
                <line x1="12" y1="9" x2="12" y2="15" />
            </svg>
        </div>
    </div>

    <section class="task-main">
        <div class="task-container">
            <div class="task-stats">
                <h3>Statistics</h3>
                <div class="stats">
                    <div id="stat-state" class="task-stat">
                        <p><b>State:</b> 
                        <span>
                            <div class="task-state to-do">
                                <p>to do</p>
                            </div>
                        </span>
                        </p>
                    </div>
                    <div class="task-stat">
                        <p><b>Total Hours:</b> <span>24</span></p>
                    </div>
                    <div class="task-stat">
                        <p><b>Initial Date:</b> <span>12/12/2022</span></p>
                    </div>
                    <div class="task-stat">
                        <p><b>Expected Hours:</b> <span>24</span></p>
                    </div>
                    <div class="task-stat">
                        <p><b>End Date:</b> <span>24/12/2022</span></p>
                    </div>
                </div>
            </div>

            <div class="task-employees">
                <h3>Employees</h3>
                <div class="employees">
                    <div class="task-employee">
                        <div class="dot"></div>
                        <p><b>Employees</b></p>
                    </div>
                    <div class="task-employee">
                        <div class="dot"></div>
                        <p><b>Employees</b></p>
                    </div>
                    <div class="task-employee">
                        <div class="dot"></div>
                        <p><b>Employees</b></p>
                    </div>
                </div>
            </div>

            <div class="task-description">
                <h3>Description</h3>
                <p class="task-text">Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Nam
                diam ligula, posuere rutrum quam
                sit amet, imperdiet elementum leo.</p>
            </div>

            <div class="task-pictures">
                <h3>Pictures</h3>
                <div class="pictures">
                    <div class="cuadrado"></div>
                    <div class="cuadrado"></div>
                    <div class="cuadrado"></div>
                    <div class="cuadrado"></div>
                    <div class="cuadrado"></div>
                    <div class="cuadrado"></div>
                    <div class="cuadrado"></div>
                    <div class="cuadrado"></div>
                </div>

            </div>
        </div>
    </section>

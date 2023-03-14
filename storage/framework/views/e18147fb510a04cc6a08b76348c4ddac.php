<nav class="navbar navbar-expand-lg bg-light custom-navbar-color fixed-top shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand  " href="..">Pemanasan Kelompok 9</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link rounded-5 custom-navbar-item-color<?php
                                                                                if ($name == 'samuel') {
                                                                                    echo ' active" aria-current="page';
                                                                                }
                                                                                ?>" href="samuel">Samuel</a>

                        <a class="nav-link rounded-5 custom-navbar-item-color<?php
                                                                                if ($name == 'delvina') {
                                                                                    echo ' active" aria-current="page';
                                                                                }
                                                                                ?>" href="delvina">Delvina</a>

                        <a class="nav-link rounded-5 custom-navbar-item-color<?php
                                                                                if ($name == 'mary') {
                                                                                    echo ' active" aria-current="page';
                                                                                }
                                                                                ?>" href="mary">Mary</a>

                        <a class="nav-link rounded-5 custom-navbar-item-color<?php
                                                                                if ($name == 'nicholaus') {
                                                                                    echo ' active" aria-current="page';
                                                                                }
                                                                                ?>" href="nicholaus">Nicholaus</a>
                    </div>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?><?php /**PATH D:\Kuliah\Semester 6\Web Programming\gslc1-individu\resources\views/template.blade.php ENDPATH**/ ?>
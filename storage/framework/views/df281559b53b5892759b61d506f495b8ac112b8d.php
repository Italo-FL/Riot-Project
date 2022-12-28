<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>projectRiot</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/nav.css">
        <?php echo $__env->yieldContent('css'); ?>
    </head>
    <body>
    <div class="header">
        <div class="bg-itens-header">
            <a href="League-of-Legends">
                <div class="item-header">
                    <div class="align-header">
                        <div class="div-img"><img src="/img/lol_sf.png" class="img"></div>
                        <div class="div-txt"><h1 class="header-1">League of Legends</h1></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="bg-itens-header">
            <a href="Legends-of-Runeterra">
                <div class="item-header">
                    <div class="align-header">
                        <div class="div-img"><img src="/img/lor_sf.png" class="img"></div>
                        <div class="div-txt"><h1 class="header-1">Legends of Runeterra</h1></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="bg-itens-header">
            <a href="Teamfight-Tatics">
                <div class="item-header">
                    <div class="align-header">
                        <div class="div-img"><img src="/img/tft_sf.png" class="img"></div>
                        <div class="div-txt"><h1 class="header-1">Teamfight Tatics</h1></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="bg-itens-header">
            <a href="Valorant">
                <div class="item-header">
                    <div class="align-header">
                        <div class="div-img"><img src="/img/vava_sf.png" class="img-vava"></div>
                        <div class="div-txt"><h1 class="header-2">Valorant</h1></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="bg-nav">

        <nav class="nav-header">

            <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="nav-item">
                    <h2 class="nav-txt"><a href=<?php echo e(str_replace(' ','-', $item)); ?>><?php echo e(str_replace('-',' ', $item)); ?></a></h2>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </nav>
    </div>

    <?php echo $__env->yieldContent('content'); ?>

    </body>
</html><?php /**PATH C:\Users\denis\Área de Trabalho\Projeto Riot\projetoRiot\resources\views/resource/header/headerTags.blade.php ENDPATH**/ ?>
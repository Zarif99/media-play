<?php /** @noinspection ALL */

/* @var $this yii\web\View */
/* @var $film \common\models\Film[] */

$this->title = 'MediaPlay';
?>
<div class="box">
    <div class="head">
        <h2>LATEST TRAILERS</h2>
        <p class="text-right"><a href="#">See all</a></p>
    </div>
    <?php $id = 0; ?>
    <?php foreach ($film as $f) { ?>
        <?php $id++; ?>
            <div class="movie <?= ($id == 6 ? 'last' : '') ?>">
                <div class="movie-image"><span class="play">
                        <?=
                            \yii\helpers\Html::a("<span class=\"name\"><?= $f->title ?></span>" , ['site/view' , 'id' => $f->id])
                        ?>

                    </span>
                        <img src="<?= '/kino/' . $f->image ?>" alt=""/>
                </div>

                <div class="rating">
                    <p>RATING</p>
                    <div class="stars">
                        <div class="stars-in"></div>
                    </div>
                    <span class="comments">12</span></div>
            </div>
        <?php if ($id == 6) break ?>
    <?php } ?>

    <div class="cl">&nbsp;</div>
</div>

<div class="box">
    <div class="head">
        <h2>TOP RATED</h2>
        <p class="text-right"><a href="#">See all</a></p>
    </div>
    <?php $id = 0; ?>
    <?php foreach ($film as $f) { ?>
        <?php $id++; ?>
            <div class="movie <?= ($id == 6 ? 'last' : '') ?>">
                <div class="movie-image"><span class="play">
                        <?=
                            \yii\helpers\Html::a("<span class=\"name\"><?= $f->title ?></span>" , ['site/view' , 'id' => $f->id])
                        ?>

                    </span>
                        <img src="<?= '/kino/' . $f->image ?>" alt=""/>
                </div>

                <div class="rating">
                    <p>RATING</p>
                    <div class="stars">
                        <div class="stars-in"></div>
                    </div>

                </div>
            </div>
        <?php if ($id == 6) break ?>
    <?php } ?>

    <div class="cl">&nbsp;</div>
</div>

<div class="box">
    <div class="head">
        <h2>MOST COMMENTED</h2>
        <p class="text-right"><a href="#">See all</a></p>
    </div>
    <?php $id = 0; ?>
    <?php foreach ($film as $f) { ?>
        <?php $id++; ?>
            <div class="movie <?= ($id == 6 ? 'last' : '') ?>">
                <div class="movie-image"><span class="play">
                        <?=
                            \yii\helpers\Html::a("<span class=\"name\"><?= $f->title ?></span>" , ['site/view' , 'id' => $f->id])
                        ?>

                    </span>
                        <img src="<?= '/kino/' . $f->image ?>" alt=""/>
                </div>

                <div class="rating">
                    <p>RATING</p>
                    <div class="stars">
                        <div class="stars-in"></div>
                    </div>
                    <span class="comments">12</span></div>
            </div>
        <?php if ($id == 6) break ?>
    <?php } ?>

    <div class="cl">&nbsp;</div>
</div>


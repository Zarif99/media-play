<?php


/* @var $this yii\web\View */

use common\models\Film;

/* @var $film Film[] */
/** @noinspection PhpUndefinedFieldInspection */
$this->title = 'view';
//$film = Film::find()->all();
$film = Film::find()->orderBy(['like'=>SORT_DESC])->all();
?>

<video class="box" width="100%" controls>
    <source src="/kino/Captain.Marvel.2019.720p.Web.@intermedia.MP4" type="video/MP4">
</video>

<div class="card">
    <table class="table" style="font-size: 100%; border-style: solid">
        <tr>
            <th width="5em">#</th>
            <th width="45em">Name</th>
            <th width="5em">Value</th>
        </tr>

    </table>
</div>

<div class="box">
    <div class="head">
        <h2>BEST TRAILERS</h2>
        <p class="text-right"><a href="#">See all</a></p>
    </div>

    <?php $id = 0; ?>
    <?php foreach ($film as $f) { ?>
        <?php $id++; ?>
        <div class="movie <?= ($id == 6 ? 'last' : '') ?>">
            <div class="movie-image"><span class="play">
                        <?=
                        \yii\helpers\Html::a("<span class=\"name\"><?= $f->title ?></span>", ['site/view', 'id' => $f->id])
                        ?>

                    </span>
                <img src="<?= '/kino/' . $f->image ?>" alt=""/>
            </div>

            <div class="rating">
                <p>RATING</p>
                <div class="stars">
                    <div class="stars-in"></div>
                </div>
                <span class="comments">12</span>
            </div>
        </div>
        <?php if ($id == 6) break ?>
    <?php } ?>

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


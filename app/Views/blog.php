<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1><?= $title ?></h1>

<div class="row access-path">   
    <?php foreach($posts as $post) : ?>
        <?= view_cell('\App\Libraries\Blog::postStuff', ['title' => $post ]) ?>
    <?php endforeach; ?>

</div>
<?= $this->endSection() ?>
 
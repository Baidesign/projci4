<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h1><?= $title ?></h1>

<div>
    <?php foreach($postys as $post) : ?>
        <?= view_cell('\App\Libraries\Blog::tunarudiaStuff', ['blogys' => $post]) ?>
    <?php endforeach; ?>

</div>
<?= $this->endSection() ?>
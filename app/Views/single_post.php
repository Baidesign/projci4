<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h1><?= $title ?></h1>
<h4><?= $content ?></h4>
<h1>this is a cool stuff</h1>
<a href="/viewr/blog/delete/<?= $post['post_id'] ?>" class="btn btn-danger">Delete</a>
<a href="/viewr/blog/edit/<?= $post['post_id'] ?>" class="btn btn-primary">Update</a>
<?= $this->endSection() ?>
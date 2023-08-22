<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1><?= $title ?></h1>

<div class="row "> 
    <div class="col-12 col-md-8 offset-md-3">
        <form  method="post">
            <div class="mb-3">
              <label for="" class="form-label">Title</label>
              <input type="text" name="post_title" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $post['post_title'] ?>">
              <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="mb-3">
              <label for="" class="form-label"></label>
              <textarea class="form-control" name="post_content" id="" rows="3"><?= $post['post_content'] ?></textarea>
            </div>
            <div class="mb-3">
            <button class="btn btn-primary">Edit</button>
            </div>
        </form>

    </div>  
    
</div>
<?= $this->endSection() ?>
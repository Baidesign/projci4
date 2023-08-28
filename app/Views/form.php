<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Validation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
        <h1>Form Validation</h1>

        <?php if(isset($validation)) : ?>
            <div class="text-danger">
                <?= $validation->listErrors() ?>
            </div>
            
        <?php endif; ?>
        <div class= "container">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text"
                    class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Username">
                  <small id="helpId" class="form-text text-muted">Your username</small></br>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" value="<?=set_value('email') ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@example.cpm">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name = "password" value="<?=set_value('password') ?>" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Catergory</label>
                    <select name="category" class="form-control">
                        <option value=""></option>
                        <?php foreach($categories as $cat) : ?>
                            <option <?= set_select('category', $cat)?> value="<?= $cat ?>"><?= $cat ?></option> 
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="date">date</label>
                    <input name = "date" value="<?=set_value('date') ?>" type="date" class="form-control" id="date" >
                </div>
                <div class="mb-3">
                    <label for="inputGroupFile04" class="form-label" > Upload a file</label>
                    <input type="file" multiple name="ourFile[]" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                
                </div>
 
                <?php
                    echo '<pre>';
                     print_r($_POST);
                    echo '<pre>';
                ?>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
        </div> 
    </body>
</html>
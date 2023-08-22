<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= (isset($meta_title) ? $meta_title : 'Our Default title') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="icon" href="">
    <style>
        #footer {
            position:absolute;
            background-color: #6a5acd;
            bottom: fixed;
            width: 100%;
            height: 70px; /* the height of the footer */

        }
    </style>
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">       
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lettuce Blogs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav justify-content-center" id="navbarSupportedContent">
                <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Homie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/bloggy">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/new">Post</a>
                </li>
                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>    
    </nav>
    
    <div class="container-fluid">
        <?= $this->renderSection('content') ?>
    </div>
     <div id ="footer">
        <div class="nav justify-content-center"><a class="nav-link active" style="color:gold;" href="/home">Home page</a></div>
        <div class="nav justify-content-right"><p>Copyright to Kirigz walai</p></div>
    </div>
</body>
</html>
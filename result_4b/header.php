<?php $base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="<?= $base_url ?>">my Video</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="add_cat" class="nav-link btn btn-danger btn-sm text-white mx-1 my-1" href="#">Add Category</a>
                    </li>
                    <li class="nav-item">
                        <a id="add_video" class="nav-link btn btn-danger btn-sm text-white mx-1 my-1" href="#">Add Video</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
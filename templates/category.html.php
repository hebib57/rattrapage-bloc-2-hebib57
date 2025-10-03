<?php require_once __DIR__ . '/_header.html.php'; ?>

<!-- Page Content -->
<div class="container py-4">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h2 class="pb-3 mb-4 fst-italic border-bottom">
                <?= htmlspecialchars($category['name']) ?>
            </h2>

            <?php foreach ($articles as $post): ?>
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title"><?= $post['title'] ?></h3>
                    <p class="card-subtitle mb-2 text-muted"><?= formatDateFr($post['published_at']) ?> by <a href="#">MNS</a></p>
                    <p class="card-text"><?= $post['content'] ?></p>
                    <a href="#" class="btn btn-orange mt-auto">En savoir plus</a>
                </div>
            </div>
            <?php endforeach; ?>

            <!--<nav aria-label="Page navigation">
                <ul
                    class="pagination    "
                >
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>-->
            
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php require_once __DIR__ . '/_footer.html.php'; ?>
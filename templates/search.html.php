<?php require_once __DIR__ . '/_header.html.php'; ?>

<!-- Page Content -->
<div class="container py-4">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h2 class="pb-3 mb-4 fst-italic border-bottom">
                Résultats de la recherche pour : <strong><?= $keyword ?></strong>
            </h2>

            <?php if (empty($articles)): ?>
                <div class="alert alert-warning" role="alert">
                    Aucun article trouvé pour le mot-clé : <strong><?= $keyword ?></strong>
                </div>
            <?php endif; ?>

            <?php if (!empty($articles)): ?>
                <div class="alert alert-success" role="alert">
                    <?= count($articles) ?> article(s) trouvé(s) pour le mot-clé : <strong><?= $keyword ?></strong>
                </div>
            <?php endif; ?>
            
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
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php require_once __DIR__ . '/_footer.html.php'; ?>
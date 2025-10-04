<!-- Page Header -->
<header class="bg-orange text-white text-center py-5 mb-4">
    <div class="container">
        <h1 class="fw-light">Tous nos articles</h1>
    </div>
</header>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php foreach ($articles as $post): ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title"><?= htmlspecialchars($post['title']) ?></h3>
                        <!-- htmlspecialchars non obligatoire pour affichage des dates (mais je suis parano donc!!!!) -->
                        <p class="card-subtitle mb-2 text-muted"><?= htmlspecialchars(formatDateFr($post['published_at'])) ?> by <a href="#">MNS</a></p>
                        <p class="card-text"><?= htmlspecialchars($post['content']) ?></p>
                        <a href="#" class="btn btn-orange mt-auto">En savoir plus</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            <!-- Side Widget -->
            <div class="card">
                <h5 class="card-header">Informations</h5>
                <div class="card-body">
                    N'ayez craintes, vous êtes plus forts que vous ne le pensez !<br />
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php require_once __DIR__ . '/_footer.html.php'; ?>
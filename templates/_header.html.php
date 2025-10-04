<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/styles.css" />

</head>

<body>
    <header>
        <nav
            class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="Logo MNS" height="40" /></a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/" aria-current="page">Accueil
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <?php foreach ($categories as $c): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/category.php?id=<?= htmlspecialchars($c['id']) ?>"><?= htmlspecialchars($c['name']) ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <form action="/search.php" class="d-flex my-2 my-lg-0" method="GET">
                        <input
                            class="form-control me-sm-2"
                            type="text"
                            placeholder="ex: Tuto PHP"
                            name="q"
                            aria-label="Search" />
                        <button
                            class="btn btn-outline-orange my-2 my-sm-0"
                            type="submit">
                            Rechercher
                        </button>
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <main>

        <!-- CONTENT GOES HERE -->
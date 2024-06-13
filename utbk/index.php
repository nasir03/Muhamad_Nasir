<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTS DARUL ARIFIN</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>MTS DARUL ARIFIN</h1>
        <nav>
            <ul>
                <li><a href="index.php?page=beranda">BERANDA</a></li>
                <li><a href="index.php?page=profil-sekolah">PROFIL SEKOLAH</a></li>
                <li><a href="index.php?page=ekstrakurikuler">EKSTRAKULIKULER</a></li>
                <li><a href="index.php?page=galeri">GALERI</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'beranda';
        switch($page) {
            case 'beranda':
                include 'beranda.php';
                break;
            case 'profil-sekolah':
                include 'profil-sekolah.php';
                break;
            case 'ekstrakurikuler':
                include 'ekstrakurikuler.php';
                break;
            case 'galeri':
                include 'galeri.php';
                break;
            default:
                include 'beranda.php';
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Muhamad Nasir.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

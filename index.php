<!DOCTYPE html>
<html>
<head>
    <title>윤윤</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <header>
        <h1>윤윤</h1>
    </header>

    <main>
        <section class="photo-gallery">
            <?php for ($i=0; $i<10; $i++) { ?>
            <div class="photo">
                <a href="img.php?imgname=<?=$i+1?>">
                    <img src="img<?=$i+1?>.png" alt="임시 이미지 <?=$i?>">
                </a>
            </div>
            <?php } ?>
            <!-- 여기에 더 많은 사진 추가 가능 -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 나의 포트폴리오. 모든 권리 보유.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>

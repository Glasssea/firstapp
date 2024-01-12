<?php
if(isset($_GET['imgname'])) {
    $imgName = $_GET['imgname'];
    // 이미지 파일이 존재하는지 확인
    if(true) {
        echo '<img src="img' . $imgName . '.png" alt="선택된 사진">';
    } else {
        echo '이미지를 찾을 수 없습니다.';
    }
}
?>

<?php
require_once('config.php');

if ( isset($_GET['url']) ) {
    $url = rtrim($_GET['url'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    // $url = explode('/', $url);
}else {
    $url = 'index';
}

//cek apakah file ada
if( file_exists('pages/' . $url . '.php') ){
    require_once('template/header.php');
    require_once('template/navbar.php');
    require_once('pages/' . $url . '.php');
    require_once('template/footer.php');
}else { ?>
    <p><b>Error</b> 404</p>
    <p>Halaman tidak ditemukan</p>
<?php
}
?>
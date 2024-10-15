<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
    <div class="row">
        <div class="col-md-3 custom-sidebar">
            <div class="custom-sidebar-section">
                <h5 class="custom-sidebar-title">Categories</h5>
                <ul class="category-list">
                    <li>
                        <a href="#">ACCESSORIES<span>(4)</span></a>
                    </li>
                    <li>
                        <a href="#">BODYCARE<span>(4)</span></a>
                    </li>
                    <li>
                        <a href="#">HAIRCARE<span>(4)</span></a>
                    </li>
                    <li>
                        <a href="#">SKINCARE<span>(4)</span></a>
                    </li>
                </ul>
            </div>
            <div class="custom-sidebar-section">
                <h5 class="custom-sidebar-title">Price</h5>
                <ul class="price-list">
                    <li><a href="#">All</a></li>
                    <li><a href="#">$0.00 - $20.00</a></li>
                    <li><a href="#">$20.00 - $40.00</a></li>
                    <li><a href="#">$40.00 - $60.00</a></li>
                    <li><a href="#">$60.00 - $80.00</a></li>
                    <li><a href="#">$80.00 +</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 custom-content">
            <h2>Phần nội dung chính</h2>
            <p>Đây là phần dành cho nội dung chính của trang web.</p>
        </div>
    </div>
</div>
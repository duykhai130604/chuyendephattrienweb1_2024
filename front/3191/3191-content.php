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
                <ul class="custom-list">
                    <li class="custom-list-item">
                        <a href="#" class="custom-list-item-link custom-list-item-link-hover">ACCESSORIES<span class="custom-list-item-link-count">(4)</span></a>
                    </li>
                    <li class="custom-list-item">
                        <a href="#" class="custom-list-item-link custom-list-item-link-hover">BODYCARE<span class="custom-list-item-link-count">(4)</span></a>
                    </li>
                    <li class="custom-list-item">
                        <a href="#" class="custom-list-item-link custom-list-item-link-hover">HAIRCARE<span class="custom-list-item-link-count">(4)</span></a>
                    </li>
                    <li class="custom-list-item">
                        <a href="#" class="custom-list-item-link custom-list-item-link-hover">SKINCARE<span class="custom-list-item-link-count">(4)</span></a>
                    </li>
                </ul>
            </div>
            <div class="custom-sidebar-section">
                <h5 class="custom-sidebar-title">Price</h5>
                <ul class="custom-list">
                    <li class="custom-list-item"><a href="#" class="custom-list-item-link custom-list-item-link-hover">All</a></li>
                    <li class="custom-list-item"><a href="#" class="custom-list-item-link custom-list-item-link-hover">$0.00 - $20.00</a></li>
                    <li class="custom-list-item"><a href="#" class="custom-list-item-link custom-list-item-link-hover">$20.00 - $40.00</a></li>
                    <li class="custom-list-item"><a href="#" class="custom-list-item-link custom-list-item-link-hover">$40.00 - $60.00</a></li>
                    <li class="custom-list-item"><a href="#" class="custom-list-item-link custom-list-item-link-hover">$60.00 - $80.00</a></li>
                    <li class="custom-list-item"><a href="#" class="custom-list-item-link custom-list-item-link-hover">$80.00 +</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
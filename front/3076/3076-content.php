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
        <h1 class="custom-heading">We Fix Everything Repair Guides</h1>
        <p class="custom-paragraph">The free repair guide for everything and any devices and gadgets</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="custom-blog-card">
                <div class="custom-img-container">
                    <img src="./images/blog-1.jpg" alt="Blog Image" class="custom-img">
                    <div class="custom-date-box">
                        <span class="custom-date">10</span>
                        <span class="custom-month">MAY</span>
                    </div>
                </div>
                <div class="custom-body">
                    <h2 class="custom-title">
                        <a href="" class="custom-title-link">Phablets: Future of Mobile or Just a Fad?</a>
                    </h2>
                    <div class="custom-meta">
                        <span class="custom-meta-item">
                            <i class="fa fa-commenting custom-meta-icon"></i> 0 COMMENTS
                        </span>
                        <span class="custom-meta-item">
                            <i class="fa fa-user custom-meta-icon"></i> BY ADMIN
                        </span>
                    </div>
                    <hr class="custom-divider">
                    <p class="custom-text">Nunc cursus leo risus non ac efficitur vel sed Mauris iaculis finibus
                        ex et viverra. Aliquam blandit ornare justo, in sagittis sem ornare sit amet. Cras
                        posuere vel ex at vulputate. Praesent volutpat consequat.</p>
                    <a href="#" class="custom-btn">READ MORE</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="custom-blog-card">
                <div class="custom-img-container">
                    <img src="./images/blog-8.jpg" alt="Blog Image" class="custom-img">
                    <div class="custom-date-box">
                        <span class="custom-date">09</span>
                        <span class="custom-month">MAY</span>
                    </div>
                </div>
                <div class="custom-body">
                    <h2 class="custom-title">
                        <a href="" class="custom-title-link">The Great Debate: iPad or Surface</a>
                    </h2>
                    <div class="custom-meta">
                        <span class="custom-meta-item">
                            <i class="fa fa-commenting custom-meta-icon"></i> 0 COMMENTS
                        </span>
                        <span class="custom-meta-item">
                            <i class="fa fa-user custom-meta-icon"></i> BY ADMIN
                        </span>
                    </div>
                    <hr class="custom-divider">
                    <p class="custom-text">Nunc cursus leo risus non ac efficitur vel sed Mauris iaculis finibus
                        ex et viverra. Aliquam blandit ornare justo, in sagittis sem ornare sit amet. Cras
                        posuere vel ex at vulputate. Praesent volutpat consequat.</p>
                    <a href="#" class="custom-btn">READ MORE</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="custom-blog-card">
                <div class="custom-img-container">
                    <img src="./images/blog-2.jpg" alt="Blog Image" class="custom-img">
                    <div class="custom-date-box">
                        <span class="custom-date">06</span>
                        <span class="custom-month">MAY</span>
                    </div>
                </div>
                <div class="custom-body">
                    <h2 class="custom-title">
                        <a href="" class="custom-title-link">AMD demonstreert Zen processor</a>
                    </h2>
                    <div class="custom-meta">
                        <span class="custom-meta-item">
                            <i class="fa fa-commenting custom-meta-icon"></i> 0 COMMENTS
                        </span>
                        <span class="custom-meta-item">
                            <i class="fa fa-user custom-meta-icon"></i> BY ADMIN
                        </span>
                    </div>
                    <hr class="custom-divider">
                    <p class="custom-text">Nunc cursus leo risus non ac efficitur vel sed Mauris iaculis finibus
                        ex et viverra. Aliquam blandit ornare justo, in sagittis sem ornare sit amet. Cras
                        posuere vel ex at vulputate. Praesent volutpat consequat.</p>
                    <a href="#" class="custom-btn">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-222">
    <div class="container">
        <div class="row">
            <h1 style="text-align: center;">We Fix Everything Repair Guides</h1>
            <p style="text-align: center;">The free repair guide for everything and any devices and gadgets</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="custom-blog-card">
                <div class="custom-img-container">
                    <img src="./images/blog-1.jpg"
                        alt="Blog Image">
                    <div class="custom-date-box">
                        <span class="custom-date">10</span>
                        <span class="custom-month">MAY</span>
                    </div>
                </div>
                <div class="custom-body">
                    <h2 class="custom-title"><a href="">Phablets: Future of Mobile or Just a Fad?</a></h2>
                    <div class="custom-meta">
                        <span><i class="fa fa-commenting"></i> 0 COMMENTS</span>
                        <span><i class="fa fa-user"></i> BY ADMIN</span>
                    </div>
                    <hr>
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
                    <img src="./images/blog-8.jpg"
                        alt="Blog Image">
                    <div class="custom-date-box">
                        <span class="custom-date">09</span>
                        <span class="custom-month">MAY</span>
                    </div>
                </div>
                <div class="custom-body">
                    <h2 class="custom-title"><a href="">The Great Debate: iPad or Surface</a></h2>
                    <div class="custom-meta">
                        <span><i class="fa fa-commenting"></i> 0 COMMENTS</span>
                        <span><i class="fa fa-user"></i> BY ADMIN</span>
                    </div>
                    <hr>
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
                    <img src="./images/blog-8.jpg"
                        alt="Blog Image">
                    <div class="custom-date-box">
                        <span class="custom-date">06</span>
                        <span class="custom-month">MAY</span>
                    </div>
                </div>
                <div class="custom-body">
                    <h2 class="custom-title"><a href="">AMD demonstreert Zen processor</a></h2>
                    <div class="custom-meta">
                        <span><i class="fa fa-commenting"></i> 0 COMMENTS</span>
                        <span><i class="fa fa-user"></i> BY ADMIN</span>
                    </div>
                    <hr>
                    <p class="custom-text">Nunc cursus leo risus non ac efficitur vel sed Mauris iaculis finibus
                        ex et viverra. Aliquam blandit ornare justo, in sagittis sem ornare sit amet. Cras
                        posuere vel ex at vulputate. Praesent volutpat consequat.</p>
                    <a href="#" class="custom-btn">READ MORE</a>
                </div>
            </div>
        </div>



    </div>
</div>
</div>
</div>
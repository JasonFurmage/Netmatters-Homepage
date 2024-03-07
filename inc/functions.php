<?php

function insertNewsArticles($articles) {
    foreach ($articles as $article) {
        echo 
            '<div class="latest-news_article-wrapper">
                <div class="latest-news_article">
                    <a href="#"></a>
                    <div class="latest-news_article-image">
                        <div class="latest-news-article-tag"><a href="#">' . htmlspecialchars($article["category"]) . '</a></div>
                        <img src="' . htmlspecialchars($article["image"]) . '" alt="">
                    </div>
                    <div class="latest-news_article-text">
                        <h3>
                            <strong>' . htmlspecialchars($article["title"]) . '</strong>';
                            if(empty($article['read_time'])) {
                                echo '<BR>&nbsp;';
                            }
                            echo '<span class="latest-news_article-readtime">' . htmlspecialchars($article["read_time"]) . '</span>
                        </h3>
                        <p>' . htmlspecialchars($article["body"]) . '</p>
                        <a class="latest-news-article-button" href="#"> Read More </a>
                        <div class="latest-news_article-author">
                            <div class="latest-news_article-author-avatar">
                                <img src="' . htmlspecialchars($article["author_image"]) . '" alt="Netmatters">
                            </div>
                            <div class="latest-news_article-author-details">
                                <strong>Posted by ' . htmlspecialchars($article["author"]) . ' </strong>
                                <br>' . date("jS F Y", strtotime(htmlspecialchars($article["date"]))) . '
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}

function insertOffices($offices) {
    foreach ($offices as $office) {
    echo 
        '<div class="office">
            <div class="office_info">
                <div class="office-image">
                    <a href="#"><img src="' . htmlspecialchars($office["image"]) . '" alt="' . htmlspecialchars($office["location"]) . ' Office"></a>
                </div>
                <div class="office-address">
                    <h2><a href="#"> ' . htmlspecialchars($office["location"]) . ' Office</a></h2>
                    <p>
                        ' . htmlspecialchars($office["unit"]) . ',
                        <br>
                        ' . htmlspecialchars($office["address_line_1"]) . ',
                        <br>
                        ' . htmlspecialchars($office["address_line_2"]) . ',
                        <br>
                        ' . htmlspecialchars($office["address_line_3"]) . ',
                        <br>
                        ' . htmlspecialchars($office["post_code"]) . '
                    </p>
                    <a href="#">' . htmlspecialchars($office["telephone"]) . '</a>
                    <div>
                        <a href="#" class="office-button">View More</a>
                    </div>
                </div>
            </div>
            <div class="office-map">
                    <a href="#"><img src="' . htmlspecialchars($office["map"]) . '" alt="' . htmlspecialchars($office["location"]) . ' Office"></a>
            </div>
        </div>';
    }
}

function insertFormMessages($errors) {

    $className = count($errors) == 0 ? "form-success" : "form-error";
    if (count($errors) == 0) $errors[] = "Your message has been sent!";

    foreach ($errors as $message) {
        echo 
            '<div class="form_message ' . $className . '">'
            . '<button type="button" class="form-message-button" onclick="closeMessage(this)">×</button>'
            . $message
            . '</div>';
    }
}

function isValidTelephone($string) {
    $regex = '/((?:\+|00)[17](?: |-)?|(?:\+|00)[1-9]\d{0,2}(?: |-)?|(?:\+|00)1-\d{3}(?: |-)?)?(0\d|([0-9]{3})|[1-9]{0,3})(?:((?: |-)[0-9]{2}){4}|((?:[0-9]{2}){4})|((?: |-)[0-9]{3}(?: |-)[0-9]{4})|([0-9]{7}))/';
    return preg_match($regex, $string);
}

?>

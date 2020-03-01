<? /* @var $documentsPage \App\Model\Page */ ?>
<div class="documents-index">
    <div class="documents-index__index-img ms-index-cert-1">
        <img src="http://kubexp.ru/img/cert_index_1.jpg">
    </div>
    <div class="documents-index__index-img ms-index-cert-2">
        <img src="http://kubexp.ru/img/cert_index_2.jpg">
    </div>
    <div class="documents-index__index-text ms-index-cert-about">
        <h2>{{$documentsPage->title}}</h2>
        <div>
            {{strip_tags($documentsPage->excerpt)}}
            <br>
            <br>
            <a href="/{{$documentsPage->slug}}" class="button button_theme_red">Подробнее</a>
        </div>
    </div>
</div>

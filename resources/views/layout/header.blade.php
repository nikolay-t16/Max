<?
use App\Model\Page;
    $menu = Page::getMenuTree();
?>
<div class="header">
    <div class="header__logo">
        <a class="logo" href="/">
                        <span class="logo__icon">
                            <svg width="52" height="52" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path
                                        d="M2.027.094h47.88a2 2 0 0 1 2 2V50a2 2 0 0 1-2 2H2.027a2 2 0 0 1-2-2V2.094a2 2 0 0 1 2-2z"
                                        id="a"></path></defs><g fill="none" fill-rule="evenodd"><mask id="b"
                                                                                                      fill="#fff"><use
                                            xlink:href="#a"></use></mask><path fill="#FFFFFE" mask="url(#b)"
                                                                               d="M.027 52h51.88V.094H.027z"></path><path
                                        fill="#FFFFFE" d="M1 24h50V10H1z"></path><path
                                        d="M3 51h46a2 2 0 0 0 2-2V16a63.008 63.008 0 0 1-27.134 6.112A62.723 62.723 0 0 1 1 17.821V49a2 2 0 0 0 2 2z"
                                        fill="#514F4E"></path><path
                                        d="M9.293 32.43h3.224c1.647 0 3.504.618 4.24 1.804.052.085.14.155.21.155.052 0 .088-.07.088-.137 0-.206-.106-.466-.158-.636L16.423 32H6.526c-.263 0-.333.034-.333.103 0 .05.176.103.298.154.7.173.77.911.77 2.028v5.845c0 1.564-.122 2.044-.77 2.544-.122.103-.491.206-.491.257 0 .052.123.069.526.069h10.668l.771-2.475c.017-.069.035-.104.035-.137 0-.035-.018-.051-.053-.051-.034 0-.262.17-.472.36-1.139 1.065-3.1 1.873-4.573 1.873h-1.979c-1.191 0-1.63-.275-1.63-1.53v-3.626h2.716c1.227 0 2.663.068 3.17 1.341.053.12.07.24.14.24.053 0 .07-.068.07-.36v-2.837c0-.171-.017-.257-.07-.257-.051 0-.104.051-.14.154-.245.706-1.365 1.29-2.645 1.29h-3.24V32.43M34 37c0-3.635-3.37-6-7-6s-7 2.365-7 6 3.37 6 7 6 7-2.365 7-6zm-2.482 0c0 2.63-1.148 5.558-4.518 5.558S22.482 39.63 22.482 37 23.63 31.442 27 31.442s4.518 2.929 4.518 5.558zm13.913-5.241c-1.457-.547-2.984-.759-4.549-.759-2.417 0-5.296.707-5.296 3.601 0 2.488 3.093 2.947 4.995 3.176 1.456.228 3.429.228 3.429 2.188 0 2.135-2.221 2.593-3.945 2.593-1.635 0-3.927-1.094-4.176-2.858-.017-.123-.036-.23-.125-.23s-.106.071-.195.39L35 41.96c1.955.687 3.092 1.04 5.19 1.04 2.575 0 5.81-.935 5.81-4.041 0-1.111-.48-2.558-3.66-2.982-2.719-.37-4.763-.301-4.763-2.436 0-1.782 1.901-2.099 3.323-2.099 2.186 0 3.323 1.04 3.768 2.275.034.072.052.108.088.108.053 0 .09-.09.177-.37l.498-1.696"
                                        fill="#FFFFFE"></path><path
                                        d="M1 16.089A64.735 64.735 0 0 0 20.263 19C31.388 19 41.875 16.205 51 11.29V3a2 2 0 0 0-2-2H3a2 2 0 0 0-2 2v13.089z"
                                        fill="#872D23"></path></g></svg>
                        </span>
            <span class="logo__text">EOS Group</span>
        </a>
    </div>
    <div class="header__menu" style="padding: 0px">
        <div class="menu hidden-md-and-down">
            @foreach( $menu[NULL] as $menuItem)
            <div class="menu__item">
                <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                    <a class="menu__link" itemprop="url" href="">{{$menuItem->title}}</a>
                    @if(isset($menu[$menuItem->id]))
                    <div class="menu__sub-menu">
                        @foreach( $menu[$menuItem->id] as $subMenuItem)
                        <? /* @var $subMenuItem Page */ ?>
                        <li itemprop="name">
                            <a class="menu__sub-menu-item" itemprop="url" href="{{$subMenuItem->slug}}">
                                {{$subMenuItem->title}}
                            </a>
                        </li>
                        @endforeach
                    </div>
                    @endif
                </ul>
            </div>
            @endforeach
        </div>
    </div>
    <div class="header__control">
        <div class="header__contacts">
            <div class="header__number"><a href="tel:88002001710">8 800 200 17 10</a></div>
            <div class="header__time">с 4:00 до 20:00 мск</div>
            <div class="header__time"><a
                    onclick="ym(53069677, 'reachGoal', 'highlight_email'); ga('gtm1.send', 'event', 'highlight', 'email', 'highlight_email'); return true;"
                    href="mailto:eos@oooeos.ru">eos@oooeos.ru</a></div>
        </div>
        <a class="button hidden-sm-and-down button_type_user button_type_pay" href="//oooeos.ru/payment/oplatit-online/"
           style="margin-right: 8px; width: 54px;"></a>
        <a class="button hidden-md-and-up button_size_mobile button_type_user button_type_pay"
           href="//oooeos.ru/payment/oplatit-online/"></a>
        <a class="button button_theme_red hidden-md-and-down" href="//lk.oooeos.ru/">
            <span class="button__text">Личный кабинет</span>
        </a>
        <a class="button button_size_mobile button_theme_red button_type_user hidden-lg-and-up"
           href="//lk.oooeos.ru/"></a>
        <a class="button button_size_mobile button_theme_white button_type_menu hidden-lg-and-up"
           href="#mobile-menu"></a>
    </div>
</div>

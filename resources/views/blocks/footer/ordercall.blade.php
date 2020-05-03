<div id="callbutton">
    <a href="#ordercall" id="callpic_a">
        <img id="callpic" src="https://oooeos.ru/img/circle.png" style="visibility: visible;">
    </a>
</div>
<div id="ordercall" class="modal modal-body">
    <div class="modal-body__title">Заказать звонок</div>
    <div id="forForm">
        <div id="formessage"></div>
        <div class="auth-block-lk__form">
            <form class="form-lkk" method="POST" id="zelo-form">
                <div id="stepOne">
                    <div class="form-lk__input">
                        <div class="input-container input-container_size_md">
                            <div class="input-container__control">
                                <input
                                    class="input-container__input"
                                    placeholder="Как к вам обращаться?"
                                    type="text"
                                    id="p_last_name"
                                    name="p_last_name"
                                    value=""
                                    required=""
                                />
                                <label class="input-container__placeholder" for="p_last_name"></label>
                            </div>
                            <div class="input-container__errors">
                                <div class="input-container__error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-lk__input">
                        <div class="input-container input-container_size_md">
                            <div class="input-container__control">
                                <input
                                    class="input-container__input"
                                    placeholder="Телефон"
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value=""
                                    required=""
                                />
                                <label class="input-container__placeholder" for="phone"></label>
                            </div>
                            <div class="input-container__errors">
                                <div class="input-container__error"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- видимая -->
                <div class="form-lk__button">
                    <button class="button button_size_lg button_theme_red" type="submit" id="zubmit">
                        <span class="button__text">Отправить</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

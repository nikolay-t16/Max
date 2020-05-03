<div id="regpopup" class="modal modal-body">
    <div class="modal-body__title">Регистрация</div>
    <div id="forForm">
        <div id="formessage"></div>
        <div class="auth-block-lk__form">
            <form class="form-lkk" method="POST" id="regpopup-form">
                <div id="stepOne">
                    <div class="form-lk__input">
                        <div class="input-container input-container_size_md">
                            <div class="input-container__control">
                                <input
                                    class="input-container__input"
                                    placeholder="E-mail"
                                    type="text"
                                    id="login_email"
                                    name="login_email"
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
                                    placeholder="Пароль"
                                    type="password"
                                    id="login_password"
                                    name="login_password"
                                    value=""
                                    required=""
                                />
                                <label class="input-container__placeholder" for="phone"></label>
                            </div>
                            <div class="input-container__errors">
                                <div class="input-container__error"></div>
                            </div>
                        </div>
                    </div><div class="form-lk__input">
                        <div class="input-container input-container_size_md">
                            <div class="input-container__control">
                                <input
                                    class="input-container__input"
                                    placeholder="Повторите пароль"
                                    type="password"
                                    id="login_password_repeat"
                                    name="login_password_repeat"
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

<div id="regpopup" class="modal modal-body">
    <div class="modal-body__title">Регистрация</div>
    <div id="forForm">
        <div id="formessage"></div>
        <div class="auth-block-lk__form">
            <form class="form-lkk user-reg_form" method="POST" id="regpopup-form" name="reg-form" action="/register">
                <div id="stepOne">
                    <div class="form-lk__input">
                        <div class="input-container input-container_size_md">
                            <div class="input-container__control">
                                <input
                                    class="input-container__input"
                                    placeholder="E-mail"
                                    type="text"
                                    id="reg_email"
                                    name="reg_email"
                                    value=""
                                    required=""
                                />
                                <label class="input-container__placeholder" for="login_email"></label>
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
                                    id="reg_password"
                                    name="reg_password"
                                    value=""
                                    required=""
                                />
                                <label class="input-container__placeholder" for="reg_password"></label>
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
                                    id="reg_password_confirmation"
                                    name="reg_password_confirmation"
                                    value=""
                                    required=""
                                />
                                <label class="input-container__placeholder" for="reg_password_confirmation"></label>
                            </div>
                            <div class="input-container__errors">
                                <div class="input-container__error"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- видимая -->
                <div class="form-lk__button">
                    <button class="button button_size_lg button_theme_red reg_submit_button" type="submit" id="reg_submit zubmit">
                        <span class="button__text">Отправить</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

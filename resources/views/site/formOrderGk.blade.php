<div class="smart-form">
    <div class="form-header">
        <h4><i class="fa fa-comments"></i>Заказать</h4>
    </div>
    <form method="post" action="#" id="order">
        <div class="form-body">
            <div class="form-section">
                <label for="names_order" class="field-label">Введите ваше имя</label>
                <div class="prepend-icon">
                    <span class="field-icon"><i class="fa fa-user"></i></span>
                    <input type="text" name="names_order" id="names_order" placeholder="имя">
                </div>
            </div>
            <div class="form-section">
                <label for="email_order" class="field-label">Введите ваш Email</label>
                <div class="prepend-icon">
                    <span class="field-icon"><i class="fa fa-envelope"></i></span>
                    <input type="email" name="email_order" id="email_order" placeholder="example@domain.com">
                </div>
            </div>
            <div class="form-section">
                <label for="tel_order" class="field-label">Введите ваш телефон</label>
                <div class="prepend-icon">
                    <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                    <input type="tel" name="tel_order" id="tel_order" placeholder="номер телефона">
                </div>

            </div>
            <div class="form-section">
                <label for="comment" class="field-label">Введите № Гибкого каменя</label>
                <div class="prepend-icon">
                    <input type="number" value="0" min="1" name="label_gk">
                </div>
            </div>
            <div class="form-section">
                <label for="comment" class="field-label">Введите количество (в листах)</label>
                <div class="prepend-icon">
                    <input type="number" value="0" min="1" name="count_gk">
                </div>
            </div>
        </div>
        <div class="form-footer">
            <input type="submit" name="modal_submit_cart_gk" value="заказать" class="button-form">
        </div>

        {{ csrf_field() }}
    </form>
</div>
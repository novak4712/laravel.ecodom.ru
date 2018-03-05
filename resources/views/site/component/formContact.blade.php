<section class="modal-form" id="popup1">
<div class="smart-form">
    <div class="form-header">
        <h4><i class="fa fa-comments"></i>Связаться</h4>
    </div>
    <form  action="{{ route('index') }}" method="post" id="contact">
        <div class="form-body">
            <div class="form-section">
                <label for="names" class="field-label">Введите ваше имя</label>
                <div class="prepend-icon">
                    <span class="field-icon"><i class="fa fa-user"></i></span>
                    <input type="text" name="names" id="names" placeholder="имя" required>
                </div>
            </div>
            <div class="form-section">
                <label for="email" class="field-label">Введите ваш Email</label>
                <div class="prepend-icon">
                    <span class="field-icon"><i class="fa fa-envelope"></i></span>
                    <input type="email" name="email" id="email" placeholder="example@domain.com" required>
                </div>
            </div>
            <div class="form-section">
                <label for="tel" class="field-label">Введите ваш телефон</label>
                <div class="prepend-icon">
                    <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                    <input type="tel" name="tel" id="tel" placeholder="номер телефона" required>
                </div>

            </div>
            <div class="form-section">
                <label for="comment" class="field-label">Задать вопрос</label>
                <div class="prepend-icon">
                    <span class="field-icon"><i class="fa fa-comments"></i></span>
                    <textarea class="comment" id="comment" name="comment" required></textarea>
                </div>
            </div>
        </div>
        <div class="form-footer">
            <input type="submit" name="modal_submit" value="Связаться" class="button-form">
        </div>

        {{ csrf_field() }}

    </form>
</div>
</section>
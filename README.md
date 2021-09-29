# yii2-password-input

## How it looks

<a href="https://imgbb.com/"><img src="https://i.ibb.co/pfKSmqj/yii2-password-input-widget.gif" alt="yii2-password-input-widget" border="0" /></a>

## Usage

```html
<div class="form-group row">
    <label for="current_password" class="col-sm-3">Current password</label>
    <div class="col-sm-9">
        <?= PasswordInput::widget(['name' => 'current', 'id' => 'current_password', 'maxlength' => 25]) ?>
    </div>
</div>
<div class="form-group row">
    <label for="new_password" class="col-sm-3">New password</label>
    <div class="col-sm-9">
        <?= PasswordInput::widget(['name' => 'new', 'id' => 'new_password', 'maxlength' => 25]) ?>
    </div>
</div>
<div class="form-group row">
    <label for="new_password_again" class="col-sm-3">New password again</label>
    <div class="col-sm-9">
        <?= PasswordInput::widget([
            'name' => 'renew',
            'id' => 'new_password_again',
            'maxlength' => 25,
            'message' => 'Пароли не совпадают',
            'onkeyup' => '
                function (el) {
                    var check = el.find(">i.check");
                    var input = el.find(">input");
                    var span = el.find(">span");

                    if (input.val() === $("#new_password").val()) {
                        span.addClass("hidden");
                        check.fadeIn(200);
                        input.css("background-color", "rgba(251, 218, 218, 0)");
                    } else {
                        span.removeClass("hidden");
                        check.css("display", "none");
                        input.css("background-color", "rgba(251, 218, 218, 0.3)");
                    }
                }
            '
        ]) ?>
    </div>
</div>
```

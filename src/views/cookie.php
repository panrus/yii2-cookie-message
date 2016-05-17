<?php
/*
 * @var $this \yii\web\View
 * @var $moreInfoLink array|string|null the URL for the hyperlink tag
 * @var $translationCategory string to use as translations category
 * */

use yii\helpers\Html;

?>
<div class="CookieMessageBox">
    <div class="modal" tabindex="-1" role="dialog"">
        <div class="modal-dialog  modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo Yii::t('cookie-message', 'Cookie settings') ?></h4>
                </div>
                <div class="modal-body">
                    <p><?php echo Yii::t('cookie-message', 'We use cookies on our websites to help us offer you the best online experience. By continuing to use our website, you are agreeing to our use of cookies. Alternatively, you can manage them in your browser settings.') ?></p>
                    <?php if(isset($moreInfoLink)):?>
                        <?php echo Html::a(Yii::t('cookie-message', 'More information'), $moreInfoLink);?>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <?php echo Html::button(Yii::t('cookie-message', 'Accept'), ['class' => 'btn btn-success CookieMessageOk']) ?>
                </div>
            </div>
        </div>
    </div>
</div>

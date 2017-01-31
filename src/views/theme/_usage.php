<?php

?>
<p>
    <?= Yii::t('hiqdev:themes', 'First of all, you should install yii2-thememanager') ?>
</p>
<p>
    The preferred way to install this <b>yii2-thememanager</b> is through <a
        href="http://getcomposer.org/download/">composer</a>.
</p>
<div class="highlight highlight-source-shell">
            <pre>php composer.phar require <span class="pl-s"><span class="pl-pds">"</span>hiqdev/yii2-thememanager<span
                        class="pl-pds">"</span></span></pre>
</div>
<p>or add</p>
<div class="highlight highlight-source-json">
            <pre><span class="pl-s"><span class="pl-pds">"</span>hiqdev/yii2-thememanager<span
                        class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>*<span
                        class="pl-pds">"</span></span></pre>
</div>
<p>to the require section of your composer.json.</p>
<p>Then you should install this theme</p>
<p>Either run</p>
<div class="highlight highlight-source-shell">
            <pre>php composer.phar require <span class="pl-s"><span
                        class="pl-pds">"</span>hiqdev/yii2-theme-<?= $model->name ?><span
                        class="pl-pds">"</span></span></pre>
</div>
<p>or add</p>
<div class="highlight highlight-source-json">
            <pre><span class="pl-s"><span class="pl-pds">"</span>hiqdev/yii2-theme-<?= $model->name ?><span
                        class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>*<span
                        class="pl-pds">"</span></span></pre>
</div>
<p>to the require section of your composer.json.</p>

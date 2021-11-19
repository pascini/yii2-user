<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/pascini>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var yii\web\View $this
 * @var pascini\user\Module $module
 */

$this->title = $title;
?>

<?= $this->render('/_alert', ['module' => $module]);

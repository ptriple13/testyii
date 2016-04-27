<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
<?php
   $arr1 = array(1,2,3);
    print_r($arr1);
    echo '<hr/>';
    
    $arr2 = [1,2,3];
    print_r($arr2);
    echo '<hr/>';
    
    $arr3= ['a'=>1,'b'=>2,'c'=>3];
    print_r($arr3);
    echo '<hr/>';
    
    echo $arr3['a'];
    echo '<hr/>';
    
    $b =  $arr3['b'];
    echo $b;
    echo '<hr/>';
?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
<?php
require dirname(__FILE__) . '/header.php';

$checkResult = (int)$_SESSION['check_result'];
if ($checkResult == 0) {
    header('Location:./index.php');
    exit(0);
}
?>

<div class="beta-intro">
    <p>欢迎下载使用24blog媒体博客软件。<?php echo $test;?></p>
    <p>24blog v1.0 beta 版已经发布，欢迎大家测试并提供bug测试报告。</p>
    <p>如果有问题可以加入我们的QQ群(72101715)进行反馈。</p>
</div>
<div class="start-install">
    <a class="beta-btn" href="./index.php?step=3">下一步</a>
</div>


<?php require dirname(__FILE__) . '/footer.php';?>
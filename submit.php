<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample21</title>
</head>
<body>
    <?php if (!empty($_REQUEST['reserve'])): ?>
    <h2>頑張ったな！</h2>
    <?php $reserves = $_REQUEST['reserve']; ?>
    <ul>
        <?php foreach ($reserves as $reserve): ?>
            <li><?php echo htmlspecialchars($reserve, ENT_QUOTES); ?></li>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
        <h2>何！？</h2>
        <p>6月末までって早く食べようよ！<P>
    <?php endif; ?>
</body>
</html>
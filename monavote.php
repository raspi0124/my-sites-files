<!DOCTYPE html>
<html>
<head>
	<title>Monavote beta</title>
</head>
<body>
<?php 
// 実際に使用する際はwawawaとvotetoを置き換えする.
// アドレスは投票ページ作成時にコマンド実行で取得。wawawa1は日本語不可にする。
echo "voteto1" ;
?>
への投票mona数   
<?php
echo exec('whoami');
echo exec('monacoin-cli getbalance wawawa1');
?>

この候補の投票先アドレス:
<?php echo exec('monacoin-cli getaddressesbyaccount wawawa1');
?>
への投票mona数   
<?php
echo exec('whoami');
echo exec('monacoin-cli getbalance wawawa2');
?>

<?php 
echo "voteto2" ;
?>
この候補の投票先アドレス:
<?php echo exec('monacoin-cli getaddressesbyaccount wawawa2');
?>

<?php 
echo "voteto3" ;
?>
への投票mona数   
<?php
echo exec('whoami');
echo exec('monacoin-cli getbalance wawawa3');
?>

この候補の投票先アドレス:
<?php echo exec('monacoin-cli getaddressesbyaccount wawawa3');
?>



</body>
</html>

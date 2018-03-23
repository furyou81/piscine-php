#!/usr/bin/php
<?PHP
$input = fopen("php://stdin", 'r');
echo "Entrez votre commande: ";
while ($tmp = fgets($input))
{
	$tmp = str_replace("\n", "",$tmp);
	if (is_numeric($tmp))
	{
		if ($tmp % 2 == 0)
			echo "Le chiffre " . $tmp . " est Pair\n";
		else
			echo "Le chiffre " . $tmp . " est Impair\n";
	}
	else
		echo "'" . $tmp . "' n'est pas un chiffre\n";
	echo "Entrez votre commande: ";
}
	echo "\n";
fclose($input);
?>
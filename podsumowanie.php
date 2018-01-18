<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!--<meta http-equiv="Refresh" content="1" />-->
	</head>
<body>

<?php
abstract class Matrix
{
	protected $cols;  
	protected $rows;  
	protected $tab= array(array());  
	protected  function __construct ($rows, $cols)
	{
	 $this->cols=$cols;
	 $this->row=$rows;	
		
			for ($i=0; $i<= $this->cols;$i++)
			{
				for($j=0;$j<=$this->rows;$j++)
				{
					$this->tab[$i][$j]=rand(1,150);
				}
			}
	   }
}

class Table extends Matrix
{
	//$height

	   public function __construct($rows, $cols) //może pobierac $height i przez to rozszerzac konstruktor
   {

	  parent::__construct($rows, $cols);
   }

	public function printHTML()
	{
	echo"<table style=\"border-collapse:collapse;\">";
		for ($i=0; $i<= $this->rows; $i++)
		{
			echo "<tr>" ;
			for($j=0;$j<=$this->cols ;$j++)
			{
				echo "<td style=\"border:1px solid black;\">";
				echo $this->tab[$j][$i];
				echo "</td>";
			}

			echo "</tr>" ;
		}
	echo "</table>";
	}
}
$rows=rand(1,20);
$cols=rand(1,20);
$test= new Table($rows,$cols);
$test->printHTML();


?>

</body>
</html>

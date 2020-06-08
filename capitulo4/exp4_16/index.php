<?php
/* in_array 
Localiza um elemento com um valor específico dentro do array
*/
$lang = array('Java' => '16.73%	+1.69%',
'C' => '16.72%	+2.64%',
'Python' =>	'9.31%	+1.15%',
'C++' => '6.78%	-2.06%',
'C#' =>	'4.74%	+1.23%',
'Visual Basic' => '4.72%	-1.07%',
'JavaScript' =>	'2.38%	-0.12%',
'PHP' => '2.37%	+0.13%',
'SQL' => '2.17%	-0.10%',
'R' => '1.54%	+0.35%',
'Swift' => '1.52%	+0.54%',
'Go' =>	'1.36%	+0.35%',
'Ruby' => '1.25%	-0.02%',
'Assembly language' => '1.16%	-0.55%',
'PL/SQL' =>	'1.05%	+0.26%',
'Perl' => '0.97%	-0.30%',
'Objective-C' => '0.94%	-0.57%',
'MATLAB' =>	'0.93%	-0.36%',
'Classic Visual Basic' => '0.83%	-0.23%',
'Scratch' => '0.77%	+0.28%');
echo '<table border="1" width="35%">';
echo '<tr><th colspan="2">Rank Linguagens</th></tr>';
foreach($lang as $key => $value){
    echo '<tr><td width="65%%">' .$key . '</td><td align="right">' . $value . '</td></tr>';
}
echo '</table>';

// $item = in_array('Java',$lang);
if(in_array('16.73%	+1.69%',$lang))
    echo '16.73%	+1.69% encontrado';
else
    echo "Not found";


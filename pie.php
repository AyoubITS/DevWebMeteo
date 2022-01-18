<?php


# PHPlot Example: Pie/text-data-single
require_once './include/phplot.php';
include './include/fonction.inc.php';
# The data labels aren't used directly by PHPlot. They are here for our
# reference, and we copy them to the legend below.
$data = array(
  array('Auvergne', viewers()),
  array('Bourgogne', viewers2()),
  array('Bretagne', viewers3()),
  array('Centre Val de Loire', viewers4()),
  array('Corse', viewers5()),
  array('Grand Est', viewers6()),
  array('Hauts de France', viewers7()),
  array('Ile de France', viewers8()),
  array('Normandie', viewers9()),
  array('Nouvelle Aquitaine', viewers10()),
  array('Occitanie', viewers11()),
  array('Pays de la Loire', viewers12()),
  array('Provence Alpes Cote dazur', viewers13()),
);

$plot = new PHPlot(1150,850);
$plot->SetImageBorderType('plain');
$plot->SetPlotType('pie');
$plot->SetDataType('text-data-single');
$plot->SetDataValues($data);

# Set enough different colors;
$plot->SetDataColors(array('red', 'green', 'blue', 'yellow', 'cyan',
                        'magenta', 'brown', 'lavender', 'pink',
                        'gray', 'orange','navy','#008080'));

# Main plot title:
$plot->SetTitle("Nombre de consultation par region)");

# Build a legend from our data array.
# Each call to SetLegend makes one line as "label: value".
foreach ($data as $row)
  $plot->SetLegend(implode(': ', $row));
# Place the legend in the upper left corner:
$plot->SetLegendPixels(5, 5);

$plot->DrawGraph();
?>
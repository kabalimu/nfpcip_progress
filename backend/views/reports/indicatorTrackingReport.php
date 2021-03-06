<?php
use dosamigos\tableexport\ButtonTableExport;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = Yii::t('app', 'Indicator Tracking Report');
?>
    <?php
       echo $this->render('_formIndicatorTrackingReport', ['model' => $model]);
    ?>
    
 <div style="float: right; padding: 1px;">
<?php
    if (isset($dataProvider)) {
        echo ButtonTableExport::widget(
            [
                'label' => 'Export Report to:- ',
                'selector' => '#perfomance-report', // any jQuery selector
                'exportClientOptions' => [
                    'ignoredColumns' => [0, 7],
                    'useDataUri' => false,
                    'url' => \yii\helpers\Url::to('controller/download')
                ]
            ]
    );
    ?>
</div>
<br/>

<h5>Indicators for NFPCIP Activities vs Targets:- <?php echo date('F Y', strtotime($from_date)) . ' to ' . date('F Y', strtotime($to_date)) ?></h5>

<table width="100%" class="table table-bordered table-hover dataTable">
	<tr>
	<th>Strategy item</th>
	<th>Indicator</th>
	<th>Annual target</th>
	<th>Value for quarter</th>
	<th>Quarter value as % of annual target</th>
        <th>Cumulative value</th>
        <th>Cumulative value as % of annual target</th>
	</tr>
</table>
<?php } ?>











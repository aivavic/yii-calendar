<?php
/**
 * _title.php
 *
 * @author (yiicalendar extension) Tomasz Trejderowski <tomasz@trejderowski.pl>
 * @author (ecalendarview extension) Martin Ludvik <matolud@gmail.com>
 * @copyright Copyright &copy; 2014 by Tomasz Trejderowski & Martin Ludvik
 * @license http://opensource.org/licenses/MIT MIT license
 */
?>

<?php echo Yii::t('yiicalendar', $pagination->getMiddleRelevantPageDate()->format('F')); ?>,
<?php echo $pagination->getMiddleRelevantPageDate()->format('Y'); ?>
